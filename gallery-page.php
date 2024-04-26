<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header() ?>

<main>

<!-- Gallery Section -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-lightgreen uppercase"><?php the_field('gallery_section_heading') ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('gallery_section_subheading') ?></h3>
    </div>

    <div>
        <?php echo do_shortcode('[modula id="376"]') ?>
    </div>

</section>

</main>

<?php get_footer() ?>