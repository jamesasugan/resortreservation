<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? "Resort Reservation"; ?></title>
    <!-- css -->
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/output.css">

    <script src="https://kit.fontawesome.com/70df29d299.js" crossorigin="anonymous"></script>
    <script defer src="src/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="src/css/swiper/swiper-bundle.min.css"/>
    <script src="src/js/swiper/swiper-bundle.min.js"></script>
    
</head>
<body>
    
    <?php include 'src/php/includes/navbar.php' ?>
    <?php include 'src/php/sections/home.php'?>
    <?php include 'src/php/sections/services.php' ?>
    <?php include 'src/php/sections/rooms.php' ?>
    <?php include 'src/php/sections/events.php' ?>
    



    <script src="src/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html> 