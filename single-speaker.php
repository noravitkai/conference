<?php get_header() ?>

<main class="bg-neutral-100">

<?php 
while (have_posts()) : the_post();
?>

<!-- Bio -->
<section class="px-10 sm:px-24 py-10 sm:py-24 border-b border-neutral-900/5">
    <div class="bg-white shadow-md ring-1 ring-neutral-900/5 rounded-2xl">
        <div class="p-10 lg:p-6">
            <figure class="grid grid-cols-1 items-center gap-x-6 lg:gap-x-16 gap-y-8">
                <div class="col-span-2 lg:col-start-1 lg:row-start-2">
                    <blockquote class="relative">
                        <svg class="absolute -top-6 -start-8 size-16 text-lightgreen/30" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z" fill="currentColor"></path>
                        </svg>
                    <div class="relative z-5">
                        <p class="text-sm sm:text-base font-secondary font-medium leading-loose text-zinc-900 italic">
                            <?php echo esc_html(get_field('speaker_bio')); ?>
                        </p>
                    </div>
                    </blockquote>
                </div>
                <div class="col-end-1 lg:row-span-4">
                    <?php $speaker_img = get_field('speaker_img'); if ($speaker_img) : ?>
                        <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="rounded-full object-cover aspect-square w-32 h-32 lg:w-72 lg:h-72 shadow-sm">
                    <?php endif; ?>
                </div>
                <figcaption class="lg:col-start-1 lg:row-start-3 font-medium leading-relaxed text-darkgreen flex flex-col gap-4">
                    <h4 class="text-lg sm:text-xl font-primary"><?php echo esc_html(get_field('speaker_name')); ?></h4>
                    <date class="text-base sm:text-lg font-secondary"><?php echo esc_html(get_field('presentation_year')); ?></date>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- Abstract -->
<section class="px-10 sm:px-24 py-10 sm:py-24 border-b border-neutral-900/5">
    <h1 class="mb-8 mx-auto max-w-4xl text-lg sm:text-xl font-primary font-semibold leading-relaxed text-zinc-900 text-center"><?php echo esc_html(get_field('presentation_title')); ?></h1>
    <article class="prose text-zinc-900 prose-headings:mb-4 prose-heading:mt-0 prose-headings:font-primary prose-headings:font-semibold prose-headings:text-lg prose-p:mt-0 prose-p:font-secondary prose-p:text-base prose-p:leading-loose prose-img:rounded-2xl prose-img:shadow-sm prose-img:my-4 prose-img:w-full max-w-none">
        <div class="lg:columns-2 lg:gap-x-8">
            <?php $abstract = get_field('abstract');
            echo apply_filters('the_content', $abstract);
            ?>
        </div>
    </article>
    <div class="flex flex-row gap-3">
        <a href="<?php echo home_url('/#program'); ?>" target="_blank" class="mt-8 relative inline-flex items-center justify-center px-5 py-2 overflow-hidden text-sm sm:text-base font-secondary font-medium text-darkgreen border-2 border-darkgreen rounded-full shadow-sm group transition duration-300 ease-out hover:shadow-md">
            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-darkgreen group-hover:translate-x-0 ease">
                <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </span>
            <span class="absolute flex items-center justify-center w-full h-full text-darkgreen transition-all duration-300 transform group-hover:translate-x-full ease">Program megtekintése</span>
            <span class="relative invisible">Program megtekintése</span>
        </a>
        <?php $gallery_page_url = get_permalink(get_page_by_title('Galéria')); ?>
        <a href="<?php echo esc_url($gallery_page_url); ?>" target="_blank" class="mt-8 relative inline-flex items-center justify-center px-5 py-2 overflow-hidden text-sm sm:text-base font-secondary font-medium text-darkgreen border-2 border-darkgreen rounded-full shadow-sm group transition duration-300 ease-out hover:shadow-md">
            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-darkgreen group-hover:translate-x-0 ease">
                <svg class="h-4 sm:h-6 w-4 sm:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
            </span>
            <span class="absolute flex items-center justify-center w-full h-full text-darkgreen transition-all duration-300 transform group-hover:translate-x-full ease">Galéria megtekintése</span>
            <span class="relative invisible">Galéria megtekintése</span>
        </a>
    </div>
</section>

<!-- Rest of Speakers -->
<section class="px-10 sm:px-24 py-10 sm:py-24 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase">Absztraktok</h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900">Ismerd meg további előadóinkat!</h3>
    </div>

    <div class="relative grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

    <?php
        $current_presentation_year = get_field('presentation_year');

        $args_rest_of_speakers = array(
            'post_type' => 'speaker',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
            'post__not_in' => array(get_the_ID()),
            'meta_query' => array(
                array(
                    'key' => 'presentation_year',
                    'value' => $current_presentation_year,
                    'compare' => '='
                )
            )
        );

        $rest_of_speakers_query = new WP_Query($args_rest_of_speakers);

        if ($rest_of_speakers_query->have_posts()) :
            while ($rest_of_speakers_query->have_posts()) : $rest_of_speakers_query->the_post();
        ?>

        <div class="relative col-span-1 bg-white shadow-md ring-1 ring-neutral-900/5 p-4 rounded-2xl hover:shadow-xl group cursor-pointer overflow-hidden transition-all duration-300">
            <span class="absolute top-4 z-0 h-16 sm:h-20 w-16 sm:w-20 rounded-full bg-darkgreen transition-all duration-300 group-hover:scale-[20]"></span>
            <div class="relative z-5">
                <span>
                    <?php $speaker_img = get_field('speaker_img'); ?>
                    <?php if ($speaker_img) : ?>
                        <img src="<?php echo esc_url($speaker_img['url']); ?>" alt="<?php echo esc_attr($speaker_img['alt']); ?>" class="grid h-16 sm:h-20 w-16 sm:w-20 place-items-center rounded-full object-cover bg-darkgreen transition-all duration-300 group-hover:bg-lightgreen">
                    <?php endif; ?> 
                </span>
                <div class="pt-3 sm:pt-5 text-lg sm:text-xl font-primary font-medium text-darkgreen transition-all duration-300 group-hover:text-white">
                    <h4><?php the_field('speaker_name') ?></h4>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-semibold text-zinc-900 leading-relaxed transition-all duration-300 group-hover:text-white line-clamp-1">
                    <p><?php the_field('presentation_title') ?></p>
                </div>
                <div class="pt-3 sm:pt-5 text-sm sm:text-base font-secondary font-medium text-darkgreen">
                    <a href="<?php the_permalink() ?>" class="clickable-parent flex flex-row items-center transition-all duration-300 group-hover:text-white">
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

<?php endwhile; ?>

</main>

<?php get_footer() ?>
