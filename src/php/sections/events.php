<?php 
    $events = [
        [
            'event_link' => '#',
            'event_img' => 'src/img/event1.jpg',
            'event_title' => 'Fitness Room',
            'event_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, quia deserunt repellat aspernatur nesciunt dolore soluta, non veniam est saepe eveniet! Reiciendis et suscipit natus accusantium, commodi molestias deleniti cupiditate!'
        ],
        [
            'event_link' => '#',
            'event_img' => 'src/img/event1.jpg',
            'event_title' => 'Restaurant and Cafe',
            'event_description' => 'This is for event two description'
        ],
        [
            'event_link' => '#',
            'event_img' => 'src/img/event1.jpg',
            'event_title' => 'Pool and Gardens',
            'event_description' => 'This is for event three description'
        ],
        [
            'event_link' => '#',
            'event_img' => 'src/img/event1.jpg',
            'event_title' => 'Conference Areas',
            'event_description' => 'This is for event four description'
        ],
        [
            'event_link' => '#',
            'event_img' => 'src/img/event1.jpg',
            'event_title' => 'The Grand Ballroom',
            'event_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, quia deserunt repellat aspernatur nesciunt dolore soluta, non veniam est saepe eveniet! Reiciendis et suscipit natus accusantium, commodi molestias deleniti cupiditate!'
        ]
    ]
?>

<section class="w-full bg-white text-black h-full py-24">
    <div class="w-full max-w-[1800px] mx-auto px-5 sm:px-10">
        <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold text-end px-5">Events</h1>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 w-full py-10 px-5">
            <?php foreach ($events as $index => $event): ?>
                <div class="last:col-span-1 last:lg:col-span-4 relative group">
                    <a href="#" class="block relative overflow-hidden">
                        <img class="w-full h-[43rem] object-cover transition-transform duration-500 group-hover:scale-105" src="<?= $event['event_img'] ?>" alt="events">
                        <?php if ($index < 4): ?>
                            <div class="absolute inset-0 gradient-overlay"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5 text-white transition-all duration-500 group-hover:bottom-10 flex flex-col justify-end min-h-[12rem] gap-2">
                                <h1 class="text-3xl font-semibold mb-2 transform translate-y-0 sm:translate-y-24 group-hover:translate-y-0 transition-all duration-500 group-hover:mb-4 text-center min-h-[3.5rem] flex items-center justify-center"><?= $event['event_title'] ?></h1>
                                <p class="opacity-100 sm:opacity-0 transform translate-y-0 sm:translate-y-20 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 text-center min-h-[10rem] flex items-center justify-center">
                                    <?= $event['event_description'] ?>
                                </p>
                            </div>
                            <?php else: ?>
                            <!-- different overlay color for the main picture -->
                            <div class="absolute inset-0 gradient-overlay-main"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5 text-white transition-all duration-500 group-hover:bottom-10">
                                <h1 class="text-3xl font-semibold mb-5  transform translate-y-0 sm:translate-y-24 group-hover:translate-y-10 transition-all duration-500 group-hover:mb-10 text-center sm:text-start min-h-[3.5rem] flex items-center"><?= $event['event_title'] ?></h1>
                                <p class="opacity-100 sm:opacity-0 transform translate-y-5 sm:translate-y-5 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 text-center sm:text-start min-h-[5rem] flex items-center w-full sm:w-3/4">
                                    <?= $event['event_description'] ?>
                                </p>
                            </div>
                        <?php endif; ?>
 
                    </a>                
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    /* overlay color for 4 row images */
    .gradient-overlay {
        background: linear-gradient(to top, rgba(1, 3, 145, 0.5), rgba(1, 3, 145, 0));
    }
    .gradient-overlay::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(1, 3, 145, 0.2); 
        transition: opacity 0.4s ease-in-out;
        opacity: 0;
    }
    .group:hover .gradient-overlay::after {
        opacity: 1;
    }

    /* overlay color for main image */
    .gradient-overlay-main {
        background: linear-gradient(to top, rgba(11, 13, 61, 0.7), rgba(11, 13, 61, 0));
    }
    .gradient-overlay-main::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(11, 13, 61, 0.2); 
        transition: opacity 0.4s ease-in-out;
        opacity: 0;
    }
    .group:hover .gradient-overlay-main::after {
        opacity: 1;
    }
</style>