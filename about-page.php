<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<main>    

<!-- Vision Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-lightgreen uppercase"><?php the_field('vision_section_heading'); ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('vision_section_subheading'); ?></h3>
    </div>
    <div class="flex flex-col lg:flex-row lg:items-center gap-6">
        <?php $vision_section_img = get_field('vision_section_img'); ?>
        <?php if ($vision_section_img) : ?>
            <div class="lg:w-1/2 w-full h-64 md:h-96">
                <img src="<?php echo esc_url($vision_section_img['url']); ?>" alt="<?php echo esc_attr($vision_section_img['alt']); ?>" class="w-full h-full object-cover rounded-2xl shadow-sm">
            </div>
        <?php endif; ?>
        <div class="lg:w-1/2 w-full text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed">
            <div class="space-y-3 sm:space-y-5">
                <?php 
                $vision_description = get_field('vision_section_description');
                $paragraphs = explode("\n", $vision_description);
                foreach ($paragraphs as $paragraph) {
                    echo '<p>' . $paragraph . '</p>';
                }
                ?>
            </div>
            <div class="flex flex-row gap-3">
                <?php $speakers_page = get_field('speakers_btn_lnk');
                if( $speakers_page ): 
                    $speakers_page_url = get_permalink($speakers_page->ID);
                ?>
                    <a href="<?php echo esc_url($speakers_page_url); ?>" target="_blank" class="mt-5 sm:mt-6 relative inline-flex items-center justify-center px-5 py-2 overflow-hidden text-sm sm:text-base font-secondary font-medium text-lightgreen border-2 border-lightgreen rounded-full shadow-sm group transition duration-300 ease-out hover:shadow-md">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-lightgreen group-hover:translate-x-0 ease">
                            <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-lightgreen transition-all duration-300 transform group-hover:translate-x-full ease"><?php the_field('speakers_btn_txt') ?></span>
                        <span class="relative invisible"><?php the_field('speakers_btn_txt') ?></span>
                    </a>
                <?php endif; ?>

                <?php $volumes_page = get_field('volumes_btn_lnk');
                if( $volumes_page ): 
                    $volumes_page_url = get_permalink($volumes_page->ID);
                ?>
                    <a href="<?php echo esc_url($volumes_page_url); ?>" target="_blank" class="mt-5 sm:mt-6 relative inline-flex items-center justify-center px-5 py-2 overflow-hidden text-sm sm:text-base font-secondary font-medium text-lightgreen border-2 border-lightgreen rounded-full shadow-sm group transition duration-300 ease-out hover:shadow-md">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-lightgreen group-hover:translate-x-0 ease">
                            <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-lightgreen transition-all duration-300 transform group-hover:translate-x-full ease"><?php the_field('volumes_btn_txt') ?></span>
                        <span class="relative invisible"><?php the_field('volumes_btn_txt') ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>