<?php 
    include 'src/php/includes/data.php';
    $rooms = $data['rooms'];
?>

<style>
    .swiper-button-next::after, .swiper-button-prev::after {
    content: "";
}
</style>

<section id="rooms" class="w-full h-full bg-white text-black">
    <div class="max-w-[1800px] mx-auto px-5 sm:px-10">
        <p class="text-[1.5rem] uppercase">Explore</p>
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold text-left uppercase">Our Rooms</h1>

        <!-- Swiper Container -->
        <div class="relative px-0 sm:px-5 py-10">
            <div class="swiper roomsSwiper">
                <div class="swiper-wrapper">
                    <?php foreach($rooms as $room): ?>
                    <div class="swiper-slide flex flex-wrap">
                        <div class="bg-gray-200 w-full p-5 shadow-xl rounded-none flex-1 h-full">
                            <figure>
                                <img class="w-full h-[23rem] object-cover" src="<?= $room['room_img'] ?>" alt="Room Image" />
                            </figure>
                            <div>
                                <h2 class="font-semibold uppercase text-yellow-500 mt-3 text-base sm:text-lg"><?= $room['room_type'] ?></h2>
                                <p class="text-2xl sm:text-3xl md:text-4xl capitalize"><?= $room['room_name'] ?></p>
                                <div class="flex justify-start text-[0.8rem] sm:text-base gap-1 flex-col 2xl:flex-row 2xl:gap-5 text-left">
                                    <p class="flex items-center gap-1 font-medium capitalize">
                                        <ion-icon name="people-outline" class="text-xl"></ion-icon> <?= $room['capacity'] ?>
                                    </p>
                                    <p class="flex items-center gap-1 font-medium capitalize">
                                        <ion-icon name="bed-outline" class="text-xl"></ion-icon> <?= $room['bed_type'] ?>
                                    </p>
                                </div>
                                <div class="flex justify-start text-[0.8rem] sm:text-base gap-1 flex-col 2xl:flex-row 2xl:gap-5 text-left">
                                    <p class="flex items-center gap-1 font-medium capitalize">
                                        <i class="fa-solid fa-bath"></i> <?= $room['bathroom'] ?>
                                    </p>
                                    <p class="flex items-center gap-1 font-medium">
                                        <ion-icon name="home-outline" class="text-xl"></ion-icon> <?= $room['sqft'] ?> sqft
                                    </p>
                                </div>
                                <p class="font-semibold text-base sm:text-lg my-5">Starting at ₱<?= $room['price'] ?> per night</p>
                                <a href="src/php/parts/room_info.php?room=suite" class="btn uppercase w-full rounded-none bg-yellow-500 text-white border-none hover:bg-yellow-600 hover:shadow-lg">View Suite</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="flex sm:block justify-center gap-5 sm:absolute sm:top-1/2 sm:left-[-2rem] sm:right-[-2rem] md:left-[-2.5rem] md:right-[-2.5rem] sm:flex sm:justify-between mt-5">
                <div class="swiper-room-prev text-4xl sm:text-5xl text-yellow-500 cursor-pointer">
                    <ion-icon name="arrow-back-outline"></ion-icon>
                </div>
                <div class="swiper-room-next text-4xl sm:text-5xl text-yellow-500 cursor-pointer">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
            </div>
        </div>
    </div>
    <div id="roomInfoContainer"></div> 
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".roomsSwiper", {
        slidesPerView: 1, 
        spaceBetween: 20,
        loop: true, 
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-room-next",
            prevEl: ".swiper-room-prev",
        },
        breakpoints: {
            640: { slidesPerView: 1 }, // Mobile
            768: { slidesPerView: 2 }, // Tablet
            1224: { slidesPerView: 3 }, // Desktop

        }
    });
});
</script>
