<?php 
$title = "Home"; 
?> 

    <section id="home" class="w-full relative">
        <video class="absolute top-13 inset-x-0 h-full sm:h-[65vh] w-full object-cover" autoplay loop muted playsinline>
            <source src="src/img/videoloop.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="relative flex flex-col items-center justify-center min-h-screen sm:min-h-[65vh] text-white">
            <img src="src/img/logo.png" alt="logo" class="w-[22rem] h-[22rem] object-cover">
            <a href="#rooms" class="btn uppercase px-16 bg-yellow-500 text-base text-white border-none hover:bg-yellow-600 hover:shadow-lg rounded-none ">Book your stay</a>
        </div>
    </section>




