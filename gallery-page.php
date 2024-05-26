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
        <h1 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('gallery_section_heading') ?></h1>
        <h2 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('gallery_section_subheading') ?></h2>
    </div>

    <div>
        <?php echo do_shortcode('[modula id="376"]') ?>
    </div>

</section>

</main>

<?php get_footer() ?>