<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.typekit.net/ynq4pzk.css">
</head>
<body>

<header class="bg-neutral-50 absolute inset-x-0 top-0 z-50 px-10 sm:px-24 py-4 sm:py-6">

    <?php
    $args = array(
        'post_type' => 'navbar',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $navbar_query = new WP_Query($args);

    if ($navbar_query->have_posts()) :
        while ($navbar_query->have_posts()) : $navbar_query->the_post();
    ?>

    <nav class="flex">
        <div class="flex flex-0.5 sm:flex-1 items-center justify-start">
            <a href="<?php echo esc_url(get_field('facebook_link')); ?>" class="text-lightgreen hover:text-zinc-900 hover:scale-110 ease-in-out duration-300" target="_blank">
                <svg class="sm:w-10 w-8 sm:h-10 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        <p class="flex flex-1 items-center justify-center font-primary font-medium text-sm sm:text-base text-center text-zinc-900"><?php the_field('conf-info-banner') ?></p>
        <div class="flex flex-0.5 sm:flex-1 items-center justify-end">
            <button id="menuToggleLarge" class="lg:flex hidden justify-center">
                <div class="space-y-2 cursor-pointer">
                    <span class="block h-1 w-10 origin-center bg-zinc-900 transition-transform ease-in-out"></span>
                    <span class="block h-1 w-8 origin-center bg-lightgreen transition-transform ease-in-out"></span>
                </div>
            </button>
            <button id="menuToggleSmall" class="flex lg:hidden justify-center">
                <div class="space-y-1.5 cursor-pointer">
                    <span class="block h-0.5 w-8 origin-center bg-zinc-900 transition-transform ease-in-out"></span>
                    <span class="block h-0.5 w-6 origin-center bg-lightgreen transition-transform ease-in-out"></span>
                </div>
            </button>
        </div>
    </nav>
    <div id="menuOverlay" class="hidden fixed inset-0 bg-zinc-900 bg-opacity-80 z-10 items-center justify-center">
        <div class="flex flex-col space-y-4 font-secondary text-center text-2xl sm:text-3xl text-neutral-50">
            <a href="<?php echo get_home_url(); ?>" class="hover:opacity-100 transition-opacity duration-300">Főoldal</a>
            <a href="<?php echo get_permalink(get_page_by_title('Kötetek')); ?>" class="hover:opacity-100 transition-opacity duration-300">Kötetek</a>
            <a href="<?php echo get_permalink(get_page_by_title('GYIK')); ?>" class="hover:opacity-100 transition-opacity duration-300">GYIK</a>
            <a href="<?php echo get_permalink(get_page_by_title('Hírek')); ?>" class="hover:opacity-100 transition-opacity duration-300">Hírek</a>
            <a href="<?php echo get_permalink(get_page_by_title('Galéria')); ?>" class="hover:opacity-100 transition-opacity duration-300">Galéria</a>
        </div>
    </div>

    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Hiba a betöltéskor.';
    endif;
    ?>

</header>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const menuToggleLarge = document.getElementById("menuToggleLarge");
    const menuToggleSmall = document.getElementById("menuToggleSmall");
    const menuOverlay = document.getElementById("menuOverlay");
    const menuLinks = document.querySelectorAll("#menuOverlay a");

    function toggleMenu(menuButton) {
        const isOpen = menuOverlay.classList.toggle("hidden");
        menuOverlay.classList.toggle("flex");
        menuButton.style.zIndex = isOpen ? "20" : "60";

        const lines = menuButton.querySelectorAll("span");
        const isSmall = menuButton === menuToggleSmall;
        if (!isOpen) {
        lines[0].classList.add("rotate-45");
        lines[0].classList.replace("bg-zinc-900", "bg-neutral-50");
        lines[1].classList.add("-rotate-45");
        lines[1].classList.replace("bg-lightgreen", "bg-neutral-50");

        if (isSmall) {
            lines[0].classList.add("translate-y-1");
            lines[1].classList.add("-translate-y-1");
            lines[1].style.width = "2rem";
        } else {
            lines[0].classList.add("translate-y-1.5");
            lines[1].classList.add("-translate-y-1.5");
            lines[1].style.width = "2.5rem";
        }
        } else {
        lines[0].classList.remove("rotate-45");
        lines[0].classList.replace("bg-neutral-50", "bg-zinc-900");
        lines[1].classList.remove("-rotate-45");
        lines[1].classList.replace("bg-neutral-50", "bg-lightgreen");
        lines[1].style.width = "";

        if (isSmall) {
            lines[0].classList.remove("translate-y-1");
            lines[1].classList.remove("-translate-y-1");
        } else {
            lines[0].classList.remove("translate-y-1.5");
            lines[1].classList.remove("-translate-y-1.5");
        }
        }
    }

    menuToggleLarge.addEventListener("click", () => toggleMenu(menuToggleLarge));
    menuToggleSmall.addEventListener("click", () => toggleMenu(menuToggleSmall));

    menuLinks.forEach((link) => {
        link.addEventListener("mouseenter", () => {
        menuLinks.forEach(
            (lnk) => lnk !== link && lnk.classList.add("opacity-50")
        );
        });

        link.addEventListener("mouseleave", () => {
        menuLinks.forEach((lnk) => lnk.classList.remove("opacity-50"));
        });
    });
    });
</script>


