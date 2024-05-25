<?php
/*
Template Name: Speakers Page
*/
?>

<?php get_header(); ?>

<main>

<!-- Speakers Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('speakers_section_heading'); ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('speakers_section_subheading'); ?></h3>
    </div>

    <!-- Tab Navigation -->
    <div class="flex justify-center mb-10 sm:mb-12">
        <?php
        $years = get_posts(array(
            'post_type' => 'speaker',
            'posts_per_page' => -1,
            'fields' => 'ids',
            'meta_key' => 'presentation_year',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        ));
        $years = array_unique(array_map(function($post_id) {
            return get_field('presentation_year', $post_id);
        }, $years));
        ?>

        <ul id="yearTabs" class="flex flex-wrap md:flex-nowrap items-center gap-y-4 md:gap-y-6 justify-center gap-x-4 md:gap-x-6 divide-x divide-neutral-900/5 ">
            <?php foreach ($years as $index => $year): ?>
                <li class="cursor-pointer pl-4 sm:pl-6" data-year="<?php echo esc_attr($year); ?>">
                    <a class="text-base sm:text-lg font-medium <?php echo $index === 0 ? 'text-darkgreen' : 'text-zinc-900'; ?>"><?php echo esc_html($year); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Grid with Cards -->
    <div id="speakersGrid">
        <?php foreach ($years as $index => $year): ?>
            <div class="year-group <?php echo $index === 0 ? 'grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4' : 'hidden'; ?>" data-year="<?php echo esc_attr($year); ?>">
                <?php
                $args = array(
                    'post_type' => 'speaker',
                    'posts_per_page' => -1,
                    'meta_key' => 'presentation_year',
                    'meta_value' => $year,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                $speaker_query = new WP_Query($args);

                if ($speaker_query->have_posts()) :
                    while ($speaker_query->have_posts()) : $speaker_query->the_post();
                ?>
                    <div class="relative col-span-1 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
                        <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-darkgreen transition-all duration-300 group-hover:scale-[20]"></span>
                        <div class="relative z-5">
                            <span>
                                <?php $speaker_img = get_field('speaker_img'); ?>
                                <?php if ($speaker_img) : ?>
                                    <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full object-cover aspect-square bg-darkgreen transition-all duration-300 group-hover:bg-lightgreen">
                                <?php endif; ?>
                            </span>
                            <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-darkgreen transition-all duration-300 group-hover:text-white">
                                <h4><?php the_field('speaker_name'); ?></h4>
                            </div>
                            <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed transition-all duration-300 group-hover:text-white line-clamp-1">
                                <p><?php the_field('presentation_title'); ?></p>
                            </div>
                            <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-darkgreen">
                                <a href="<?php the_permalink(); ?>" class="clickable-parent flex flex-row items-center transition-all duration-300 group-hover:text-white">
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
                    echo '<p>Hiba a betöltéskor.</p>';
                endif;
                ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

</main>

<?php get_footer(); ?>
