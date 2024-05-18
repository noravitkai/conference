<?php
/*
Template Name: FAQ Page
*/
?>

<?php get_header() ?>

<main>

<!-- FAQ -->
<section class="px-10 sm:px-24 py-10 sm:py-24 bg-neutral-100 border-b border-neutral-900/5">
    <div class="mb-10 sm:mb-12 text-center">
        <h2 class="text-sm sm:text-base font-primary font-medium text-darkgreen uppercase"><?php the_field('faq_section_heading') ?></h2>
        <h3 class="mt-2 text-3xl sm:text-5xl font-secondary font-bold text-zinc-900"><?php the_field('faq_section_subheading') ?></h3>
    </div>
    
    <div class="divide-y divide-gray-900/10">

    <?php
    $args = [
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ];
    $faq_query = new WP_Query($args);
    $first = true;

    if ($faq_query->have_posts()) :
        while ($faq_query->have_posts()) : $faq_query->the_post();
    ?>

        <dl class="mt-6 space-y-6 divide-y divide-neutral-900/5">
            <div class="<?php echo $first ? '' : 'pt-6'; ?>">
                <dt>
                    <!-- Expand/collapse question button -->
                    <button type="button" class="flex w-full items-center justify-between" aria-controls="faq-0" aria-expanded="false">
                        <span class="text-base sm:text-lg font-primary font-medium text-darkgreen text-left leading-relaxed"><?php the_field('faq_question') ?></span>
                        <span class="ml-6 flex h-7 items-center">
                            <!-- Icon when question is collapsed -->
                            <svg class="h-6 w-6 text-darkgreen" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                            <!-- Icon when question is expanded -->
                            <svg class="hidden h-6 w-6 text-darkgreen" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                            </svg>
                        </span>
                    </button>
                </dt>
                <dd class="mt-2 pr-12 hidden" id="faq-0">
                    <p class="text-sm sm:text-base font-secondary font-medium text-zinc-900 leading-relaxed"><?php the_field('faq_answer') ?></p>
                </dd>
            </div>
        </dl>

    <?php
        $first = false;
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
document.addEventListener('DOMContentLoaded', function() {
    var faqSection = document.querySelector('main section');

    faqSection.addEventListener('click', function(event) {
        var button = event.target.closest('button');
        if (!button) return;

        var isExpanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !isExpanded);

        var icons = button.querySelectorAll('svg');
        icons.forEach(icon => {
            icon.classList.toggle('hidden');
        });

        var answer = button.parentNode.nextElementSibling;
        if (answer.style.display === 'none' || answer.classList.contains('hidden')) {
            answer.style.display = 'block';
            answer.classList.remove('hidden');
        } else {
            answer.style.display = 'none';
            answer.classList.add('hidden');
        }
    });
});
</script>


