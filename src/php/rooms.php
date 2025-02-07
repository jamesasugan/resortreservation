<?php 
    $rooms = [
        [
            'room_img' => 'https://wakayaislandresort.com/wp-content/uploads/2024/08/Bure-Ocean-View_1.jpg',
            'room_type' => 'One Bedroom Suite',
            'room_name' => 'Ocean View Bure',
            'capacity' => 'Sleeps 2 Adults & 1 Child',
            'bed_type' => '1 King Bed',
            'bathroom' => '1 Bathroom',
            'sqft' => '1, 650',
            'price' => '2, 800'
        ],
        [
            'room_img' => 'https://wakayaislandresort.com/wp-content/uploads/2023/08/Garden-View-Bure-Wakaya-Island-Resort-Spa-3-1.webp',
            'room_type' => 'One Bedroom Suite',
            'room_name' => 'Garden View Bure',
            'capacity' => 'Sleeps 2 Adults & 1 Child',
            'bed_type' => '1 King Bed',
            'bathroom' => '1 Bathroom',
            'sqft' => '1, 650',
            'price' => '2, 500'
        ],
        [
            'room_img' => 'https://wakayaislandresort.com/wp-content/uploads/2024/07/Seqa-Na-Leqa-Wakaya-Island-Resort-Spa-Private-Island-Resort-Fiji-5.webp',
            'room_type' => 'Two bedroom villa w/ guest house',
            'room_name' => 'Seqa Na Leqa',
            'capacity' => 'Sleeps 4 Adults',
            'bed_type' => '2 bedrooms & 2 king beds',
            'bathroom' => '1 Bathroom',
            'sqft' => '1, 650',
            'price' => '2, 500'
        ],
        [
            'room_img' => 'https://wakayaislandresort.com/wp-content/uploads/2024/07/Vale-Levu-Wakaya-Island-Resort-Spa-Private-Island-Resort-Fiji-4.webp',
            'room_type' => 'Two bedroom suite with spa',
            'room_name' => 'Vale Levu',
            'capacity' => 'Sleeps 4 Adults & 2 Children',
            'bed_type' => '2 bedrooms & 2 king beds',
            'bathroom' => '2 Bathrooms',
            'sqft' => '4, 500',
            'price' => '5, 300'
        ]
    ]
?>

<style>
    .swiper-button-next::after, .swiper-button-prev::after {
    content: "";
}
</style>

<section id="rooms" class="w-full min-h-screen bg-white text-black">
    <div class="max-w-[1800px] mx-auto px-5 sm:px-10">
        <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold text-center sm:text-left">Choose your rooms</h1>

        <!-- Swiper Container -->
        <div class="relative mt-20 px-0 sm:px-5">
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
                                <a href="#" class="btn uppercase w-full rounded-none bg-yellow-500 text-white border-none hover:bg-yellow-600 hover:shadow-lg">View Suite</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="flex sm:block justify-center gap-5 sm:absolute sm:top-1/2 sm:left-[-2rem] sm:right-[-2rem] md:left-[-2.5rem] md:right-[-2.5rem] sm:flex sm:justify-between mt-5">
                <div class="swiper-room-prev text-4xl sm:text-5xl text-black cursor-pointer">
                    <ion-icon name="arrow-back-outline"></ion-icon>
                </div>
                <div class="swiper-room-next text-4xl sm:text-5xl text-black cursor-pointer">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".roomsSwiper", {
        slidesPerView: 1, // Change this for responsiveness
        spaceBetween: 10,
        loop: true, // Makes the slides loop
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
