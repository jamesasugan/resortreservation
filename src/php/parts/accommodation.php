<?php
include '../../php/config.php';
include '../includes/data.php';

$selectedRoom = isset($_GET['room']) ? $_GET['room'] : null;

$roomData = null;
foreach ($data['rooms'] as $room) {
    if ($room['room_name'] === $selectedRoom) {
        $roomData = $room;
        break;
    }
}

$roomDetailKey = strtolower(str_replace(' ', '_', $roomData['room_type'] ?? ''));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort Reservation</title>
    <link rel="icon" type="image/x-icon" href="<? echo BASE_URL; ?>src/img/logo2.png">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>src/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>src/css/output.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>src/css/swiper/swiper-bundle.min.css"/>

    <script src="https://kit.fontawesome.com/70df29d299.js" crossorigin="anonymous"></script>
    <script defer src="<?php echo BASE_URL; ?>src/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>src/js/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    
    <?php include '../includes/navbar.php'; ?> 
    
    <section id="room-info" class="relative w-full min-h-screen bg-white pt-[45rem] pb-20">
        <img src="<?= $roomData['room_img'] ?? '../../img/default.jpg'; ?>" alt="" class="absolute w-full h-[45rem] object-cover top-0 left-0 z-0"/>

        <div class="relative w-full max-w-[1600px] mx-auto px-5 sm:px-10 py-10 text-black">
            <div class="flex flex-col items-start py-8 px-20">
                <p class="font-semibold uppercase text-yellow-500 mt-3 text-base sm:text-lg">
                    <?= $roomData['room_type'] ?? 'Room Type Not Found'; ?>
                </p>
                <h2 class="text-2xl sm:text-3xl md:text-4xl capitalize py-3">
                    <?= $roomData['room_name'] ?? 'Room Name Not Found'; ?>
                </h2>
                <div class="flex justify-start text-[0.8rem] sm:text-base gap-5 flex-col 2xl:flex-row text-left">
                    <p class="flex items-center gap-1 font-medium capitalize">
                        <ion-icon name="people-outline" class="text-xl"></ion-icon>
                        <?= $roomData['capacity'] ?? 'Unknown Capacity'; ?>
                    </p>
                    <p class="flex items-center gap-1 font-medium capitalize">
                        <ion-icon name="bed-outline" class="text-xl"></ion-icon>
                        <?= $roomData['bed_type'] ?? 'Unknown Bed Type'; ?>
                    </p>
                    <p class="flex items-center gap-1 font-medium capitalize">
                        <i class="fa-solid fa-bath"></i>
                        <?= $roomData['bathroom'] ?? 'Unknown Bathroom'; ?>
                    </p>
                    <p class="flex items-center gap-1 font-medium">
                        <ion-icon name="home-outline" class="text-xl"></ion-icon>
                        <?= number_format((int) str_replace(',', '', $room['sqft'])) ?> sqft
                    </p>
                </div>
                <p class="font-semibold text-base sm:text-lg my-3">
                    Starting at ₱<?= rtrim(rtrim(number_format((int) str_replace(',', '', $room['price']), 2), '0'), '.'); ?> per night
                </p>
                <p class="text-lg text-justify w-full sm:w-3/4 mt-3">
                    <?= $roomData['description'] ?? 'No additional details available.'; ?>
                </p>
            </div>
            <div class="flex flex-row w-full gap-5 justify-center items-center py-10">
                <img src="../../img/event1.avif" alt="" class="w-full h-[37rem] object-cover"/>
                <img src="../../img/event2.avif" alt="" class="w-full h-[37rem] object-cover"/>
            </div> 
            <p class="text-[2.5rem] italictext text-[#50B5C1] px-20">What's Included</p>
            <div class="flex flex-row justify-between w-full px-20">
                <div class="flex flex-col w-3/4">
                    <p class="text-2xl">Room Amenities:</p>
                    <ul class="list-disc marker:text-sky-400 pl-5 text-[1.1rem] mt-1 grid grid-cols-2 gap-x-8 gap-y-1">
                        <?php if (!empty($roomData['amenities'])): ?>
                            <?php foreach ($roomData['amenities'] as $amenity): ?>
                                <li><?= htmlspecialchars($amenity); ?></li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>No amenities listed.</li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="flex flex-col w-1/4">
                    <p class="text-2xl">Room Features:</p>
                    <ul class="list-disc marker:text-sky-400 pl-5 text-[1.1rem] mt-1">
                        <?php if (!empty($roomData['features'])): ?>
                            <?php foreach ($roomData['features'] as $feature): ?>
                                <li><?= htmlspecialchars($feature); ?></li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>No features listed.</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <hr class="mt-10 border-t-1 border-black max-w-[1400px] mx-auto"/>

            <div class="flex flex-row justify-between w-full px-20 mt-10">
                <div class="flex flex-col w-3/4">
                    <p class="text-[2.5rem] italictext text-[#50B5C1] ">Included Resort Services</p>
                    <ul class="list-disc marker:text-sky-400 pl-5 text-[1.1rem] mt-1">
                        <?php if (!empty($roomData['included_stay'])): ?>
                            <?php foreach ($roomData['included_stay'] as $included): ?>
                                <li><?= htmlspecialchars($included); ?></li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>No inclusions listed.</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <hr class="mt-10 border-t-1 border-black max-w-[1400px] mx-auto"/>
            <div class="flex flex-col mt-10">
                <h1 class="text-center text-2xl">Ready to Book?</h1>
                
                <?php include 'datepicker.php' ?>                
            </div>
        </div>
    </section>



    <script src="<?php echo BASE_URL; ?>src/js/script.js"></script> 
    <script src="<?php echo BASE_URL; ?>src/js/datepicker.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
