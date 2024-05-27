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
                <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-darkgreen transition-all duration-300 lg:group-hover:scale-[25]"></span>
                <div class="relative z-5">
                    <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-darkgreen transition-all duration-300 lg:group-hover:bg-lightgreen">
                        <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </span>
                    <h1 class="pt-3 sm:pt-5 text-2xl sm:text-3xl font-primary text-darkgreen transition-all duration-300 lg:group-hover:text-white"><?php the_field('hero_card_title') ?></h1>
                    <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 lg:group-hover:text-white"><?php the_field('hero_card_description') ?></p>
                    <?php $hero_card_btn_lnk = get_field('hero_card_btn_lnk'); ?>
                    <?php if ($hero_card_btn_lnk) : ?>
                    <a href="<?php echo get_permalink($hero_card_btn_lnk); ?>" class="clickable-parent pt-3 sm:pt-5 flex flex-row items-center text-sm sm:text-base font-secondary font-medium text-darkgreen transition-all duration-300 lg:group-hover:text-white">
                        <p class="pr-1"><?php the_field('hero_card_btn_txt') ?></p>
                        <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="relative col-span-1 md:col-span-1 lg:col-span-2 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
            <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-darkgreen transition-all duration-300 lg:group-hover:scale-[20]"></span>
            <div class="relative z-5">
                <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-darkgreen transition-all duration-300 lg:group-hover:bg-lightgreen">
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-darkgreen transition-all duration-300 lg:group-hover:text-white">
                    <h2><?php the_field('cfp_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 lg:group-hover:text-white">
                    <p><?php the_field('cfp_card_description') ?></p>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-darkgreen">
                    <?php $cfp_card_btn_lnk = get_field('cfp_card_btn_lnk'); ?>
                    <a href="<?php echo esc_url($cfp_card_btn_lnk); ?>" class="clickable-parent flex flex-row items-center transition-all duration-300 lg:group-hover:text-white" target="_blank">
                        <p class="pr-1"><?php the_field('cfp_card_btn_txt') ?></p>
                        <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="relative col-span-1 md:col-span-1 lg:col-span-2 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
            <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-darkgreen transition-all duration-300 lg:group-hover:scale-[20]"></span>
            <div class="relative z-5">
                <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-darkgreen transition-all duration-300 lg:group-hover:bg-lightgreen">
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/>
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-darkgreen transition-all duration-300 lg:group-hover:text-white">
                    <h2><?php the_field('programme_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 lg:group-hover:text-white">
                    <p><?php the_field('programme_card_description') ?></p>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-darkgreen">
                    <a href="#program" class="clickable-parent flex flex-row items-center transition-all duration-300 lg:group-hover:text-white">
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
            <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-darkgreen transition-all duration-300 lg:group-hover:scale-[20]"></span>
            <div class="relative z-5">
                <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-darkgreen transition-all duration-300 lg:group-hover:bg-lightgreen">
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-darkgreen transition-all duration-300 lg:group-hover:text-white">
                    <h2><?php the_field('volumes_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 lg:group-hover:text-white">
                    <p><?php the_field('volumes_card_description') ?></p>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-darkgreen">
                    <?php $volumes_card_btn_lnk = get_field('volumes_card_btn_lnk'); ?>
                    <?php if ($volumes_card_btn_lnk) : ?>
                    <a href="<?php echo get_permalink($volumes_card_btn_lnk); ?>" class="clickable-parent flex flex-row items-center transition-all duration-300 lg:group-hover:text-white">
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
        <h1 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('mission_section_heading') ?></h1>
        <h2 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('mission_section_subheading') ?></h2>
    </div>

    <!-- Images -->
    <div class="grid md:grid-cols-2 gap-4 mb-10 sm:mb-12">
        <div class="col-span-1">
            <?php $mission_section_img_1 = get_field('mission_section_img_1'); ?>
            <?php if ($mission_section_img_1) : ?>
                <img src="<?php echo esc_url($mission_section_img_1['url']); ?>" alt="<?php echo esc_attr($mission_section_img_1['alt']); ?>" class="rounded-2xl shadow-md w-full h-64 sm:h-80 object-cover">
            <?php endif; ?>
        </div>
        <div class="col-span-1 hidden md:block">
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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-darkgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                </svg>
                <h3 class="ml-4 text-lg sm:text-xl font-primary font-medium text-darkgreen"><?php the_field('core_value_1_title') ?></h3>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_1_description') ?></p>
        </div>

        <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r p-3 sm:p-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-darkgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                </svg>
                <h3 class="ml-4 text-lg sm:text-xl font-primary font-medium text-darkgreen"><?php the_field('core_value_2_title') ?></h3>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_2_description') ?></p>
        </div>

        <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-3 sm:p-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-darkgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                </svg>
                <h3 class="ml-4 text-lg sm:text-xl font-primary font-medium text-darkgreen"><?php the_field('core_value_3_title') ?></h3>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_3_description') ?></p>
        </div>

        <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 p-3 sm:p-5">
            <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-darkgreen">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                    <h3 class="ml-4 text-lg sm:text-xl font-primary font-medium text-darkgreen"><?php the_field('core_value_4_title') ?></h3>
                </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_4_description') ?></p>
        </div>

        <div class="w-full border-b md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 p-3 sm:p-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-darkgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                </svg>
                <h3 class="ml-4 text-lg sm:text-xl font-primary font-medium text-darkgreen"><?php the_field('core_value_5_title') ?></h3>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_5_description') ?></p>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-3 sm:px-5 pt-3 sm:pt-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-darkgreen">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
                <h3 class="ml-4 text-lg sm:text-xl font-primary font-medium text-darkgreen"><?php the_field('core_value_6_title') ?></h3>
            </div>
            <p class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('core_value_6_description') ?></p>
        </div>
    </div>
</section>

<!-- Programme Section -->
<section id="program" class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h1 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('programme_section_heading') ?></h1>
        <h2 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('programme_section_subheading') ?></h2>
    </div>

    <!-- Tabs for sm & md Screens-->
    <div class="lg:hidden">
        <ul class="mb-5 sm:mb-6 flex gap-0.5 text-sm font-secondary font-medium leading-relaxed text-center">
            <li class="w-full">
                <button id="tabDay1" class="inline-block w-full p-4 shadow-md ring-1 ring-neutral-900/5 rounded-l-2xl">1. nap</button>
            </li>
            <li class="w-full">
                <button id="tabDay2" class="inline-block w-full p-4 shadow-md ring-1 ring-neutral-900/5 rounded-r-2xl">2. nap</button>
            </li>
        </ul>
    </div>

    <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 mb-10 sm:mb-12">
        <!-- Day 1 Timeline-->
        <div id="day1Content" class="col-span-1 p-6 bg-white shadow-md ring-1 ring-neutral-900/5 rounded-2xl hover:shadow-lg">
            <h3 class="pb-5 sm:pb-6 text-lg sm:text-xl font-primary font-medium text-darkgreen"><?php the_field('day_1_date') ?></h3>
            <ol class="relative border-s border-zinc-300"> 
                <!-- Day 1 Keyone Address -->
                <?php 
                $day_1_keynote_group = get_field('day_1_keynote_address');

                if ($day_1_keynote_group):
                    $day_1_keynote_address_start = $day_1_keynote_group['day_1_keynote_address_start'];
                    $day_1_keynote_address_end = $day_1_keynote_group['day_1_keynote_address_end'];
                    $day_1_keynote_address_field = $day_1_keynote_group['day_1_keynote_address_field'];
                    $day_1_keynote_speech_start = $day_1_keynote_group['day_1_keynote_speech_start'];
                    $day_1_keynote_speech_end = $day_1_keynote_group['day_1_keynote_speech_end'];
                    $day_1_keynote_speaker = $day_1_keynote_group['day_1_keynote_speaker'];
                    $day_1_keynote_address_title = $day_1_keynote_group['day_1_keynote_address_title'];
                    $day_1_keynote_discussion_start = $day_1_keynote_group['day_1_keynote_discussion_start'];
                    $day_1_keynote_discussion_end = $day_1_keynote_group['day_1_keynote_discussion_end'];
                    $day_1_keynote_discussion = $day_1_keynote_group['day_1_keynote_discussion'];

                    if (!empty($day_1_keynote_address_start) || !empty($day_1_keynote_address_end) || !empty($day_1_keynote_address_field) || !empty($day_1_keynote_speech_start) || !empty($day_1_keynote_speech_end) || !empty($day_1_keynote_speaker) || !empty($day_1_keynote_address_title) || !empty($day_1_keynote_discussion_start) || !empty($day_1_keynote_discussion_end) || !empty($day_1_keynote_discussion)):
                ?>
                        <li class="ms-4">
                            <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                            <?php if (!empty($day_1_keynote_address_start) || !empty($day_1_keynote_address_end) || !empty($day_1_keynote_address_field)): ?>
                                <!-- Keynote Time & Field -->
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                    <?php if (!empty($day_1_keynote_address_start) || !empty($day_1_keynote_address_end)): ?>
                                        <time>
                                            <?php echo esc_html($day_1_keynote_address_start) . '–' . esc_html($day_1_keynote_address_end); ?>
                                        </time>
                                    <?php endif; ?>

                                    <?php if (!empty($day_1_keynote_address_field)): ?>
                                        <h4>
                                            <?php echo esc_html($day_1_keynote_address_field); ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($day_1_keynote_speech_start) || !empty($day_1_keynote_speech_end) || !empty($day_1_keynote_speaker) || !empty($day_1_keynote_address_title)): ?>
                                <!-- Keynote Speech Time, Speaker & Title -->
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                    <?php if (!empty($day_1_keynote_speech_start) || !empty($day_1_keynote_speech_end)): ?>
                                        <div class="flex flex-row items-center">
                                            <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <time class="pl-1 font-semibold">
                                                <?php echo esc_html($day_1_keynote_speech_start) . '–' . esc_html($day_1_keynote_speech_end); ?>
                                            </time>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($day_1_keynote_speaker)): ?>
                                        <p class="font-semibold">
                                            <?php echo esc_html($day_1_keynote_speaker); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (!empty($day_1_keynote_address_title)): ?>
                                        <h5 class="font-medium">
                                            <?php echo esc_html($day_1_keynote_address_title); ?>
                                        </h5>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($day_1_keynote_discussion_start) || !empty($day_1_keynote_discussion_end) || !empty($day_1_keynote_discussion)): ?>
                                <!-- Keynote Discussion Time & Field -->
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                    <?php if (!empty($day_1_keynote_discussion_start) || !empty($day_1_keynote_discussion_end)): ?>
                                        <div class="flex flex-row items-center">
                                            <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <time class="pl-1">
                                                <?php echo esc_html($day_1_keynote_discussion_start) . '–' . esc_html($day_1_keynote_discussion_end); ?>
                                            </time>
                                        </div>
                                    <?php endif; ?>
                                    <h4>
                                        <?php echo esc_html($day_1_keynote_discussion); ?>
                                    </h4>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <!-- Day 1 Break 1 -->
                <?php 
                $day_1_break_1_group = get_field('day_1_break_1');

                if ($day_1_break_1_group):
                    $day_1_break_1_start = $day_1_break_1_group['day_1_break_1_start'];
                    $day_1_break_1_end = $day_1_break_1_group['day_1_break_1_end'];
                    $day_1_break_1_field = $day_1_break_1_group['day_1_break_1_field'];

                    if (!empty($day_1_break_1_start) || !empty($day_1_break_1_end) || !empty($day_1_break_1_field)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <?php if (!empty($day_1_break_1_start) || !empty($day_1_break_1_end) || !empty($day_1_break_1_field)): ?>
                            <!-- Break Time & Field -->
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                <?php if (!empty($day_1_break_1_start) || !empty($day_1_break_1_end)): ?>
                                    <time>
                                        <?php echo esc_html($day_1_break_1_start) . (empty($day_1_break_1_end) ? '' : '–' . esc_html($day_1_break_1_end)); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_1_break_1_field)): ?>
                                    <h4>
                                        <?php echo esc_html($day_1_break_1_field); ?>
                                    </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 1 Session 1 -->
                <?php 
                $day_1_session_1_group = get_field('day_1_session_1');

                if ($day_1_session_1_group):
                    $day_1_session_1_start = $day_1_session_1_group['day_1_session_1_start'];
                    $day_1_session_1_end = $day_1_session_1_group['day_1_session_1_end'];
                    $day_1_session_1_field = $day_1_session_1_group['day_1_session_1_field'];
                    $day_1_session_1_chair_name = $day_1_session_1_group['day_1_session_1_chair_name'];
                    $day_1_session_1_title = $day_1_session_1_group['day_1_session_1_title'];
                    $day_1_session_1_speakers = $day_1_session_1_group['day_1_session_1_speakers'];
                    $day_1_session_1_discussion_start = $day_1_session_1_group['day_1_session_1_discussion_start'];
                    $day_1_session_1_discussion_end = $day_1_session_1_group['day_1_session_1_discussion_end'];
                    $day_1_session_1_discussion = $day_1_session_1_group['day_1_session_1_discussion'];

                    if (!empty($day_1_session_1_start) || !empty($day_1_session_1_end) || !empty($day_1_session_1_field) || !empty($day_1_session_1_chair_name) || !empty($day_1_session_1_title) || !empty($day_1_session_1_speakers) || !empty($day_1_session_1_discussion_start) || !empty($day_1_session_1_discussion_end) || !empty($day_1_session_1_discussion)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <!-- Session Time, Field, Chair & Title -->
                        <?php if (!empty($day_1_session_1_start) || !empty($day_1_session_1_end) || !empty($day_1_session_1_field) || !empty($day_1_session_1_chair_name) || !empty($day_1_session_1_title)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 leading-relaxed">
                                <?php if (!empty($day_1_session_1_start) || !empty($day_1_session_1_end)): ?>
                                    <time class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_1_session_1_start) . (!empty($day_1_session_1_end) ? '–' . esc_html($day_1_session_1_end) : ''); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_1_session_1_field)): ?>
                                    <h4 class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_1_session_1_field); ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if (!empty($day_1_session_1_chair_name)): ?>
                                    <p class="text-sm sm:text-base font-secondary font-semibold text-zinc-900">
                                        <?php echo esc_html($day_1_session_1_chair_name); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty($day_1_session_1_title)): ?>
                                    <h5 class="text-sm sm:text-base font-secondary font-medium text-zinc-900">
                                        <?php echo esc_html($day_1_session_1_title); ?>
                                    </h5>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Session Speakers -->
                        <?php if (!empty($day_1_session_1_speakers)): ?>
                            <?php foreach ($day_1_session_1_speakers as $post): ?>
                                <?php setup_postdata($post); ?>
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                    <div class="flex flex-row items-center">
                                        <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <time class="pl-1 font-semibold">
                                            <?php 
                                            $presentation_start = get_field('presentation_start');
                                            $presentation_end = get_field('presentation_end');
                                            if (!empty($presentation_start) && !empty($presentation_end)) : ?>
                                                <?php echo esc_html($presentation_start) . '–' . esc_html($presentation_end); ?>
                                            <?php elseif (!empty($presentation_start)): ?>
                                                <?php echo esc_html($presentation_start); ?>
                                            <?php endif; ?>
                                        </time>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <?php $speaker_img = get_field('speaker_img'); ?>
                                        <?php if ($speaker_img) : ?>
                                            <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="size-4 sm:size-5 object-cover rounded-full">
                                        <?php endif; ?> 
                                        <p class="pl-1 flex font-semibold">
                                            <?php echo esc_html(get_field('speaker_name')); ?>
                                        </p>
                                    </div>
                                    <h5 class="font-medium">
                                        <?php echo esc_html(get_field('presentation_title')); ?>
                                    </h5>
                                    <div class="inline-block">
                                        <a href="<?php the_permalink() ?>" class="group relative inline-flex items-center text-sm sm:text-base font-secondary font-medium text-darkgreen" target="_blank">
                                            <p class="pr-1">Absztrakt</p>
                                            <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                            </svg>
                                            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-darkgreen group-hover:w-full transition-all duration-300 origin-left"></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <!-- Session Discussion Time & Field -->
                        <?php if (!empty($day_1_session_1_discussion_start) || !empty($day_1_session_1_discussion_end) || !empty($day_1_session_1_discussion)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <div class="flex flex-row items-center">
                                    <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <time class="pl-1">
                                        <?php if (!empty($day_1_session_1_discussion_start) && !empty($day_1_session_1_discussion_end)) : ?>
                                            <?php echo esc_html($day_1_session_1_discussion_start) . '–' . esc_html($day_1_session_1_discussion_end); ?>
                                        <?php elseif (!empty($day_1_session_1_discussion_start)): ?>
                                            <?php echo esc_html($day_1_session_1_discussion_start); ?>
                                        <?php endif; ?>
                                    </time>
                                </div>
                                <?php if (!empty($day_1_session_1_discussion)): ?>
                                <h4>
                                    <?php echo esc_html($day_1_session_1_discussion); ?>
                                </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 1 Break 2 -->
                <?php 
                $day_1_break_2_group = get_field('day_1_break_2');

                if ($day_1_break_2_group):
                    $day_1_break_2_start = $day_1_break_2_group['day_1_break_2_start'];
                    $day_1_break_2_end = $day_1_break_2_group['day_1_break_2_end'];
                    $day_1_break_2_field = $day_1_break_2_group['day_1_break_2_field'];

                    if (!empty($day_1_break_2_start) || !empty($day_1_break_2_end) || !empty($day_1_break_2_field)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <?php if (!empty($day_1_break_2_start) || !empty($day_1_break_2_end) || !empty($day_1_break_2_field)): ?>
                            <!-- Break Time & Field -->
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                <?php if (!empty($day_1_break_2_start) || !empty($day_1_break_2_end)): ?>
                                    <time>
                                        <?php echo esc_html($day_1_break_2_start) . (empty($day_1_break_2_end) ? '' : '–' . esc_html($day_1_break_2_end)); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_1_break_2_field)): ?>
                                    <h4>
                                        <?php echo esc_html($day_1_break_2_field); ?>
                                    </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 1 Session 2 -->
                <?php 
                $day_1_session_2_group = get_field('day_1_session_2');

                if ($day_1_session_2_group):
                    $day_1_session_2_start = $day_1_session_2_group['day_1_session_2_start'];
                    $day_1_session_2_end = $day_1_session_2_group['day_1_session_2_end'];
                    $day_1_session_2_field = $day_1_session_2_group['day_1_session_2_field'];
                    $day_1_session_2_chair_name = $day_1_session_2_group['day_1_session_2_chair_name'];
                    $day_1_session_2_title = $day_1_session_2_group['day_1_session_2_title'];
                    $day_1_session_2_speakers = $day_1_session_2_group['day_1_session_2_speakers'];
                    $day_1_session_2_discussion_start = $day_1_session_2_group['day_1_session_2_discussion_start'];
                    $day_1_session_2_discussion_end = $day_1_session_2_group['day_1_session_2_discussion_end'];
                    $day_1_session_2_discussion = $day_1_session_2_group['day_1_session_2_discussion'];

                    if (!empty($day_1_session_2_start) || !empty($day_1_session_2_end) || !empty($day_1_session_2_field) || !empty($day_1_session_2_chair_name) || !empty($day_1_session_2_title) || !empty($day_1_session_2_speakers) || !empty($day_1_session_2_discussion_start) || !empty($day_1_session_2_discussion_end) || !empty($day_1_session_2_discussion)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <!-- Session Time, Field, Chair & Title -->
                        <?php if (!empty($day_1_session_2_start) || !empty($day_1_session_2_end) || !empty($day_1_session_2_field) || !empty($day_1_session_2_chair_name) || !empty($day_1_session_2_title)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 leading-relaxed">
                                <?php if (!empty($day_1_session_2_start) || !empty($day_1_session_2_end)): ?>
                                    <time class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_1_session_2_start) . (!empty($day_1_session_2_end) ? '–' . esc_html($day_1_session_2_end) : ''); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_1_session_2_field)): ?>
                                    <h4 class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_1_session_2_field); ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if (!empty($day_1_session_2_chair_name)): ?>
                                    <p class="text-sm sm:text-base font-secondary font-semibold text-zinc-900">
                                        <?php echo esc_html($day_1_session_2_chair_name); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty($day_1_session_2_title)): ?>
                                    <h5 class="text-sm sm:text-base font-secondary font-medium text-zinc-900">
                                        <?php echo esc_html($day_1_session_2_title); ?>
                                    </h5>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Session Speakers -->
                        <?php if (!empty($day_1_session_2_speakers)): ?>
                            <?php foreach ($day_1_session_2_speakers as $post): ?>
                                <?php setup_postdata($post); ?>
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                    <div class="flex flex-row items-center">
                                        <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <time class="pl-1 font-semibold">
                                            <?php 
                                            $presentation_start = get_field('presentation_start');
                                            $presentation_end = get_field('presentation_end');
                                            if (!empty($presentation_start) && !empty($presentation_end)) : ?>
                                                <?php echo esc_html($presentation_start) . '–' . esc_html($presentation_end); ?>
                                            <?php elseif (!empty($presentation_start)): ?>
                                                <?php echo esc_html($presentation_start); ?>
                                            <?php endif; ?>
                                        </time>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <?php $speaker_img = get_field('speaker_img'); ?>
                                        <?php if ($speaker_img) : ?>
                                            <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="size-4 sm:size-5 object-cover rounded-full">
                                        <?php endif; ?> 
                                        <p class="pl-1 flex font-semibold">
                                            <?php echo esc_html(get_field('speaker_name')); ?>
                                        </p>
                                    </div>
                                    <h5 class="font-medium">
                                        <?php echo esc_html(get_field('presentation_title')); ?>
                                    </h5>
                                    <div class="inline-block">
                                        <a href="<?php the_permalink() ?>" class="group relative inline-flex items-center text-sm sm:text-base font-secondary font-medium text-darkgreen" target="_blank">
                                            <p class="pr-1">Absztrakt</p>
                                            <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                            </svg>
                                            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-darkgreen group-hover:w-full transition-all duration-300 origin-left"></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <!-- Session Discussion Time & Field -->
                        <?php if (!empty($day_1_session_2_discussion_start) || !empty($day_1_session_2_discussion_end) || !empty($day_1_session_2_discussion)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <div class="flex flex-row items-center">
                                    <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <time class="pl-1">
                                        <?php if (!empty($day_1_session_2_discussion_start) && !empty($day_1_session_2_discussion_end)) : ?>
                                            <?php echo esc_html($day_1_session_2_discussion_start) . '–' . esc_html($day_1_session_2_discussion_end); ?>
                                        <?php elseif (!empty($day_1_session_2_discussion_start)): ?>
                                            <?php echo esc_html($day_1_session_2_discussion_start); ?>
                                        <?php endif; ?>
                                    </time>
                                </div>
                                <?php if (!empty($day_1_session_2_discussion)): ?>
                                <h4>
                                    <?php echo esc_html($day_1_session_2_discussion); ?>
                                </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 1 Break 3 -->
                <?php 
                $day_1_break_3_group = get_field('day_1_break_3');

                if ($day_1_break_3_group):
                    $day_1_break_3_start = $day_1_break_3_group['day_1_break_3_start'];
                    $day_1_break_3_end = $day_1_break_3_group['day_1_break_3_end'];
                    $day_1_break_3_field = $day_1_break_3_group['day_1_break_3_field'];

                    if (!empty($day_1_break_3_start) || !empty($day_1_break_3_end) || !empty($day_1_break_3_field)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <?php if (!empty($day_1_break_3_start) || !empty($day_1_break_3_end) || !empty($day_1_break_3_field)): ?>
                            <!-- Break Time & Field -->
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                <?php if (!empty($day_1_break_3_start) || !empty($day_1_break_3_end)): ?>
                                    <time>
                                        <?php echo esc_html($day_1_break_3_start) . (empty($day_1_break_3_end) ? '' : '–' . esc_html($day_1_break_3_end)); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_1_break_3_field)): ?>
                                    <h4>
                                        <?php echo esc_html($day_1_break_3_field); ?>
                                    </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 1 Session 3 -->
                <?php 
                $day_1_session_3_group = get_field('day_1_session_3');

                if ($day_1_session_3_group):
                    $day_1_session_3_start = $day_1_session_3_group['day_1_session_3_start'];
                    $day_1_session_3_end = $day_1_session_3_group['day_1_session_3_end'];
                    $day_1_session_3_field = $day_1_session_3_group['day_1_session_3_field'];
                    $day_1_session_3_chair_name = $day_1_session_3_group['day_1_session_3_chair_name'];
                    $day_1_session_3_title = $day_1_session_3_group['day_1_session_3_title'];
                    $day_1_session_3_speakers = $day_1_session_3_group['day_1_session_3_speakers'];
                    $day_1_session_3_discussion_start = $day_1_session_3_group['day_1_session_3_discussion_start'];
                    $day_1_session_3_discussion_end = $day_1_session_3_group['day_1_session_3_discussion_end'];
                    $day_1_session_3_discussion = $day_1_session_3_group['day_1_session_3_discussion'];

                    if (!empty($day_1_session_3_start) || !empty($day_1_session_3_end) || !empty($day_1_session_3_field) || !empty($day_1_session_3_chair_name) || !empty($day_1_session_3_title) || !empty($day_1_session_3_speakers) || !empty($day_1_session_3_discussion_start) || !empty($day_1_session_3_discussion_end) || !empty($day_1_session_3_discussion)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <!-- Session Time, Field, Chair & Title -->
                        <?php if (!empty($day_1_session_3_start) || !empty($day_1_session_3_end) || !empty($day_1_session_3_field) || !empty($day_1_session_3_chair_name) || !empty($day_1_session_3_title)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 leading-relaxed">
                                <?php if (!empty($day_1_session_3_start) || !empty($day_1_session_3_end)): ?>
                                    <time class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_1_session_3_start) . (!empty($day_1_session_3_end) ? '–' . esc_html($day_1_session_3_end) : ''); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_1_session_3_field)): ?>
                                    <h4 class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_1_session_3_field); ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if (!empty($day_1_session_3_chair_name)): ?>
                                    <p class="text-sm sm:text-base font-secondary font-semibold text-zinc-900">
                                        <?php echo esc_html($day_1_session_3_chair_name); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty($day_1_session_3_title)): ?>
                                    <h5 class="text-sm sm:text-base font-secondary font-medium text-zinc-900">
                                        <?php echo esc_html($day_1_session_3_title); ?>
                                    </h5>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Session Speakers -->
                        <?php if (!empty($day_1_session_3_speakers)): ?>
                            <?php foreach ($day_1_session_3_speakers as $post): ?>
                                <?php setup_postdata($post); ?>
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                    <div class="flex flex-row items-center">
                                        <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <time class="pl-1 font-semibold">
                                            <?php 
                                            $presentation_start = get_field('presentation_start');
                                            $presentation_end = get_field('presentation_end');
                                            if (!empty($presentation_start) && !empty($presentation_end)) : ?>
                                                <?php echo esc_html($presentation_start) . '–' . esc_html($presentation_end); ?>
                                            <?php elseif (!empty($presentation_start)): ?>
                                                <?php echo esc_html($presentation_start); ?>
                                            <?php endif; ?>
                                        </time>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <?php $speaker_img = get_field('speaker_img'); ?>
                                        <?php if ($speaker_img) : ?>
                                            <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="size-4 sm:size-5 object-cover rounded-full">
                                        <?php endif; ?> 
                                        <p class="pl-1 flex font-semibold">
                                            <?php echo esc_html(get_field('speaker_name')); ?>
                                        </p>
                                    </div>
                                    <h5 class="font-medium">
                                        <?php echo esc_html(get_field('presentation_title')); ?>
                                    </h5>
                                    <div class="inline-block">
                                        <a href="<?php the_permalink() ?>" class="group relative inline-flex items-center text-sm sm:text-base font-secondary font-medium text-darkgreen" target="_blank">
                                            <p class="pr-1">Absztrakt</p>
                                            <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                            </svg>
                                            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-darkgreen group-hover:w-full transition-all duration-300 origin-left"></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <!-- Session Discussion Time & Field -->
                        <?php if (!empty($day_1_session_3_discussion_start) || !empty($day_1_session_3_discussion_end) || !empty($day_1_session_3_discussion)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <div class="flex flex-row items-center">
                                    <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <time class="pl-1">
                                        <?php if (!empty($day_1_session_3_discussion_start) && !empty($day_1_session_3_discussion_end)) : ?>
                                            <?php echo esc_html($day_1_session_3_discussion_start) . '–' . esc_html($day_1_session_3_discussion_end); ?>
                                        <?php elseif (!empty($day_1_session_3_discussion_start)): ?>
                                            <?php echo esc_html($day_1_session_3_discussion_start); ?>
                                        <?php endif; ?>
                                    </time>
                                </div>
                                <?php if (!empty($day_1_session_3_discussion)): ?>
                                <h4>
                                    <?php echo esc_html($day_1_session_3_discussion); ?>
                                </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 1 Break 4 -->
                <?php 
                $day_1_break_4_group = get_field('day_1_break_4');

                if ($day_1_break_4_group):
                    $day_1_break_4_start = $day_1_break_4_group['day_1_break_4_start'];
                    $day_1_break_4_end = $day_1_break_4_group['day_1_break_4_end'];
                    $day_1_break_4_field = $day_1_break_4_group['day_1_break_4_field'];

                    if (!empty($day_1_break_4_start) || !empty($day_1_break_4_end) || !empty($day_1_break_4_field)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <?php if (!empty($day_1_break_4_start) || !empty($day_1_break_4_end) || !empty($day_1_break_4_field)): ?>
                            <!-- Break Time & Field -->
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                <?php if (!empty($day_1_break_4_start) || !empty($day_1_break_4_end)): ?>
                                    <time>
                                        <?php echo esc_html($day_1_break_4_start) . (empty($day_1_break_4_end) ? '' : '–' . esc_html($day_1_break_4_end)); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_1_break_4_field)): ?>
                                    <h4>
                                        <?php echo esc_html($day_1_break_4_field); ?>
                                    </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 1 Special Event -->
                <?php 
                $day_1_special_group = get_field('day_1_special_event');

                if ($day_1_special_group):
                    $day_1_special_event_start = $day_1_special_group['day_1_special_event_start'] ?? '';
                    $day_1_special_event_end = $day_1_special_group['day_1_special_event_end'] ?? '';
                    $day_1_special_event_field = $day_1_special_group['day_1_special_event_field'] ?? '';
                    $day_1_special_event_description = $day_1_special_group['day_1_special_event_description'] ?? '';

                    $has_content_day_1_special = !empty($day_1_special_event_start) || !empty($day_1_special_event_end) || !empty($day_1_special_event_field) || !empty($day_1_special_event_description);

                    if ($has_content_day_1_special):
                    ?>
                        <li class="ms-4">
                            <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                            <!-- Special Time & Field -->
                            <?php if (!empty($day_1_special_event_start) || !empty($day_1_special_event_end) || !empty($day_1_special_event_field)): ?>
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                    <?php if (!empty($day_1_special_event_start) || !empty($day_1_special_event_end)): ?>
                                        <time>
                                            <?php echo esc_html($day_1_special_event_start) . (!empty($day_1_special_event_end) ? '–' . esc_html($day_1_special_event_end) : ''); ?>
                                        </time>
                                    <?php endif; ?>
                                    <?php if (!empty($day_1_special_event_field)): ?>
                                        <h4>
                                            <?php echo esc_html($day_1_special_event_field); ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Special Description -->
                            <?php if (!empty($day_1_special_event_description)): ?>
                                <p class="pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed">
                                    <?php echo nl2br(esc_html($day_1_special_event_description)); ?>
                                </p>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ol>
            <a href="<?php echo esc_url(get_field('programme_btn_lnk')); ?>" target="_blank" class="mt-5 sm:mt-6 relative inline-flex items-center justify-center px-5 py-2 overflow-hidden text-sm sm:text-base font-secondary font-medium text-darkgreen border-2 border-darkgreen rounded-full shadow-sm group transition duration-300 ease-out hover:shadow-md">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-darkgreen group-hover:translate-x-0 ease">
                    <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                </span>
                <span class="absolute flex items-center justify-center w-full h-full text-darkgreen transition-all duration-300 transform group-hover:translate-x-full ease"><?php the_field('programme_btn_txt') ?></span>
                <span class="relative invisible"><?php the_field('programme_btn_txt') ?></span>
            </a>
        </div>

        <!-- Day 2 Timeline-->
        <div id="day2Content" class="col-span-1 p-6 bg-white shadow-md ring-1 ring-neutral-900/5 rounded-2xl hover:shadow-lg">
            <h3 class="pb-5 sm:pb-6 text-lg sm:text-xl font-primary font-medium text-darkgreen"><?php the_field('day_2_date') ?></h3>
            <ol class="relative border-s border-zinc-300"> 
                <!-- Day 2 Keyone Address -->
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

                    if (!empty($day_2_keynote_address_start) || !empty($day_2_keynote_address_end) || !empty($day_2_keynote_address_field) || !empty($day_2_keynote_speech_start) || !empty($day_2_keynote_speech_end) || !empty($day_2_keynote_speaker) || !empty($day_2_keynote_address_title) || !empty($day_2_keynote_discussion_start) || !empty($day_2_keynote_discussion_end) || !empty($day_2_keynote_discussion)):
                ?>
                        <li class="ms-4">
                            <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                            <?php if (!empty($day_2_keynote_address_start) || !empty($day_2_keynote_address_end) || !empty($day_2_keynote_address_field)): ?>
                                <!-- Keynote Time & Field -->
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                    <?php if (!empty($day_2_keynote_address_start) || !empty($day_2_keynote_address_end)): ?>
                                        <time>
                                            <?php echo esc_html($day_2_keynote_address_start) . '–' . esc_html($day_2_keynote_address_end); ?>
                                        </time>
                                    <?php endif; ?>

                                    <?php if (!empty($day_2_keynote_address_field)): ?>
                                        <h4>
                                            <?php echo esc_html($day_2_keynote_address_field); ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($day_2_keynote_speech_start) || !empty($day_2_keynote_speech_end) || !empty($day_2_keynote_speaker) || !empty($day_2_keynote_address_title)): ?>
                                <!-- Keynote Speech Time, Speaker & Title -->
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                    <?php if (!empty($day_2_keynote_speech_start) || !empty($day_2_keynote_speech_end)): ?>
                                        <div class="flex flex-row items-center">
                                            <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <time class="pl-1 font-semibold">
                                                <?php echo esc_html($day_2_keynote_speech_start) . '–' . esc_html($day_2_keynote_speech_end); ?>
                                            </time>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($day_2_keynote_speaker)): ?>
                                        <p class="font-semibold">
                                            <?php echo esc_html($day_2_keynote_speaker); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (!empty($day_2_keynote_address_title)): ?>
                                        <h5 class="font-medium">
                                            <?php echo esc_html($day_2_keynote_address_title); ?>
                                        </h5>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($day_2_keynote_discussion_start) || !empty($day_2_keynote_discussion_end) || !empty($day_2_keynote_discussion)): ?>
                                <!-- Keynote Discussion Time & Field -->
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                    <?php if (!empty($day_2_keynote_discussion_start) || !empty($day_2_keynote_discussion_end)): ?>
                                        <div class="flex flex-row items-center">
                                            <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <time class="pl-1">
                                                <?php echo esc_html($day_2_keynote_discussion_start) . '–' . esc_html($day_2_keynote_discussion_end); ?>
                                            </time>
                                        </div>
                                    <?php endif; ?>
                                    <h4>
                                        <?php echo esc_html($day_2_keynote_discussion); ?>
                                    </h4>
                                </div>
                            <?php endif; ?>
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

                    if (!empty($day_2_break_1_start) || !empty($day_2_break_1_end) || !empty($day_2_break_1_field)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <?php if (!empty($day_2_break_1_start) || !empty($day_2_break_1_end) || !empty($day_2_break_1_field)): ?>
                            <!-- Break Time & Field -->
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                <?php if (!empty($day_2_break_1_start) || !empty($day_2_break_1_end)): ?>
                                    <time>
                                        <?php echo esc_html($day_2_break_1_start) . (empty($day_2_break_1_end) ? '' : '–' . esc_html($day_2_break_1_end)); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_2_break_1_field)): ?>
                                    <h4>
                                        <?php echo esc_html($day_2_break_1_field); ?>
                                    </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

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

                    if (!empty($day_2_session_1_start) || !empty($day_2_session_1_end) || !empty($day_2_session_1_field) || !empty($day_2_session_1_chair_name) || !empty($day_2_session_1_title) || !empty($day_2_session_1_speakers) || !empty($day_2_session_1_discussion_start) || !empty($day_2_session_1_discussion_end) || !empty($day_2_session_1_discussion)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <!-- Session Time, Field, Chair & Title -->
                        <?php if (!empty($day_2_session_1_start) || !empty($day_2_session_1_end) || !empty($day_2_session_1_field) || !empty($day_2_session_1_chair_name) || !empty($day_2_session_1_title)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 leading-relaxed">
                                <?php if (!empty($day_2_session_1_start) || !empty($day_2_session_1_end)): ?>
                                    <time class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_2_session_1_start) . (!empty($day_2_session_1_end) ? '–' . esc_html($day_2_session_1_end) : ''); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_2_session_1_field)): ?>
                                    <h4 class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_2_session_1_field); ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if (!empty($day_2_session_1_chair_name)): ?>
                                    <p class="text-sm sm:text-base font-secondary font-semibold text-zinc-900">
                                        <?php echo esc_html($day_2_session_1_chair_name); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty($day_2_session_1_title)): ?>
                                    <h5 class="text-sm sm:text-base font-secondary font-medium text-zinc-900">
                                        <?php echo esc_html($day_2_session_1_title); ?>
                                    </h5>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Session Speakers -->
                        <?php if (!empty($day_2_session_1_speakers)): ?>
                            <?php foreach ($day_2_session_1_speakers as $post): ?>
                                <?php setup_postdata($post); ?>
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                    <div class="flex flex-row items-center">
                                        <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <time class="pl-1 font-semibold">
                                            <?php 
                                            $presentation_start = get_field('presentation_start');
                                            $presentation_end = get_field('presentation_end');
                                            if (!empty($presentation_start) && !empty($presentation_end)) : ?>
                                                <?php echo esc_html($presentation_start) . '–' . esc_html($presentation_end); ?>
                                            <?php elseif (!empty($presentation_start)): ?>
                                                <?php echo esc_html($presentation_start); ?>
                                            <?php endif; ?>
                                        </time>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <?php $speaker_img = get_field('speaker_img'); ?>
                                        <?php if ($speaker_img) : ?>
                                            <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="size-4 sm:size-5 object-cover rounded-full">
                                        <?php endif; ?> 
                                        <p class="pl-1 flex font-semibold">
                                            <?php echo esc_html(get_field('speaker_name')); ?>
                                        </p>
                                    </div>
                                    <h5 class="font-medium">
                                        <?php echo esc_html(get_field('presentation_title')); ?>
                                    </h5>
                                    <div class="inline-block">
                                        <a href="<?php the_permalink() ?>" class="group relative inline-flex items-center text-sm sm:text-base font-secondary font-medium text-darkgreen" target="_blank">
                                            <p class="pr-1">Absztrakt</p>
                                            <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                            </svg>
                                            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-darkgreen group-hover:w-full transition-all duration-300 origin-left"></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <!-- Session Discussion Time & Field -->
                        <?php if (!empty($day_2_session_1_discussion_start) || !empty($day_2_session_1_discussion_end) || !empty($day_2_session_1_discussion)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <div class="flex flex-row items-center">
                                    <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <time class="pl-1">
                                        <?php if (!empty($day_2_session_1_discussion_start) && !empty($day_2_session_1_discussion_end)) : ?>
                                            <?php echo esc_html($day_2_session_1_discussion_start) . '–' . esc_html($day_2_session_1_discussion_end); ?>
                                        <?php elseif (!empty($day_2_session_1_discussion_start)): ?>
                                            <?php echo esc_html($day_2_session_1_discussion_start); ?>
                                        <?php endif; ?>
                                    </time>
                                </div>
                                <?php if (!empty($day_2_session_1_discussion)): ?>
                                <h4>
                                    <?php echo esc_html($day_2_session_1_discussion); ?>
                                </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 2 Break 2 -->
                <?php 
                $day_2_break_2_group = get_field('day_2_break_2');

                if ($day_2_break_2_group):
                    $day_2_break_2_start = $day_2_break_2_group['day_2_break_2_start'];
                    $day_2_break_2_end = $day_2_break_2_group['day_2_break_2_end'];
                    $day_2_break_2_field = $day_2_break_2_group['day_2_break_2_field'];

                    if (!empty($day_2_break_2_start) || !empty($day_2_break_2_end) || !empty($day_2_break_2_field)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <?php if (!empty($day_2_break_2_start) || !empty($day_2_break_2_end) || !empty($day_2_break_2_field)): ?>
                            <!-- Break Time & Field -->
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                <?php if (!empty($day_2_break_2_start) || !empty($day_2_break_2_end)): ?>
                                    <time>
                                        <?php echo esc_html($day_2_break_2_start) . (empty($day_2_break_2_end) ? '' : '–' . esc_html($day_2_break_2_end)); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_2_break_2_field)): ?>
                                    <h4>
                                        <?php echo esc_html($day_2_break_2_field); ?>
                                    </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

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

                    if (!empty($day_2_session_2_start) || !empty($day_2_session_2_end) || !empty($day_2_session_2_field) || !empty($day_2_session_2_chair_name) || !empty($day_2_session_2_title) || !empty($day_2_session_2_speakers) || !empty($day_2_session_2_discussion_start) || !empty($day_2_session_2_discussion_end) || !empty($day_2_session_2_discussion)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <!-- Session Time, Field, Chair & Title -->
                        <?php if (!empty($day_2_session_2_start) || !empty($day_2_session_2_end) || !empty($day_2_session_2_field) || !empty($day_2_session_2_chair_name) || !empty($day_2_session_2_title)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 leading-relaxed">
                                <?php if (!empty($day_2_session_2_start) || !empty($day_2_session_2_end)): ?>
                                    <time class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_2_session_2_start) . (!empty($day_2_session_2_end) ? '–' . esc_html($day_2_session_2_end) : ''); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_2_session_2_field)): ?>
                                    <h4 class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_2_session_2_field); ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if (!empty($day_2_session_2_chair_name)): ?>
                                    <p class="text-sm sm:text-base font-secondary font-semibold text-zinc-900">
                                        <?php echo esc_html($day_2_session_2_chair_name); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty($day_2_session_2_title)): ?>
                                    <h5 class="text-sm sm:text-base font-secondary font-medium text-zinc-900">
                                        <?php echo esc_html($day_2_session_2_title); ?>
                                    </h5>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Session Speakers -->
                        <?php if (!empty($day_2_session_2_speakers)): ?>
                            <?php foreach ($day_2_session_2_speakers as $post): ?>
                                <?php setup_postdata($post); ?>
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                    <div class="flex flex-row items-center">
                                        <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <time class="pl-1 font-semibold">
                                            <?php 
                                            $presentation_start = get_field('presentation_start');
                                            $presentation_end = get_field('presentation_end');
                                            if (!empty($presentation_start) && !empty($presentation_end)) : ?>
                                                <?php echo esc_html($presentation_start) . '–' . esc_html($presentation_end); ?>
                                            <?php elseif (!empty($presentation_start)): ?>
                                                <?php echo esc_html($presentation_start); ?>
                                            <?php endif; ?>
                                        </time>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <?php $speaker_img = get_field('speaker_img'); ?>
                                        <?php if ($speaker_img) : ?>
                                            <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="size-4 sm:size-5 object-cover rounded-full">
                                        <?php endif; ?> 
                                        <p class="pl-1 flex font-semibold">
                                            <?php echo esc_html(get_field('speaker_name')); ?>
                                        </p>
                                    </div>
                                    <h5 class="font-medium">
                                        <?php echo esc_html(get_field('presentation_title')); ?>
                                    </h5>
                                    <div class="inline-block">
                                        <a href="<?php the_permalink() ?>" class="group relative inline-flex items-center text-sm sm:text-base font-secondary font-medium text-darkgreen" target="_blank">
                                            <p class="pr-1">Absztrakt</p>
                                            <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                            </svg>
                                            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-darkgreen group-hover:w-full transition-all duration-300 origin-left"></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <!-- Session Discussion Time & Field -->
                        <?php if (!empty($day_2_session_2_discussion_start) || !empty($day_2_session_2_discussion_end) || !empty($day_2_session_2_discussion)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <div class="flex flex-row items-center">
                                    <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <time class="pl-1">
                                        <?php if (!empty($day_2_session_2_discussion_start) && !empty($day_2_session_2_discussion_end)) : ?>
                                            <?php echo esc_html($day_2_session_2_discussion_start) . '–' . esc_html($day_2_session_2_discussion_end); ?>
                                        <?php elseif (!empty($day_2_session_2_discussion_start)): ?>
                                            <?php echo esc_html($day_2_session_2_discussion_start); ?>
                                        <?php endif; ?>
                                    </time>
                                </div>
                                <?php if (!empty($day_2_session_2_discussion)): ?>
                                <h4>
                                    <?php echo esc_html($day_2_session_2_discussion); ?>
                                </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 2 Break 3 -->
                <?php 
                $day_2_break_3_group = get_field('day_2_break_3');

                if ($day_2_break_3_group):
                    $day_2_break_3_start = $day_2_break_3_group['day_2_break_3_start'];
                    $day_2_break_3_end = $day_2_break_3_group['day_2_break_3_end'];
                    $day_2_break_3_field = $day_2_break_3_group['day_2_break_3_field'];

                    if (!empty($day_2_break_3_start) || !empty($day_2_break_3_end) || !empty($day_2_break_3_field)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <?php if (!empty($day_2_break_3_start) || !empty($day_2_break_3_end) || !empty($day_2_break_3_field)): ?>
                            <!-- Break Time & Field -->
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                <?php if (!empty($day_2_break_3_start) || !empty($day_2_break_3_end)): ?>
                                    <time>
                                        <?php echo esc_html($day_2_break_3_start) . (empty($day_2_break_3_end) ? '' : '–' . esc_html($day_2_break_3_end)); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_2_break_3_field)): ?>
                                    <h4>
                                        <?php echo esc_html($day_2_break_3_field); ?>
                                    </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

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

                    if (!empty($day_2_session_3_start) || !empty($day_2_session_3_end) || !empty($day_2_session_3_field) || !empty($day_2_session_3_chair_name) || !empty($day_2_session_3_title) || !empty($day_2_session_3_speakers) || !empty($day_2_session_3_discussion_start) || !empty($day_2_session_3_discussion_end) || !empty($day_2_session_3_discussion)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <!-- Session Time, Field, Chair & Title -->
                        <?php if (!empty($day_2_session_3_start) || !empty($day_2_session_3_end) || !empty($day_2_session_3_field) || !empty($day_2_session_3_chair_name) || !empty($day_2_session_3_title)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 leading-relaxed">
                                <?php if (!empty($day_2_session_3_start) || !empty($day_2_session_3_end)): ?>
                                    <time class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_2_session_3_start) . (!empty($day_2_session_3_end) ? '–' . esc_html($day_2_session_3_end) : ''); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_2_session_3_field)): ?>
                                    <h4 class="text-base sm:text-lg font-primary font-medium text-darkgreen">
                                        <?php echo esc_html($day_2_session_3_field); ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if (!empty($day_2_session_3_chair_name)): ?>
                                    <p class="text-sm sm:text-base font-secondary font-semibold text-zinc-900">
                                        <?php echo esc_html($day_2_session_3_chair_name); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty($day_2_session_3_title)): ?>
                                    <h5 class="text-sm sm:text-base font-secondary font-medium text-zinc-900">
                                        <?php echo esc_html($day_2_session_3_title); ?>
                                    </h5>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Session Speakers -->
                        <?php if (!empty($day_2_session_3_speakers)): ?>
                            <?php foreach ($day_2_session_3_speakers as $post): ?>
                                <?php setup_postdata($post); ?>
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                                    <div class="flex flex-row items-center">
                                        <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <time class="pl-1 font-semibold">
                                            <?php 
                                            $presentation_start = get_field('presentation_start');
                                            $presentation_end = get_field('presentation_end');
                                            if (!empty($presentation_start) && !empty($presentation_end)) : ?>
                                                <?php echo esc_html($presentation_start) . '–' . esc_html($presentation_end); ?>
                                            <?php elseif (!empty($presentation_start)): ?>
                                                <?php echo esc_html($presentation_start); ?>
                                            <?php endif; ?>
                                        </time>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <?php $speaker_img = get_field('speaker_img'); ?>
                                        <?php if ($speaker_img) : ?>
                                            <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="size-4 sm:size-5 object-cover rounded-full">
                                        <?php endif; ?> 
                                        <p class="pl-1 flex font-semibold">
                                            <?php echo esc_html(get_field('speaker_name')); ?>
                                        </p>
                                    </div>
                                    <h5 class="font-medium">
                                        <?php echo esc_html(get_field('presentation_title')); ?>
                                    </h5>
                                    <div class="inline-block">
                                        <a href="<?php the_permalink() ?>" class="group relative inline-flex items-center text-sm sm:text-base font-secondary font-medium text-darkgreen" target="_blank">
                                            <p class="pr-1">Absztrakt</p>
                                            <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                            </svg>
                                            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-darkgreen group-hover:w-full transition-all duration-300 origin-left"></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <!-- Session Discussion Time & Field -->
                        <?php if (!empty($day_2_session_3_discussion_start) || !empty($day_2_session_3_discussion_end) || !empty($day_2_session_3_discussion)): ?>
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed">
                                <div class="flex flex-row items-center">
                                    <svg class="h-4 sm:h-5 w-4 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <time class="pl-1">
                                        <?php if (!empty($day_2_session_3_discussion_start) && !empty($day_2_session_3_discussion_end)) : ?>
                                            <?php echo esc_html($day_2_session_3_discussion_start) . '–' . esc_html($day_2_session_3_discussion_end); ?>
                                        <?php elseif (!empty($day_2_session_3_discussion_start)): ?>
                                            <?php echo esc_html($day_2_session_3_discussion_start); ?>
                                        <?php endif; ?>
                                    </time>
                                </div>
                                <?php if (!empty($day_2_session_3_discussion)): ?>
                                <h4>
                                    <?php echo esc_html($day_2_session_3_discussion); ?>
                                </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

                <!-- Day 2 Break 4 -->
                <?php 
                $day_2_break_4_group = get_field('day_2_break_4');

                if ($day_2_break_4_group):
                    $day_2_break_4_start = $day_2_break_4_group['day_2_break_4_start'];
                    $day_2_break_4_end = $day_2_break_4_group['day_2_break_4_end'];
                    $day_2_break_4_field = $day_2_break_4_group['day_2_break_4_field'];

                    if (!empty($day_2_break_4_start) || !empty($day_2_break_4_end) || !empty($day_2_break_4_field)):
                ?>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                        <?php if (!empty($day_2_break_4_start) || !empty($day_2_break_4_end) || !empty($day_2_break_4_field)): ?>
                            <!-- Break Time & Field -->
                            <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                <?php if (!empty($day_2_break_4_start) || !empty($day_2_break_4_end)): ?>
                                    <time>
                                        <?php echo esc_html($day_2_break_4_start) . (empty($day_2_break_4_end) ? '' : '–' . esc_html($day_2_break_4_end)); ?>
                                    </time>
                                <?php endif; ?>
                                <?php if (!empty($day_2_break_4_field)): ?>
                                    <h4>
                                        <?php echo esc_html($day_2_break_4_field); ?>
                                    </h4>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php 
                    endif;
                endif; 
                ?>

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
                            <div class="absolute w-3 h-3 bg-darkgreen rounded-full mt-1.5 -start-1.5"></div>

                            <!-- Special Time & Field -->
                            <?php if (!empty($day_2_special_event_start) || !empty($day_2_special_event_end) || !empty($day_2_special_event_field)): ?>
                                <div class="flex flex-col gap-1 pb-5 sm:pb-6 text-base sm:text-lg font-primary font-medium text-darkgreen leading-relaxed">
                                    <?php if (!empty($day_2_special_event_start) || !empty($day_2_special_event_end)): ?>
                                        <time>
                                            <?php echo esc_html($day_2_special_event_start) . (!empty($day_2_special_event_end) ? '–' . esc_html($day_2_special_event_end) : ''); ?>
                                        </time>
                                    <?php endif; ?>
                                    <?php if (!empty($day_2_special_event_field)): ?>
                                        <h4>
                                            <?php echo esc_html($day_2_special_event_field); ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Special Description -->
                            <?php if (!empty($day_2_special_event_description)): ?>
                                <p class="pb-5 sm:pb-6 text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed">
                                    <?php echo nl2br(esc_html($day_2_special_event_description)); ?>
                                </p>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ol>
            <a href="<?php echo esc_url(get_field('programme_btn_lnk')); ?>" target="_blank" class="mt-5 sm:mt-6 relative inline-flex items-center justify-center px-5 py-2 overflow-hidden text-sm sm:text-base font-secondary font-medium text-darkgreen border-2 border-darkgreen rounded-full shadow-sm group transition duration-300 ease-out hover:shadow-md">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-darkgreen group-hover:translate-x-0 ease">
                    <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                </span>
                <span class="absolute flex items-center justify-center w-full h-full text-darkgreen transition-all duration-300 transform group-hover:translate-x-full ease"><?php the_field('programme_btn_txt') ?></span>
                <span class="relative invisible"><?php the_field('programme_btn_txt') ?></span>
            </a>
        </div>
    </div>
