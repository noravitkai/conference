<?php
/*
Template Name: Speakers Page
*/
?>

<?php get_header() ?>

<main>

<!-- Speakers Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-lightgreen uppercase"><?php the_field('speakers_section_heading') ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('speakers_section_subheading') ?></h3>
    </div>

    <!-- Grid with Cards -->
    <div class="relative grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <?php
        $args = [
            'post_type' => 'speaker',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        ];
        $speaker_query = new WP_Query($args);

        if ($speaker_query->have_posts()) :
            while ($speaker_query->have_posts()) : $speaker_query->the_post();
        ?>

            <div class="relative col-span-1 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
                <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-lightgreen transition-all duration-300 group-hover:scale-[20]"></span>
                <div class="relative z-5">
                    <span>
                        <?php $speaker_img = get_field('speaker_img'); ?>
                        <?php if ($speaker_img) : ?>
                            <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full object-cover bg-lightgreen transition-all duration-300 group-hover:bg-tintgreen">
                        <?php endif; ?> 
                    </span>
                    <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-lightgreen transition-all duration-300 group-hover:text-white">
                        <h4><?php the_field('speaker_name') ?></h4>
                    </div>
                    <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed transition-all duration-300 group-hover:text-white line-clamp-1">
                        <p><?php the_field('presentation_title') ?></p>
                    </div>
                    <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-lightgreen">
                        <a href="#" class="flex flex-row items-center transition-all duration-300 group-hover:text-white">
                        <p class="pr-1">Tovább</p>
                            <svg class="h-4 sm:h-6 w-4 sm:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                        </a>
                    </div>
                </div>
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