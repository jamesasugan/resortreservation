<?php
    include 'src/php/includes/data.php';
    $services = $data['services'];
?>

<section id="services" class="w-full bg-white py-20 text-black">
    <div class="w-full max-w-screen-2xl mx-auto px-5 mt-14">
        <h1 class="text-lg font-semibold text-center uppercase text-yellow-600">Private island and Spa </h1>
        <p class="text-center text-[2.5rem] my-5 px-10 italictext text-[#50B5C1]">Your Starry Escape Awaits</p>

        <div id="services_section" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-14 lg:gap-20 mt-10 px-10 py-10">

        <?php foreach($services as $service): ?>
            <div class="flex flex-col items-center text-center h-full">
                <div class="w-16 h-16 flex items-center justify-center bg-yellow-500 rounded-full shadow-md">
                    <i class="<?= $service['icon']; ?> text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-semibold my-1 mt-4"><?= $service['title']; ?></h3>
                <p class="text-base"><?= $service['description']; ?></p>
            </div>
        <?php endforeach; ?>

           
        </div>
    </div>
</section>


<style>
     @import url('https://fonts.googleapis.com/css2?family=WindSong:wght@400;500&display=swap');
     .italictext {
         font-family: 'WindSong', cursive;
     }
</style>