</section>

<!-- Supporters Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h1 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('supporters_section_heading'); ?></h1>
        <h2 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('supporters_section_subheading'); ?></h2>
    </div>

    <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 items-center gap-x-8 sm:gap-x-10 gap-y-12 sm:gap-y-14">
        <?php
        $args = [
            'post_type' => 'supporter',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        ];
        $supporter_query = new WP_Query($args);

        if ($supporter_query->have_posts()) :
            while ($supporter_query->have_posts()) : $supporter_query->the_post();
        ?>

            <div id="sponsorHover" class="flex flex-col items-center gap-3">
                <a href="<?php echo esc_url(get_field('supporter_lnk')); ?>" target="_blank" class="hover:opacity-100 transition-opacity duration-300">
                    <?php $supporter_img = get_field('supporter_img'); ?>
                    <?php if ($supporter_img) : ?>
                        <img src="<?php echo esc_url($supporter_img['url']); ?>" alt="<?php echo esc_attr($supporter_img['alt']); ?>" class="col-span-1 max-h-20 sm:max-h-28 w-full object-contain hover:scale-110 transition ease-in-out duration-300">
                    <?php endif; ?>
                </a>
                <h3 class="text-sm sm:text-base font-primary font-medium text-darkgreen leading-relaxed text-center">
                    <?php the_field('supporter_name'); ?>
                </h3>
            </div>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo 'Hiba a betöltéskor.';
        endif;
        ?>
    </div>
