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
        <h2 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('vision_section_heading'); ?></h2>
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
                    <a href="<?php echo esc_url($speakers_page_url); ?>" target="_blank" class="mt-5 sm:mt-6 relative inline-flex items-center justify-center px-5 py-2 overflow-hidden text-sm sm:text-base font-secondary font-medium text-darkgreen border-2 border-darkgreen rounded-full shadow-sm group transition duration-300 ease-out hover:shadow-md">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-darkgreen group-hover:translate-x-0 ease">
                            <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-darkgreen transition-all duration-300 transform group-hover:translate-x-full ease"><?php the_field('speakers_btn_txt') ?></span>
                        <span class="relative invisible"><?php the_field('speakers_btn_txt') ?></span>
                    </a>
                <?php endif; ?>

                <?php $volumes_page = get_field('volumes_btn_lnk');
                if( $volumes_page ): 
                    $volumes_page_url = get_permalink($volumes_page->ID);
                ?>
                    <a href="<?php echo esc_url($volumes_page_url); ?>" target="_blank" class="mt-5 sm:mt-6 relative inline-flex items-center justify-center px-5 py-2 overflow-hidden text-sm sm:text-base font-secondary font-medium text-darkgreen border-2 border-darkgreen rounded-full shadow-sm group transition duration-300 ease-out hover:shadow-md">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-darkgreen group-hover:translate-x-0 ease">
                            <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-darkgreen transition-all duration-300 transform group-hover:translate-x-full ease"><?php the_field('volumes_btn_txt') ?></span>
                        <span class="relative invisible"><?php the_field('volumes_btn_txt') ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('process_section_heading'); ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('process_section_subheading'); ?></h3>
    </div>

    <!-- Application & Editing -->
    <div class="mb-10 sm:mb-12 grid grid-cols-1 lg:grid-cols-4 gap-4 sm:gap-8 overflow-hidden">
        <?php
        $args = [
            'post_type' => 'step',
            'posts_per_page' => -1,
            'order' => 'ASC',
        ];
        $step_query = new WP_Query($args);

        if ($step_query->have_posts()) :
            while ($step_query->have_posts()) : $step_query->the_post();
        ?>

            <div class="text-sm sm:text-base font-medium leading-relaxed">
                <div class="flex items-center font-primary text-darkgreen">
                    <svg class="mr-3 h-5 w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                    </svg>
                    <h4><?php the_field('step_title'); ?></h4>
                    <div class="absolute -ml-3 lg:ml-5 h-px w-screen -translate-x-full bg-zinc-300 lg:static lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
                </div>
                <p class="mt-3 sm:mt-5 font-secondary text-zinc-900"><?php the_field('step_description'); ?></p>
            </div>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo 'Hiba a betöltéskor.';
        endif;
        ?>
    </div>

    <!-- CTA Section -->
    <div class="relative grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 align-items-stretch">
        <!-- Card 1 -->
        <div class="relative col-span-1 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
            <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-darkgreen transition-all duration-300 group-hover:scale-[20]"></span>
            <div class="relative z-5">
                <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-darkgreen transition-all duration-300 group-hover:bg-lightgreen">
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-darkgreen transition-all duration-300 group-hover:text-white">
                    <h2><?php the_field('faq_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 group-hover:text-white">
                    <p><?php the_field('faq_card_description') ?></p>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-darkgreen">
                    <?php $faq_page = get_field('faq_card_btn_lnk');
                    if( $faq_page ): 
                        $faq_page_url = get_permalink($faq_page->ID);
                    ?>
                        <a href="<?php echo esc_url($faq_page_url); ?>" target="_blank" class="clickable-parent flex flex-row items-center transition-all duration-300 group-hover:text-white" target="_blank">
                            <p class="pr-1"><?php the_field('faq_card_btn_txt') ?></p>
                            <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-span-1 hidden md:hidden lg:block">
            <?php $process_section_cta_img = get_field('process_section_cta_img'); ?>
            <?php if ($process_section_cta_img) : ?>
                <img src="<?php echo esc_url($process_section_cta_img['url']); ?>" alt="<?php echo esc_attr($process_section_cta_img['alt']); ?>" class="rounded-2xl shadow-md h-full w-full object-cover">
            <?php endif; ?>
        </div>
        <!-- Card 3 -->
        <div class="relative col-span-1 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
            <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-darkgreen transition-all duration-300 group-hover:scale-[20]"></span>
            <div class="relative z-5">
                <span class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full bg-darkgreen transition-all duration-300 group-hover:bg-lightgreen">
                    <svg class="h-8 sm:h-10 w-8 sm:w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-darkgreen transition-all duration-300 group-hover:text-white">
                    <h2><?php the_field('social_card_title') ?></h2>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed transition-all duration-300 group-hover:text-white">
                    <p><?php the_field('social_card_description') ?></p>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-darkgreen">
                    <?php $social_card_btn_lnk = get_field('social_card_btn_lnk'); ?>
                    <a href="<?php echo esc_url($social_card_btn_lnk); ?>" class="clickable-parent flex flex-row items-center transition-all duration-300 group-hover:text-white" target="_blank">
                        <p class="pr-1"><?php the_field('social_card_btn_txt') ?></p>
                        <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <!-- Current Team Members -->
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('team_section_heading'); ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('team_section_subheading_1'); ?></h3>
    </div>

    <!-- Grid with Cards -->
    <div class="mb-10 sm:mb-24 relative grid grid-cols-1 lg:grid-cols-2 gap-4">
        <?php
        $current_members = get_field('current_members');
        if ($current_members):
            foreach ($current_members as $post):
                setup_postdata($post);
        ?>
            <div class="relative col-span-1 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl overflow-hidden">
                <div class="relative z-5">
                    <div class="flex flex-row gap-3 items-center">
                        <?php $member_img = get_field('member_img'); ?>
                        <?php if ($member_img): ?>
                            <img src="<?php echo esc_url($member_img['url']); ?>" alt="<?php echo esc_attr($member_img['alt']); ?>" class="h-16 sm:h-20 w-16 sm:w-20 rounded-full object-cover">
                        <?php endif; ?>
                        <div class="flex flex-col font-medium text-darkgreen">
                            <h4 class="text-lg sm:text-xl font-primary"><?php the_title(); ?></h4>
                            <p class="text-sm sm:text-base font-secondary"><?php the_field('member_period'); ?></p>
                        </div>
                    </div>
                    <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                        <p><?php the_field('member_intro'); ?></p>
                    </div>
                </div>
            </div>
        <?php
            endforeach;
            wp_reset_postdata();
        endif;
        ?>
    </div>

    <!-- Previous Team Members -->
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('team_section_heading'); ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('team_section_subheading_2'); ?></h3>
    </div>

    <!-- Grid with Cards -->
    <div class="relative grid grid-cols-1 lg:grid-cols-2 gap-4">
        <?php
        $previous_members = get_field('previous_members');
        if ($previous_members):
            foreach ($previous_members as $post):
                setup_postdata($post);
        ?>
            <div class="relative col-span-1 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl overflow-hidden">
                <div class="relative z-5">
                    <div class="flex flex-row gap-3 items-center">
                        <?php $member_img = get_field('member_img'); ?>
                        <?php if ($member_img): ?>
                            <img src="<?php echo esc_url($member_img['url']); ?>" alt="<?php echo esc_attr($member_img['alt']); ?>" class="h-16 sm:h-20 w-16 sm:w-20 rounded-full object-cover">
                        <?php endif; ?>
                        <div class="flex flex-col font-medium text-darkgreen">
                            <h4 class="text-lg sm:text-xl font-primary"><?php the_title(); ?></h4>
                            <p class="text-sm sm:text-base font-secondary"><?php the_field('member_period'); ?></p>
                        </div>
                    </div>
                    <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary text-zinc-900 leading-relaxed">
                        <p><?php the_field('member_intro'); ?></p>
                    </div>
                </div>
            </div>
        <?php
            endforeach;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

</main>

<?php get_footer(); ?>