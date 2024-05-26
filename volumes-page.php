<?php
/*
Template Name: Volumes Page
*/
?>

<?php get_header(); ?>

<main>
     
<!-- Volumes Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h1 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('volumes_section_heading'); ?></h1>
        <h2 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('volumes_section_subheading'); ?></h2>
    </div>

    <!-- Grid with Cards -->
    <div class="relative grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <?php
        $args = [
            'post_type' => 'volume',
            'posts_per_page' => -1,
            'meta_key' => 'volume_date',
            'orderby' => 'meta_value_num',
            'order' => 'DESC', 
        ];
        $volume_query = new WP_Query($args);

        if ($volume_query->have_posts()) :
            while ($volume_query->have_posts()) : $volume_query->the_post();
                $volume_url = get_field('volume_url');
        ?>

        <a href="<?php echo esc_url(get_field('volume_url')); ?>" class="relative bg-white shadow-md ring-1 ring-neutral-900/5 rounded-2xl overflow-hidden group cursor-pointer transition-all duration-300 hover:shadow-xl aspect-w-7 aspect-h-10" target="_blank">
            <?php $volume_img = get_field('volume_img'); ?>
            <?php if ($volume_img) : ?>
                <img src="<?php echo esc_url($volume_img['url']); ?>" alt="<?php echo esc_attr($volume_img['alt']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="absolute inset-0 bg-zinc-900/60 bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                    <div class="p-4 flex flex-col gap-1 text-white leading-relaxed">
                        <h3 class="text-lg sm:text-xl font-primary font-semibold"><?php the_field('volume_title'); ?></h3>
                        <date class="text-sm sm:text-base font-secondary font-medium opacity-70">
                            <?php the_field('volume_date'); ?>
                        </date>
                    </div>
                </div>
            <?php endif; ?>
        </a>

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

<?php get_footer(); ?>