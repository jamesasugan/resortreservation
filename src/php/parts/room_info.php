<?php
include '../../php/config.php';

if (!isset($_GET['room'])) {
    die("No room selected.");
}

$room = $_GET['room'];
$roomDetails = [
    "suite" => [
        "title" => "Suite Room",
        "description" => "A luxurious suite with modern amenities."
    ],
    "deluxe" => [
        "title" => "Deluxe Room",
        "description" => "A cozy deluxe room with a scenic view."
    ],
];

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
    
    <section id="room-info" class="relative w-full min-h-screen bg-gray-500 pt-[23rem]">
        <img src="../../img/event1.avif" alt="" class="absolute w-full h-[23rem] object-cover top-0 left-0 z-0"/>

        <div class="relative w-full max-w-[1800px] mx-auto px-5 sm:px-10 py-10">
            <h2 class="text-xl font-bold text-green-500"><?php echo $roomTitle; ?></h2>
            <p><?php echo $roomDescription; ?></p>
            <a href="<?php echo BASE_URL; ?>#rooms" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">
                Go Back
            </a>
        </div>
    </section>



    <script src="<?php echo BASE_URL; ?>src/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
