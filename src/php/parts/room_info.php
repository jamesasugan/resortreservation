<?php
include '../../php/config.php';
include '../includes/data.php';

if (!isset($_GET['room'])) {
    die("No room selected.");
}

$room = $_GET['room'];
$roomDetails = $data['roomDetails'];

if (!array_key_exists($room, $roomDetails)) {
    die("Room not found.");
}

$roomTitle = $roomDetails[$room]['title'];
$roomDescription = $roomDetails[$room]['description'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $roomTitle; ?> - Resort Reservation</title>

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
    
    <section id="room-info" class="relative w-full min-h-screen bg-white pt-[45rem]">
        <img src="../../img/event4.avif" alt="" class="absolute w-full h-[45rem] object-cover top-0 left-0 z-0"/>

        <div class="relative w-full max-w-[1500px] mx-auto px-5 sm:px-10 py-10 text-black">
            <p class="font-semibold uppercase text-yellow-500 mt-3 text-base sm:text-lg">One Bedroom Suite</p>
            <h2 class="text-2xl sm:text-3xl md:text-4xl capitalize py-3"><?php echo $roomTitle; ?></h2>
            <div class="flex justify-start text-[0.8rem] sm:text-base gap-5 flex-col 2xl:flex-row text-left">
                <p class="flex items-center gap-1 font-medium capitalize">
                    <ion-icon name="people-outline" class="text-xl"></ion-icon> Sleeps 2 Adults & 1 Child
                </p>
                <p class="flex items-center gap-1 font-medium capitalize">
                    <ion-icon name="bed-outline" class="text-xl"></ion-icon> 1 King Bed
                </p>
                <p class="flex items-center gap-1 font-medium capitalize">
                    <i class="fa-solid fa-bath"></i> 1 Bathroom
                </p>
                <p class="flex items-center gap-1 font-medium">
                    <ion-icon name="home-outline" class="text-xl"></ion-icon>1, 650 sqft
                </p>
            </div>
            <p class="text-lg text-justify w-full sm:w-3/4 py-7"><?php echo $roomDescription; ?></p>
            <p class="font-semibold text-base sm:text-lg">Starting at ₱2, 000 per night</p>
            <div class="flex flex-col items-start py-8">
                <button class="btn border-none bg-yellow-500 text-white rounded-none px-14 hover:bg-yellow-600 transition duration-200">Book now</button>
                <a href="<?php echo BASE_URL; ?>#rooms" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">
                    Go Back
                </a>
            </div>
            
            
        </div>
    </section>



    <script src="<?php echo BASE_URL; ?>src/js/script.js"></script> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
