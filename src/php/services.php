<?php
    $services = [
        [
            'icon' => 'fa-brands fa-telegram',
            'title' => 'Airport Pickup',
            'description' => 'We provide escort from the airport to the hotel'
        ],
        [
            'icon' => 'fa-solid fa-book',
            'title' => 'Easy Booking',
            'description' => 'Quick and easy booking of tours for upcoming dates'
        ],
        [
            'icon' => 'fa-solid fa-users',
            'title' => 'Best tour guide',
            'description' => 'Our best tour guide is ready to guide your trip'
        ],
        [
            'icon' => 'fa-solid fa-tag',
            'title' => 'Lots of promos',
            'description' => 'Various promotions and drawings of tour'
        ]
    ]
?>

<section id="services" class="w-full bg-white py-24 text-black">
    <div class="max-w-screen-2xl mx-auto px-5">
        <h1 class="text-5xl sm:text-6xl md:text-7xl font-bold text-center">Top Values for you</h1>
        <p class="text-center text-base sm:text-xl my-5 px-10">Try variety of benefits when using our services</p>

        <div id="services_section" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-14 lg:gap-20 mt-10 px-10 py-10">

        <?php foreach($services as $service): ?>
            <div class="flex flex-col items-center text-center h-full">
                <div class="w-16 h-16 flex items-center justify-center bg-gray-300 rounded-full shadow-md">
                    <i class="<?= $service['icon']; ?> text-3xl"></i>
                </div>
                <h3 class="text-2xl font-semibold my-1 mt-4"><?= $service['title']; ?></h3>
                <p class="text-base"><?= $service['description']; ?></p>
            </div>
        <?php endforeach; ?>

           
        </div>
    </div>
</section>