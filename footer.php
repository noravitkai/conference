<!-- Scroll To Top Button -->
<button id="scroll-to-top-btn" class="fixed bottom-4 right-2.5 sm:bottom-6 sm:right-8 bg-lightgreen text-white hover:scale-110 hover:bg-zinc-900 transition duration-300 ease-in-out rounded-full shadow-md p-1 sm:p-2 hidden">
    <svg class="h-3 w-3 sm:w-4 sm:h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
    </svg>
</button>

<!-- Footer with Links -->
<footer class="bg-neutral-100 px-10 sm:px-24 py-4 sm:py-6">
    <?php
    $args = array(
        'post_type' => 'header-footer',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $headerfooter_query = new WP_Query($args);

    if ($headerfooter_query->have_posts()) :
        while ($headerfooter_query->have_posts()) : $headerfooter_query->the_post();
            $privacy_policy = get_field('privacy_policy');
            $facebook_link = get_field('facebook_link');
    ?>

        <nav id="footerLinks" class="mb-4 sm:mb-6 flex flex-row flex-wrap items-center gap-y-3 justify-center space-x-3 sm:space-x-6 divide-x divide-neutral-900/5 font-secondary text-center text-sm sm:text-base text-zinc-900">
            <a href="<?php echo esc_url(get_home_url()); ?>" class="hover:opacity-100 transition-opacity duration-300">Főoldal</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Rólunk'))); ?>" class="pl-3 sm:pl-8 hover:opacity-100 transition-opacity duration-300">Rólunk</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Előadók'))); ?>" class="pl-3 sm:pl-8 hover:opacity-100 transition-opacity duration-300">Előadók</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Kötetek'))); ?>" class="pl-3 sm:pl-8 hover:opacity-100 transition-opacity duration-300">Kötetek</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('GYIK'))); ?>" class="pl-3 sm:pl-8 hover:opacity-100 transition-opacity duration-300">GYIK</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Galéria'))); ?>" class="pl-3 sm:pl-8 hover:opacity-100 transition-opacity duration-300">Galéria</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Impresszum'))); ?>" class="pl-3 sm:pl-8">Impresszum</a>

            <?php if ($privacy_policy) : ?>
                <a href="<?php echo esc_url($privacy_policy['url']); ?>" class="pl-3 sm:pl-8" target="_blank">Adatkezelési tájékoztató</a>
            <?php endif; ?>

            <?php if ($facebook_link) : ?>
                <a href="<?php echo esc_url($facebook_link); ?>" class="pl-3 sm:pl-8" target="_blank">Facebook</a>
            <?php endif; ?>
        </nav>
        <p class="text-center font-secondary text-sm sm:text-base text-lightgreen">&copy; <?php echo esc_html(date('Y')); ?>. Fiatalok Konferenciája. Minden jog fenntartva.</p>

    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Hiba a betöltéskor.';
    endif;
    ?>
</footer>

<script>
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
});
</script>

<?php wp_footer() ?>
</body>
</html>