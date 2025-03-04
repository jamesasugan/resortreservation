

  const datepicker = document.getElementById('datepicker');
  const datepickerContainer = document.getElementById('datepicker-container');
  const daysContainer = document.getElementById('days-container');
  const currentMonthElement = document.getElementById('currentMonth');
  const prevMonthButton = document.getElementById('prevMonth');
  const nextMonthButton = document.getElementById('nextMonth');
  const toggleDatepicker = document.getElementById('toggleDatepicker');

  let currentDate = new Date();
  let selectedStartDate = null;
  let selectedEndDate = null;

  // Function to render the calendar
  function renderCalendar() {
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    currentMonthElement.textContent = currentDate.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });

    daysContainer.innerHTML = '';
    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    for (let i = 0; i < firstDayOfMonth; i++) {
      daysContainer.innerHTML += `<div></div>`;
    }

    for (let i = 1; i <= daysInMonth; i++) {
      const day = new Date(year, month, i);
      const dayString = day.toLocaleDateString('en-US');

      let className = "flex h-[46px] w-[46px] items-center justify-center rounded-full hover:bg-gray-2 dark:hover:bg-dark mb-2";

      // Highlight start and end dates
      if (selectedStartDate && dayString === selectedStartDate) {
        className += " bg-primary text-white dark:text-white rounded-r-none";
      }
      if (selectedEndDate && dayString === selectedEndDate) {
        className += " bg-primary text-white dark:text-white rounded-l-none";
      }

      // Highlight dates between start and end
      if (selectedStartDate && selectedEndDate && new Date(day) > new Date(selectedStartDate) && new Date(day) < new Date(selectedEndDate)) {
        className += " bg-gray-2 dark:bg-dark rounded-none";  // Add your custom class for the range
      }

      daysContainer.innerHTML += `<div class="${className}" data-date="${dayString}">${i}</div>`;
    }

    document.querySelectorAll('#days-container div').forEach(day => {
      day.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent event from bubbling up to document

        const selectedDay = this.dataset.date;

        if (!selectedStartDate || (selectedStartDate && selectedEndDate)) {
          selectedStartDate = selectedDay;
          selectedEndDate = null;
        } else {
          if (new Date(selectedDay) < new Date(selectedStartDate)) {
            selectedEndDate = selectedStartDate;
            selectedStartDate = selectedDay;
          } else {
            selectedEndDate = selectedDay;
          }
        }

        updateInput();
        renderCalendar(); // Re-render calendar to update highlighted range
      });
    });
  }

  // Function to update the datepicker input
  function updateInput() {
    const startDateButton = document.getElementById('startDate');
    const endDateButton = document.getElementById('endDate');

    if (selectedStartDate && selectedEndDate) {
      datepicker.value = `${selectedStartDate} - ${selectedEndDate}`;
      startDateButton.textContent = selectedStartDate;
      endDateButton.textContent = selectedEndDate;
    } else if (selectedStartDate) {
      datepicker.value = selectedStartDate;
      startDateButton.textContent = selectedStartDate;
      endDateButton.textContent = '';
    } else {
      datepicker.value = '';
      startDateButton.textContent = 'Select Start Date';
      endDateButton.textContent = 'Select End Date';
    }
  }

  // Toggle datepicker visibility
  datepicker.addEventListener('click', function () {
      datepickerContainer.classList.toggle('hidden');
      renderCalendar();
    });

    toggleDatepicker.addEventListener('click', function () {
      datepickerContainer.classList.toggle('hidden');
      renderCalendar();
    });

  // Navigate months
  prevMonthButton.addEventListener('click', function () {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
  });

  nextMonthButton.addEventListener('click', function () {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
  });


  // Close datepicker when clicking outside
    document.addEventListener('click', function (event) {
      if (!datepicker.contains(event.target) && !datepickerContainer.contains(event.target)) {
        datepickerContainer.classList.add('hidden');
      }
    });

