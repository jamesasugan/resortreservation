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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/output.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/swiper/swiper-bundle.min.css"/>

    <script src="https://kit.fontawesome.com/70df29d299.js" crossorigin="anonymous"></script>
    <script defer src="<?php echo BASE_URL; ?>jquery/dist/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>js/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    
    <?php include '../includes/navbar.php'; ?> 
    
    <section id="room-info" class="w-full h-full bg-white mt-20">
        <div class="w-full h-full max-w-[1800px] mx-auto px-5 sm:px-10 py-10">
            <h2 class="text-xl font-bold"><?php echo $roomTitle; ?></h2>
            <p><?php echo $roomDescription; ?></p>
            <a href="<?php echo $_SERVER['HTTP_REFERER'] ?? BASE_URL . '../index.php'; ?>" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Go Back</a>
        </div>
    </section>

    <script src="<?php echo BASE_URL; ?>js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
