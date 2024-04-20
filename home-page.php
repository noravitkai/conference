<?php
/*
Template Name: Home Page
*/
?>

<?php get_header() ?>

<main>

<!-- Bento Grid Hero Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
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
                    <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 group-hover:text-white"><?php the_field('hero_card_description') ?></p>
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
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-lightgreen transition-all duration-300 group-hover:text-white">
                    <h2><?php the_field('cfp_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 group-hover:text-white">
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
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 group-hover:text-white">
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
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-lightgreen transition-all duration-300 group-hover:text-white">
                    <h2><?php the_field('volumes_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 group-hover:text-white">
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

<!-- Mission Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-lightgreen uppercase"><?php the_field('mission_section_heading') ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('mission_section_subheading') ?></h3>
    </div>

    <!-- Images -->
    <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4 mb-10 sm:mb-12">
        <div class="col-span-1">
            <?php $mission_section_img_1 = get_field('mission_section_img_1'); ?>
            <?php if ($mission_section_img_1) : ?>
                <img src="<?php echo esc_url($mission_section_img_1['url']); ?>" alt="<?php echo esc_attr($mission_section_img_1['alt']); ?>" class="rounded-2xl shadow-md w-full h-64 sm:h-80 object-cover">
            <?php endif; ?>
        </div>
        <div class="col-span-1">
            <?php $mission_section_img_2 = get_field('mission_section_img_2'); ?>
            <?php if ($mission_section_img_2) : ?>
                <img src="<?php echo esc_url($mission_section_img_2['url']); ?>" alt="<?php echo esc_attr($mission_section_img_2['alt']); ?>" class="rounded-2xl shadow-md w-full h-64 sm:h-80 object-cover">
            <?php endif; ?>
        </div>
    </div>

    <!-- Core Values -->
    <div class="flex flex-wrap">
        <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 p-3 sm:p-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-lightgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                </svg>
                <h4 class="ml-4 text-lg sm:text-xl font-primary font-medium text-lightgreen"><?php the_field('core_value_1_title') ?></h4>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_1_description') ?></p>
        </div>

        <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r p-3 sm:p-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-lightgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                </svg>
                <h4 class="ml-4 text-lg sm:text-xl font-primary font-medium text-lightgreen"><?php the_field('core_value_2_title') ?></h4>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_2_description') ?></p>
        </div>

        <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-3 sm:p-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-lightgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                </svg>
                <h4 class="ml-4 text-lg sm:text-xl font-primary font-medium text-lightgreen"><?php the_field('core_value_3_title') ?></h4>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_3_description') ?></p>
        </div>

        <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 p-3 sm:p-5">
            <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-lightgreen">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                    <h4 class="ml-4 text-lg sm:text-xl font-primary font-medium text-lightgreen"><?php the_field('core_value_4_title') ?></h4>
                </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_4_description') ?></p>
        </div>

        <div class="w-full border-b md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 p-3 sm:p-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-lightgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                </svg>
                <h4 class="ml-4 text-lg sm:text-xl font-primary font-medium text-lightgreen"><?php the_field('core_value_5_title') ?></h4>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_5_description') ?></p>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-3 sm:px-5 pt-3 sm:pt-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-lightgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
                <h4 class="ml-4 text-lg sm:text-xl font-primary font-medium text-lightgreen"><?php the_field('core_value_6_title') ?></h4>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_6_description') ?></p>
        </div>
    </div>
</section>

<!-- Programme Section -->
<section id="program" class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-lightgreen uppercase"><?php the_field('programme_section_heading') ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('programme_section_subheading') ?></h3>
    </div>

    <!-- Day 2 Programme-->
    <ol class="relative border-s border-zinc-300"> 
        
        <!-- Day 2 Keynote Address -->
        <?php 
        $day_2_keynote_group = get_field('day_2_keynote_address');

        if ($day_2_keynote_group):
            $day_2_keynote_address_start = $day_2_keynote_group['day_2_keynote_address_start'];
            $day_2_keynote_address_end = $day_2_keynote_group['day_2_keynote_address_end'];
            $day_2_keynote_address_field = $day_2_keynote_group['day_2_keynote_address_field'];
            $day_2_keynote_speech_start = $day_2_keynote_group['day_2_keynote_speech_start'];
            $day_2_keynote_speech_end = $day_2_keynote_group['day_2_keynote_speech_end'];
            $day_2_keynote_speaker = $day_2_keynote_group['day_2_keynote_speaker'];
            $day_2_keynote_address_title = $day_2_keynote_group['day_2_keynote_address_title'];
            $day_2_keynote_discussion_start = $day_2_keynote_group['day_2_keynote_discussion_start'];
            $day_2_keynote_discussion_end = $day_2_keynote_group['day_2_keynote_discussion_end'];
            $day_2_keynote_discussion = $day_2_keynote_group['day_2_keynote_discussion'];

            $has_content_day_2_keynote = !empty($day_2_keynote_address_start) || !empty($day_2_keynote_address_end) || !empty($day_2_keynote_address_field) || !empty($day_2_keynote_speech_start) || !empty($day_2_keynote_speech_end) || !empty($day_2_keynote_speaker) || !empty($day_2_keynote_address_title) || !empty($day_2_keynote_discussion_start) || !empty($day_2_keynote_discussion_end) || !empty($day_2_keynote_discussion);

            if ($has_content_day_2_keynote):
            ?>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-lightgreen rounded-full mt-1.5 -start-1.5"></div>
                    <time class="pb-1 sm:pb-3 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_keynote_address_start) && !empty($day_2_keynote_address_end) ) : ?>
                            <?php echo esc_html($day_2_keynote_address_start) . '–' . esc_html($day_2_keynote_address_end); ?>
                        <?php elseif (!empty($day_2_keynote_address_start)): ?>
                            <?php echo esc_html($day_2_keynote_address_start); ?>
                        <?php endif; ?>
                    </time>
                    <h4 class="pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_keynote_address_field) ) : ?>
                        <?php echo esc_html( $day_2_keynote_address_field ); ?>
                        <?php endif; ?>
                    </h4>
                    <div class="flex flex-col pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                        <?php if (!empty($day_2_keynote_speech_start) || !empty($day_2_keynote_speech_end)): ?>
                            <div class="flex flex-row items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <time class="pl-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                    <?php if ( !empty($day_2_keynote_speech_start) && !empty($day_2_keynote_speech_end) ) : ?>
                                        <?php echo esc_html($day_2_keynote_speech_start) . '–' . esc_html($day_2_keynote_speech_end); ?>
                                    <?php elseif (!empty($day_2_keynote_speech_start)): ?>
                                        <?php echo esc_html($day_2_keynote_speech_start); ?>
                                    <?php endif; ?>
                                </time>
                            </div>
                        <?php endif; ?>
                        <h5 class="pt-1 flex font-semibold">
                            <?php if ( !empty($day_2_keynote_speaker) ) : ?>
                            <?php echo esc_html( $day_2_keynote_speaker ); ?>
                            <?php endif; ?>
                        </h5>
                        <p class="pt-1 font-medium">
                            <?php if ( !empty($day_2_keynote_address_title) ) : ?>
                            <?php echo esc_html( $day_2_keynote_address_title ); ?>
                            <?php endif; ?>
                        </p>
                    </div>
                    <?php if (!empty($day_2_keynote_discussion_start) || !empty($day_2_keynote_discussion_end)): ?>
                        <div class="flex flex-row items-center">
                            <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <time class="pl-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <?php if ( !empty($day_2_keynote_discussion_start) && !empty($day_2_keynote_discussion_end) ) : ?>
                                    <?php echo esc_html($day_2_keynote_discussion_start) . '–' . esc_html($day_2_keynote_discussion_end); ?>
                                <?php elseif (!empty($day_2_keynote_discussion_start)): ?>
                                    <?php echo esc_html($day_2_keynote_discussion_start); ?>
                                <?php endif; ?>
                            </time>
                        </div>
                    <?php endif; ?>
                    <h5 class="pt-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold leading-relaxed">
                        <?php if ( !empty($day_2_keynote_discussion) ) : ?>
                        <?php echo esc_html( $day_2_keynote_discussion ); ?>
                        <?php endif; ?>
                    </h5>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Day 2 Break 1 -->
        <?php 
        $day_2_break_1_group = get_field('day_2_break_1');

        if ($day_2_break_1_group):
            $day_2_break_1_start = $day_2_break_1_group['day_2_break_1_start'];
            $day_2_break_1_end = $day_2_break_1_group['day_2_break_1_end'];
            $day_2_break_1_field = $day_2_break_1_group['day_2_break_1_field'];

            $has_content_day_2_break_1 = !empty($day_2_break_1_start) || !empty($day_2_break_1_end) || !empty($day_2_break_1_field);

            if ($has_content_day_2_break_1):
            ?>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-lightgreen rounded-full mt-1.5 -start-1.5"></div>
                    <time class="pb-1 sm:pb-3 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_break_1_start) && !empty($day_2_break_1_end) ) : ?>
                            <?php echo esc_html($day_2_break_1_start) . '–' . esc_html($day_2_break_1_end); ?>
                        <?php elseif (!empty($day_2_break_1_start)): ?>
                            <?php echo esc_html($day_2_break_1_start); ?>
                        <?php endif; ?>
                    </time>
                    <h4 class="pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_break_1_field) ) : ?>
                        <?php echo esc_html( $day_2_break_1_field ); ?>
                        <?php endif; ?>
                    </h4>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Day 2 Session 1 -->
        <?php 
        $day_2_session_1_group = get_field('day_2_session_1');

        if ($day_2_session_1_group):
            $day_2_session_1_start = $day_2_session_1_group['day_2_session_1_start'];
            $day_2_session_1_end = $day_2_session_1_group['day_2_session_1_end'];
            $day_2_session_1_field = $day_2_session_1_group['day_2_session_1_field'];
            $day_2_session_1_chair_name = $day_2_session_1_group['day_2_session_1_chair_name'];
            $day_2_session_1_title = $day_2_session_1_group['day_2_session_1_title'];
            $day_2_session_1_speakers = $day_2_session_1_group['day_2_session_1_speakers'];
            $day_2_session_1_discussion_start = $day_2_session_1_group['day_2_session_1_discussion_start'];
            $day_2_session_1_discussion_end = $day_2_session_1_group['day_2_session_1_discussion_end'];
            $day_2_session_1_discussion = $day_2_session_1_group['day_2_session_1_discussion'];

            $has_content_day_2_session_1 = !empty($day_2_session_1_start) || !empty($day_2_session_1_end) || !empty($day_2_session_1_field) || !empty($day_2_session_1_chair_name) || !empty($day_2_session_1_title);

            if ($has_content_day_2_session_1):
            ?>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-lightgreen rounded-full mt-1.5 -start-1.5"></div>
                    <time class="pb-1 sm:pb-3 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_session_1_start) && !empty($day_2_session_1_end) ) : ?>
                            <?php echo esc_html($day_2_session_1_start) . '–' . esc_html($day_2_session_1_end); ?>
                        <?php elseif (!empty($day_2_session_1_start)): ?>
                            <?php echo esc_html($day_2_session_1_start); ?>
                        <?php endif; ?>
                    </time>
                    <h4 class="pb-1 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_session_1_field) ) : ?>
                        <?php echo esc_html( $day_2_session_1_field ); ?>
                        <?php endif; ?>
                    </h4>
                    <h4 class="pb-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                        <?php if ( !empty($day_2_session_1_chair_name) ) : ?>
                        <?php echo esc_html( $day_2_session_1_chair_name ); ?>
                        <?php endif; ?>
                    </h4>
                    <h4 class="pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed">
                        <?php if ( !empty($day_2_session_1_title) ) : ?>
                        <?php echo esc_html( $day_2_session_1_title ); ?>
                        <?php endif; ?>
                    </h4>

                    <?php if (!empty($day_2_session_1_speakers)): ?>
                        <?php foreach ($day_2_session_1_speakers as $post): ?>
                            <?php setup_postdata($post); ?>
                            <div class="flex flex-col pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                <div class="flex flex-row items-center">
                                    <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <time class="pl-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                        <?php 
                                        $presentation_start = get_field('presentation_start');
                                        $presentation_end = get_field('presentation_end');
                                        if ( !empty($presentation_start) && !empty($presentation_end) ) : ?>
                                            <?php echo esc_html($presentation_start) . '–' . esc_html($presentation_end); ?>
                                        <?php elseif (!empty($presentation_start)): ?>
                                            <?php echo esc_html($presentation_start); ?>
                                        <?php endif; ?>
                                    </time>
                                </div>
                                <div class="pt-1 flex flex-row items-center">
                                    <?php $speaker_img = get_field('speaker_img'); ?>
                                    <?php if ($speaker_img) : ?>
                                        <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="size-4 sm:size-5 object-cover rounded-full">
                                    <?php endif; ?> 
                                    <h5 class="pl-1 flex font-semibold">
                                        <?php echo esc_html(get_field('speaker_name')); ?>
                                    </h5>
                                </div>
                                <p class="pt-1 font-medium">
                                    <?php echo esc_html(get_field('presentation_title')); ?>
                                </p>
                                <div class="inline-block">
                                    <a href="#" class="pt-1 group relative inline-flex items-center text-sm sm:text-base font-secondary font-medium text-lightgreen">
                                        <p class="pr-1">Absztrakt</p>
                                        <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round, stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0l-4 4m4-4l-4-4"/>
                                        </svg>
                                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-lightgreen group-hover:w-full transition-all duration-300 origin-left"></span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>Hiba a betöltéskor.</p>
                    <?php endif; ?>

                    <?php if (!empty($day_2_session_1_discussion_start) || !empty($day_2_session_1_discussion_end)): ?>
                        <div class="flex flex-row items-center">
                            <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <time class="pl-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <?php if ( !empty($day_2_session_1_discussion_start) && !empty($day_2_session_1_discussion_end) ) : ?>
                                    <?php echo esc_html($day_2_session_1_discussion_start) . '–' . esc_html($day_2_session_1_discussion_end); ?>
                                <?php elseif (!empty($day_2_session_1_discussion_start)): ?>
                                    <?php echo esc_html($day_2_session_1_discussion_start); ?>
                                <?php endif; ?>
                            </time>
                        </div>
                    <?php endif; ?>
                    <h5 class="pt-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold leading-relaxed">
                        <?php if ( !empty($day_2_session_1_discussion) ) : ?>
                        <?php echo esc_html( $day_2_session_1_discussion ); ?>
                        <?php endif; ?>
                    </h5>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Day 2 Break 2 -->
        <?php 
        $day_2_break_2_group = get_field('day_2_break_2');

        if ($day_2_break_2_group):
            $day_2_break_2_start = $day_2_break_2_group['day_2_break_2_start'] ?? '';
            $day_2_break_2_end = $day_2_break_2_group['day_2_break_2_end'] ?? '';
            $day_2_break_2_field = $day_2_break_2_group['day_2_break_2_field'] ?? '';

            $has_content_day_2_break_2 = !empty($day_2_break_2_start) || !empty($day_2_break_2_end) || !empty($day_2_break_2_field);

            if ($has_content_day_2_break_2):
            ?>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-lightgreen rounded-full mt-1.5 -start-1.5"></div>
                    <time class="pb-1 sm:pb-3 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_break_2_start) && !empty($day_2_break_2_end) ) : ?>
                            <?php echo esc_html($day_2_break_2_start) . '–' . esc_html($day_2_break_2_end); ?>
                        <?php elseif (!empty($day_2_break_2_start)): ?>
                            <?php echo esc_html($day_2_break_2_start); ?>
                        <?php endif; ?>
                    </time>
                    <h4 class="pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_break_2_field) ) : ?>
                        <?php echo esc_html( $day_2_break_2_field ); ?>
                        <?php endif; ?>
                    </h4>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Day 2 Session 2 -->
        <?php 
        $day_2_session_2_group = get_field('day_2_session_2');

        if ($day_2_session_2_group):
            $day_2_session_2_start = $day_2_session_2_group['day_2_session_2_start'];
            $day_2_session_2_end = $day_2_session_2_group['day_2_session_2_end'];
            $day_2_session_2_field = $day_2_session_2_group['day_2_session_2_field'];
            $day_2_session_2_chair_name = $day_2_session_2_group['day_2_session_2_chair_name'];
            $day_2_session_2_title = $day_2_session_2_group['day_2_session_2_title'];
            $day_2_session_2_speakers = $day_2_session_2_group['day_2_session_2_speakers'];
            $day_2_session_2_discussion_start = $day_2_session_2_group['day_2_session_2_discussion_start'];
            $day_2_session_2_discussion_end = $day_2_session_2_group['day_2_session_2_discussion_end'];
            $day_2_session_2_discussion = $day_2_session_2_group['day_2_session_2_discussion'];

            $has_content_day_2_session_2 = !empty($day_2_session_2_start) || !empty($day_2_session_2_end) || !empty($day_2_session_2_field) || !empty($day_2_session_2_chair_name) || !empty($day_2_session_2_title);

            if ($has_content_day_2_session_2):
            ?>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-lightgreen rounded-full mt-1.5 -start-1.5"></div>
                    <time class="pb-1 sm:pb-3 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_session_2_start) && !empty($day_2_session_2_end) ) : ?>
                            <?php echo esc_html($day_2_session_2_start) . '–' . esc_html($day_2_session_2_end); ?>
                        <?php elseif (!empty($day_2_session_2_start)): ?>
                            <?php echo esc_html($day_2_session_2_start); ?>
                        <?php endif; ?>
                    </time>
                    <h4 class="pb-1 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_session_2_field) ) : ?>
                        <?php echo esc_html( $day_2_session_2_field ); ?>
                        <?php endif; ?>
                    </h4>
                    <h4 class="pb-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                        <?php if ( !empty($day_2_session_2_chair_name) ) : ?>
                        <?php echo esc_html( $day_2_session_2_chair_name ); ?>
                        <?php endif; ?>
                    </h4>
                    <h4 class="pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed">
                        <?php if ( !empty($day_2_session_2_title) ) : ?>
                        <?php echo esc_html( $day_2_session_2_title ); ?>
                        <?php endif; ?>
                    </h4>

                    <?php if (!empty($day_2_session_2_speakers)): ?>
                        <?php foreach ($day_2_session_2_speakers as $post): ?>
                            <?php setup_postdata($post); ?>
                            <div class="flex flex-col pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                <div class="flex flex-row items-center">
                                    <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <time class="pl-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                        <?php 
                                        $presentation_start = get_field('presentation_start');
                                        $presentation_end = get_field('presentation_end');
                                        if ( !empty($presentation_start) && !empty($presentation_end) ) : ?>
                                            <?php echo esc_html($presentation_start) . '–' . esc_html($presentation_end); ?>
                                        <?php elseif (!empty($presentation_start)): ?>
                                            <?php echo esc_html($presentation_start); ?>
                                        <?php endif; ?>
                                    </time>
                                </div>
                                <div class="pt-1 flex flex-row items-center">
                                    <?php $speaker_img = get_field('speaker_img'); ?>
                                    <?php if ($speaker_img) : ?>
                                        <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="size-4 sm:size-5 object-cover rounded-full">
                                    <?php endif; ?> 
                                    <h5 class="pl-1 flex font-semibold">
                                        <?php echo esc_html(get_field('speaker_name')); ?>
                                    </h5>
                                </div>
                                <p class="pt-1 font-medium">
                                    <?php echo esc_html(get_field('presentation_title')); ?>
                                </p>
                                <div class="inline-block">
                                    <a href="#" class="pt-1 group relative inline-flex items-center text-sm sm:text-base font-secondary font-medium text-lightgreen">
                                        <p class="pr-1">Absztrakt</p>
                                        <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round, stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0l-4 4m4-4l-4-4"/>
                                        </svg>
                                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-lightgreen group-hover:w-full transition-all duration-300 origin-left"></span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>Hiba a betöltéskor.</p>
                    <?php endif; ?>

                    <?php if (!empty($day_2_session_2_discussion_start) || !empty($day_2_session_2_discussion_end)): ?>
                        <div class="flex flex-row items-center">
                            <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <time class="pl-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <?php if ( !empty($day_2_session_2_discussion_start) && !empty($day_2_session_2_discussion_end) ) : ?>
                                    <?php echo esc_html($day_2_session_2_discussion_start) . '–' . esc_html($day_2_session_2_discussion_end); ?>
                                <?php elseif (!empty($day_2_session_2_discussion_start)): ?>
                                    <?php echo esc_html($day_2_session_2_discussion_start); ?>
                                <?php endif; ?>
                            </time>
                        </div>
                    <?php endif; ?>
                    <h5 class="pt-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold leading-relaxed">
                        <?php if ( !empty($day_2_session_2_discussion) ) : ?>
                        <?php echo esc_html( $day_2_session_2_discussion ); ?>
                        <?php endif; ?>
                    </h5>
                </li>
            <?php endif; ?>            
        <?php endif; ?>

        <!-- Day 2 Break 3 -->
        <?php 
        $day_2_break_3_group = get_field('day_2_break_3');

        if ($day_2_break_3_group):
            $day_2_break_3_start = $day_2_break_3_group['day_2_break_3_start'] ?? '';
            $day_2_break_3_end = $day_2_break_3_group['day_2_break_3_end'] ?? '';
            $day_2_break_3_field = $day_2_break_3_group['day_2_break_3_field'] ?? '';

            $has_content_day_2_break_3 = !empty($day_2_break_3_start) || !empty($day_2_break_3_end) || !empty($day_2_break_3_field);

            if ($has_content_day_2_break_3):
            ?>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-lightgreen rounded-full mt-1.5 -start-1.5"></div>
                    <time class="pb-1 sm:pb-3 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_break_3_start) && !empty($day_2_break_3_end) ) : ?>
                            <?php echo esc_html($day_2_break_3_start) . '–' . esc_html($day_2_break_3_end); ?>
                        <?php elseif (!empty($day_2_break_3_start)): ?>
                            <?php echo esc_html($day_2_break_3_start); ?>
                        <?php endif; ?>
                    </time>
                    <h4 class="pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_break_3_field) ) : ?>
                        <?php echo esc_html( $day_2_break_3_field ); ?>
                        <?php endif; ?>
                    </h4>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Day 2 Session 3 -->
        <?php 
        $day_2_session_3_group = get_field('day_2_session_3');

        if ($day_2_session_3_group):
            $day_2_session_3_start = $day_2_session_3_group['day_2_session_3_start'];
            $day_2_session_3_end = $day_2_session_3_group['day_2_session_3_end'];
            $day_2_session_3_field = $day_2_session_3_group['day_2_session_3_field'];
            $day_2_session_3_chair_name = $day_2_session_3_group['day_2_session_3_chair_name'];
            $day_2_session_3_title = $day_2_session_3_group['day_2_session_3_title'];
            $day_2_session_3_speakers = $day_2_session_3_group['day_2_session_3_speakers'];
            $day_2_session_3_discussion_start = $day_2_session_3_group['day_2_session_3_discussion_start'];
            $day_2_session_3_discussion_end = $day_2_session_3_group['day_2_session_3_discussion_end'];
            $day_2_session_3_discussion = $day_2_session_3_group['day_2_session_3_discussion'];

            $has_content_day_2_session_3 = !empty($day_2_session_3_start) || !empty($day_2_session_3_end) || !empty($day_2_session_3_field) || !empty($day_2_session_3_chair_name) || !empty($day_2_session_3_title);

            if ($has_content_day_2_session_3):
            ?>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-lightgreen rounded-full mt-1.5 -start-1.5"></div>
                    <time class="pb-1 sm:pb-3 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_session_3_start) && !empty($day_2_session_3_end) ) : ?>
                            <?php echo esc_html($day_2_session_3_start) . '–' . esc_html($day_2_session_3_end); ?>
                        <?php elseif (!empty($day_2_session_3_start)): ?>
                            <?php echo esc_html($day_2_session_3_start); ?>
                        <?php endif; ?>
                    </time>
                    <h4 class="pb-1 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_session_3_field) ) : ?>
                        <?php echo esc_html( $day_2_session_3_field ); ?>
                        <?php endif; ?>
                    </h4>
                    <h4 class="pb-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                        <?php if ( !empty($day_2_session_3_chair_name) ) : ?>
                        <?php echo esc_html( $day_2_session_3_chair_name ); ?>
                        <?php endif; ?>
                    </h4>
                    <h4 class="pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed">
                        <?php if ( !empty($day_2_session_3_title) ) : ?>
                        <?php echo esc_html( $day_2_session_3_title ); ?>
                        <?php endif; ?>
                    </h4>

                    <?php if (!empty($day_2_session_3_speakers)): ?>
                        <?php foreach ($day_2_session_3_speakers as $post): ?>
                            <?php setup_postdata($post); ?>
                            <div class="flex flex-col pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                <div class="flex flex-row items-center">
                                    <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <time class="pl-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                        <?php 
                                        $presentation_start = get_field('presentation_start');
                                        $presentation_end = get_field('presentation_end');
                                        if ( !empty($presentation_start) && !empty($presentation_end) ) : ?>
                                            <?php echo esc_html($presentation_start) . '–' . esc_html($presentation_end); ?>
                                        <?php elseif (!empty($presentation_start)): ?>
                                            <?php echo esc_html($presentation_start); ?>
                                        <?php endif; ?>
                                    </time>
                                </div>
                                <div class="pt-1 flex flex-row items-center">
                                    <?php $speaker_img = get_field('speaker_img'); ?>
                                    <?php if ($speaker_img) : ?>
                                        <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="size-4 sm:size-5 object-cover rounded-full">
                                    <?php endif; ?> 
                                    <h5 class="pl-1 flex font-semibold">
                                        <?php echo esc_html(get_field('speaker_name')); ?>
                                    </h5>
                                </div>
                                <p class="pt-1 font-medium">
                                    <?php echo esc_html(get_field('presentation_title')); ?>
                                </p>
                                <div class="inline-block">
                                    <a href="#" class="pt-1 group relative inline-flex items-center text-sm sm:text-base font-secondary font-medium text-lightgreen">
                                        <p class="pr-1">Absztrakt</p>
                                        <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round, stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0l-4 4m4-4l-4-4"/>
                                        </svg>
                                        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-lightgreen group-hover:w-full transition-all duration-300 origin-left"></span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>Hiba a betöltéskor.</p>
                    <?php endif; ?>

                    <?php if (!empty($day_2_session_3_discussion_start) || !empty($day_2_session_3_discussion_end)): ?>
                        <div class="flex flex-row items-center">
                            <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <time class="pl-1 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <?php if ( !empty($day_2_session_3_discussion_start) && !empty($day_2_session_3_discussion_end) ) : ?>
                                    <?php echo esc_html($day_2_session_3_discussion_start) . '–' . esc_html($day_2_session_3_discussion_end); ?>
                                <?php elseif (!empty($day_2_session_3_discussion_start)): ?>
                                    <?php echo esc_html($day_2_session_3_discussion_start); ?>
                                <?php endif; ?>
                            </time>
                        </div>
                    <?php endif; ?>
                    <h5 class="pt-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold leading-relaxed">
                        <?php if ( !empty($day_2_session_3_discussion) ) : ?>
                        <?php echo esc_html( $day_2_session_3_discussion ); ?>
                        <?php endif; ?>
                    </h5>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Day 2 Break 4 -->
        <?php 
        $day_2_break_4_group = get_field('day_2_break_4');

        if ($day_2_break_4_group):
            $day_2_break_4_start = $day_2_break_4_group['day_2_break_4_start'] ?? '';
            $day_2_break_4_end = $day_2_break_4_group['day_2_break_4_end'] ?? '';
            $day_2_break_4_field = $day_2_break_4_group['day_2_break_4_field'] ?? '';

            $has_content_day_2_break_4 = !empty($day_2_break_4_start) || !empty($day_2_break_4_end) || !empty($day_2_break_4_field);

            if ($has_content_day_2_break_4):
            ?>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-lightgreen rounded-full mt-1.5 -start-1.5"></div>
                    <time class="pb-1 sm:pb-3 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_break_4_start) && !empty($day_2_break_4_end) ) : ?>
                            <?php echo esc_html($day_2_break_4_start) . '–' . esc_html($day_2_break_4_end); ?>
                        <?php elseif (!empty($day_2_break_4_start)): ?>
                            <?php echo esc_html($day_2_break_4_start); ?>
                        <?php endif; ?>
                    </time>
                    <h4 class="pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_break_4_field) ) : ?>
                        <?php echo esc_html( $day_2_break_4_field ); ?>
                        <?php endif; ?>
                    </h4>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Day 2 Special Event -->
        <?php 
        $day_2_special_group = get_field('day_2_special_event');

        if ($day_2_special_group):
            $day_2_special_event_start = $day_2_special_group['day_2_special_event_start'] ?? '';
            $day_2_special_event_end = $day_2_special_group['day_2_special_event_end'] ?? '';
            $day_2_special_event_field = $day_2_special_group['day_2_special_event_field'] ?? '';
            $day_2_special_event_description = $day_2_special_group['day_2_special_event_description'] ?? '';

            $has_content_day_2_special = !empty($day_2_special_event_start) || !empty($day_2_special_event_end) || !empty($day_2_special_event_field) || !empty($day_2_special_event_description);

            if ($has_content_day_2_special):
            ?>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-lightgreen rounded-full mt-1.5 -start-1.5"></div>
                    <time class="pb-1 sm:pb-3 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_special_event_start) && !empty($day_2_special_event_end) ) : ?>
                            <?php echo esc_html($day_2_special_event_start) . '–' . esc_html($day_2_special_event_end); ?>
                        <?php elseif (!empty($day_2_special_event_start)): ?>
                            <?php echo esc_html($day_2_special_event_start); ?>
                        <?php endif; ?>
                    </time>
                    <h4 class="pt-1 text-base sm:text-lg font-primary font-medium text-lightgreen leading-relaxed">
                        <?php if ( !empty($day_2_special_event_field) ) : ?>
                        <?php echo esc_html( $day_2_special_event_field ); ?>
                        <?php endif; ?>
                    </h4>
                    <p class="pt-1 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed">
                        <?php if ( !empty($day_2_special_event_description) ) : ?>
                            <?php echo nl2br(esc_html($day_2_special_event_description)); ?>
                        <?php endif; ?>
                    </p>
                </li>
            <?php endif; ?>
        <?php endif; ?>
    </ol>
</section>

</main>

<?php get_footer() ?>