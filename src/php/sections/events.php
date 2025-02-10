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
                    <a href="#" class="block relative overflow-hidden">
                        <!-- Image -->
                        <img class="w-full h-[43rem] object-cover transition-transform duration-500 group-hover:scale-105" src="<?= $event['event_img'] ?>" alt="events">

                        <!-- Gradient Overlay -->
                        <?php if ($index < 4): ?>
                            <div class="absolute inset-0 gradient-overlay"></div>
                        <?php endif; ?>

                        <!-- Text Overlay -->
                        <div class="absolute inset-x-0 bottom-0 p-5 text-white transition-all duration-500 group-hover:bottom-10">
                            <h1 class="text-3xl font-semibold mb-2 transition-all duration-500 group-hover:mb-4">Fitness Room</h1>
                            <p class="opacity-0 transform translate-y-5 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis error et magni maxime ut in vel, quasi consequuntur excepturi sapiente nisi esse sunt eveniet aliquid, harum, laborum dicta quam porro!
                            </p>
                        </div>
                    </a>                
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
/* Gradient Overlay */
.gradient-overlay {
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));
}
</style>