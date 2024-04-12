<?php
/*
Template Name: Home Page
*/
?>

<?php get_header() ?>

<main>

<!-- Bento Grid Hero Section -->
<section class="px-10 sm:px-24 py-4 sm:py-6 bg-neutral-100">
    <div class="relative grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4 align-items-stretch">
        <!-- Card 1 -->
        <div class="col-span-1 md:col-span-2 lg:col-span-6 bg-white shadow-md ring-1 ring-neutral-900/5 rounded-2xl hover:shadow-xl flex overflow-hidden">
            <div class="flex w-1/3">
                <?php $conf_info_hero_img = get_field('conf_info_hero_img'); ?>
                <?php if ($conf_info_hero_img) : ?>
                    <img src="<?php echo esc_url($conf_info_hero_img['url']); ?>" alt="<?php echo esc_attr($conf_info_hero_img['alt']); ?>" class="w-full h-full object-cover rounded-l-2xl">
                <?php endif; ?> 
            </div>
            <div class="relative flex flex-col w-2/3 justify-center p-4 group cursor-pointer overflow-hidden transition-all duration-300">
                <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-lightgreen transition-all duration-300 group-hover:scale-[25]"></span>
                <div class="relative z-5">
                    <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-lightgreen transition-all duration-300 group-hover:bg-tintgreen">
                        <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </span>
                    <h1 class="pt-3 sm:pt-5 text-2xl sm:text-3xl font-primary text-lightgreen transition-all duration-300 group-hover:text-white"><?php the_field('hero_card_title') ?></h1>
                    <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 transition-all duration-300 group-hover:text-white"><?php the_field('hero_card_description') ?></p>
                    <a href="#" class="pt-3 sm:pt-5 flex flex-row items-center text-sm sm:text-base font-secondary font-medium text-lightgreen transition-all duration-300 group-hover:text-white">
                        <p class="pr-1"><?php the_field('hero_card_btn_txt') ?></p>
                        <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="relative col-span-1 md:col-span-1 lg:col-span-2 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
            <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-lightgreen transition-all duration-300 group-hover:scale-[20]"></span>
            <div class="relative z-5">
                <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-lightgreen transition-all duration-300 group-hover:bg-tintgreen">
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 9H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6m0-6v6m0-6 5.419-3.87A1 1 0 0 1 18 5.942v12.114a1 1 0 0 1-1.581.814L11 15m7 0a3 3 0 0 0 0-6M6 15h3v5H6v-5Z"/>
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-lightgreen transition-all duration-300 group-hover:text-white">
                    <h2><?php the_field('cfp_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 transition-all duration-300 group-hover:text-white">
                    <p><?php the_field('cfp_card_description') ?></p>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-lightgreen">
                    <?php $cfp_card_btn_lnk = get_field('cfp_card_btn_lnk'); ?>
                    <?php if ($cfp_card_btn_lnk) : ?>
                    <a href="<?php echo get_permalink($cfp_card_btn_lnk); ?>" class="flex flex-row items-center transition-all duration-300 group-hover:text-white">
                        <p class="pr-1"><?php the_field('cfp_card_btn_txt') ?></p>
                        <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="relative col-span-1 md:col-span-1 lg:col-span-2 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
            <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-lightgreen transition-all duration-300 group-hover:scale-[20]"></span>
            <div class="relative z-5">
                <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-lightgreen transition-all duration-300 group-hover:bg-tintgreen">
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/>
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-lightgreen transition-all duration-300 group-hover:text-white">
                    <h2><?php the_field('programme_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 transition-all duration-300 group-hover:text-white">
                    <p><?php the_field('programme_card_description') ?></p>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-lightgreen">
                    <a href="#program" class="flex flex-row items-center transition-all duration-300 group-hover:text-white">
                        <p class="pr-1"><?php the_field('programme_card_btn_txt') ?></p>
                        <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="relative col-span-1 md:col-span-2 lg:col-span-2 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
            <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-lightgreen transition-all duration-300 group-hover:scale-[20]"></span>
            <div class="relative z-5">
                <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-lightgreen transition-all duration-300 group-hover:bg-tintgreen">
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"/>
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-lightgreen transition-all duration-300 group-hover:text-white">
                    <h2><?php the_field('volumes_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 transition-all duration-300 group-hover:text-white">
                    <p><?php the_field('volumes_card_description') ?></p>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-lightgreen">
                    <?php $volumes_card_btn_lnk = get_field('volumes_card_btn_lnk'); ?>
                    <?php if ($volumes_card_btn_lnk) : ?>
                    <a href="<?php echo get_permalink($volumes_card_btn_lnk); ?>" class="flex flex-row items-center transition-all duration-300 group-hover:text-white">
                        <p class="pr-1"><?php the_field('volumes_card_btn_txt') ?></p>
                        <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

</main

<?php get_footer() ?>