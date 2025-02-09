<?php 
    $events = [
        [
            'event_img' => 'src/img/event1.jpg'
        ],
        [
            'event_img' => 'src/img/event1.jpg'
        ],
        [
            'event_img' => 'src/img/event1.jpg'
        ],
        [
            'event_img' => 'src/img/event1.jpg'
        ],
        [
            'event_img' => 'src/img/event1.jpg'
        ]
    ]
?>

<section class="w-full bg-white text-black h-full py-24">
    <div class="w-full max-w-[1800px] mx-auto px-5 sm:px-10">
        <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold text-end px-5">Events</h1>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 w-full py-10 px-5">
            <?php foreach ($events as $index => $event): ?>
                <div class="last:col-span-1 last:lg:col-span-4 relative group">
                    <a href="#" class="block relative">
                       
                        <img class="w-full h-[43rem] object-cover" src="<?= $event['event_img'] ?>" alt="events">

                       
                        <?php if ($index < 4): ?>
                            <div class="absolute inset-0 gradient-overlay"></div>
                        <?php endif; ?>

                     
                        <?php if ($index < 4): ?>
                            <h1 class="absolute inset-0 flex items-center justify-center text-white font-semibold text-3xl text-center">
                                Fitness Room
                            </h1>
                        <?php endif; ?>
                    </a>                
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<style>
    .gradient-overlay {
    background: linear-gradient(to top, rgba(0, 0, 139, 0.7), transparent); 
    transition: background 0.5s ease-in-out;
    }

    .group:hover .gradient-overlay {
        background: linear-gradient(to top, rgba(0, 0, 139, 0.9), transparent); 
    }


</style>