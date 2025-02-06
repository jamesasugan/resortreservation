<?php 
$title = "Home"; 
?> 


    <div class="px-5 w-full h-screen bg-white mx-auto pt-10 flex justify-center items-center">
        <div class="swiper mySwiper w-full h-[90%] rounded-[2.5rem] max-w-[1800px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-[url('../img/bg.avif')] bg-cover h-full flex justify-center items-center">
                </div>
                <div class="swiper-slide bg-[url('../img/bg2.avif')] bg-cover h-full flex justify-center items-center">
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>  
        </div>

        <!-- Content above Swiper -->
        <div class="absolute top-0 left-0 w-full h-full flex flex-col gap-2 justify-center m-auto text-white cursor-default px-20 sm:px-40 text-center md:text-start">
            <h1 class=" uppercase font-semibold z-10 text-lg sm:text-xl md:text-2xl lg:text-4xl">Elevate your Vacation</h1>
            <div class=" font-bold w-full md:w-1/2 z-10">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-wrap">Experience The Magic of Flight</h1>
            </div>
            <div class="z-10 mt-10 md:mt-5 flex justify-center md:justify-start">
                <button class="px-16 py-4 font-semibold transition duration-150 bg-white hover:bg-gray-300 text-black border-none rounded-[2.5rem] text-lg flex items-center justify-center">
                    Book Now
                </button>
            </div>
        </div>
    </div>

<script>
    const swiper = new Swiper('.mySwiper', {
        spaceBetween: 0, // No space between slides
        loop: true, // Enable looping
        autoplay: {
            delay: 2500, // Delay between slides (2.5 seconds)
            disableOnInteraction: false, // Continue autoplay after interaction
        },
        pagination: {
            el: '.swiper-pagination', 
            type: "progressbar",
        },
        speed: 2000, 
    });
</script>