</section>
</main>

<?php get_footer() ?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const day1Tab = document.getElementById("tabDay1");
    const day2Tab = document.getElementById("tabDay2");
    const day1Content = document.getElementById("day1Content");
    const day2Content = document.getElementById("day2Content");

    function selectDay1() {
        if (window.innerWidth < 1024) {
        day1Content.classList.remove("hidden");
        day2Content.classList.add("hidden");
        day1Tab.classList.add("bg-darkgreen", "text-white");
        day1Tab.classList.remove("bg-white", "text-zinc-900");
        day2Tab.classList.add("bg-white", "text-zinc-900");
        day2Tab.classList.remove("bg-darkgreen", "text-white");
        }
    }

    function selectDay2() {
        if (window.innerWidth < 1024) {
        day2Content.classList.remove("hidden");
        day1Content.classList.add("hidden");
        day2Tab.classList.add("bg-darkgreen", "text-white");
        day2Tab.classList.remove("bg-white", "text-zinc-900");
        day1Tab.classList.add("bg-white", "text-zinc-900");
        day1Tab.classList.remove("bg-darkgreen", "text-white");
        }
    }

    day1Tab.addEventListener("click", selectDay1);
    day2Tab.addEventListener("click", selectDay2);

    window.addEventListener("resize", function () {
        if (window.innerWidth >= 1024) {
        day1Content.classList.remove("hidden");
        day2Content.classList.remove("hidden");
        day1Tab.classList.remove("bg-darkgreen", "text-white");
        day2Tab.classList.remove("bg-darkgreen", "text-white");
        day1Tab.classList.add("bg-white", "text-zinc-900");
        day2Tab.classList.add("bg-white", "text-zinc-900");
        } else {
        if (day1Content.classList.contains("hidden")) {
            selectDay2();
        } else {
            selectDay1();
        }
        }
    });

    if (window.innerWidth < 1024) {
        selectDay1();
    } else {
        day1Content.classList.remove("hidden");
        day2Content.classList.remove("hidden");
    }
    });

    document.addEventListener("DOMContentLoaded", function () {
    var scrollToTopButton = document.getElementById("scroll-to-top-btn");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 200) {
            scrollToTopButton.classList.remove("hidden");
        } else {
            scrollToTopButton.classList.add("hidden");
        }
    });

    scrollToTopButton.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });

    const footerLinks = document.querySelectorAll("#footerLinks a");

    footerLinks.forEach((link) => {
        link.addEventListener("mouseenter", () => {
            footerLinks.forEach(
                (lnk) => lnk !== link && lnk.classList.add("opacity-40")
            );
        });

        link.addEventListener("mouseleave", () => {
            footerLinks.forEach((lnk) => lnk.classList.remove("opacity-40"));
        });

        link.addEventListener("click", () => {
            footerLinks.forEach((lnk) => lnk.classList.remove("opacity-40"));
        });
    });

    const sponsorHover = document.querySelectorAll("#sponsorHover a");

    sponsorHover.forEach((hover) => {
        hover.addEventListener("mouseenter", () => {
            sponsorHover.forEach(
                (hvr) => hvr !== hover && hvr.classList.add("opacity-40")
            );
        });

        hover.addEventListener("mouseleave", () => {
            sponsorHover.forEach((hvr) => hvr.classList.remove("opacity-40"));
        });

        hover.addEventListener("click", () => {
            sponsorHover.forEach((hvr) => hvr.classList.remove("opacity-40"));
        });
    });
});
</script>

<?php get_footer() ?>