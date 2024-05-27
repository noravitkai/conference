<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.typekit.net/xxxxxxx.css">
</head>
<body>

<header class="bg-neutral-100 inset-x-0 top-0 z-50 px-10 sm:px-24 py-4 sm:py-6 border-b border-neutral-900/5">
    <?php
    $args = array(
        'post_type' => 'header-footer',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $headerfooter_query = new WP_Query($args);

    if ($headerfooter_query->have_posts()) :
        while ($headerfooter_query->have_posts()) : $headerfooter_query->the_post();
    ?>
    <nav class="flex justify-between items-center">
        <div class="flex flex-1 items-center justify-start">
            <?php $logo = get_field('logo'); ?>
            <?php if ($logo) : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="h-6 sm:h-8 w-auto">
                </a>
            <?php endif; ?>
            <p class="hidden md:flex flex-1 items-center justify-center font-primary font-medium text-sm sm:text-base text-center text-zinc-900"><?php the_field('conf-info-banner') ?></p>
        </div>
        <div class="flex items-center justify-end">
            <button id="menuToggleLarge" class="lg:flex hidden justify-center">
                <div class="space-y-2">
                    <span class="block h-1 w-10 origin-center bg-zinc-900 transition-transform ease-in-out"></span>
                    <span class="block h-1 w-8 origin-center bg-darkgreen transition-transform ease-in-out"></span>
                </div>
            </button>
            <button id="menuToggleSmall" class="flex lg:hidden justify-center">
                <div class="space-y-1.5">
                    <span class="block h-0.5 w-8 origin-center bg-zinc-900 transition-transform ease-in-out"></span>
                    <span class="block h-0.5 w-6 origin-center bg-darkgreen transition-transform ease-in-out"></span>
                </div>
            </button>
        </div>
    </nav>
    <div id="menuOverlay" class="hidden fixed inset-0 bg-zinc-900 bg-opacity-90 z-10 items-center justify-center">
        <div class="flex flex-col space-y-4 font-secondary text-center text-2xl sm:text-3xl text-neutral-50">
            <a href="<?php echo get_home_url(); ?>" class="hover:opacity-100 transition-opacity duration-300">Főoldal</a>
            <a href="<?php echo get_permalink(get_page_by_title('Rólunk')); ?>" class="hover:opacity-100 transition-opacity duration-300">Rólunk</a>
            <a href="<?php echo get_permalink(get_page_by_title('Előadók')); ?>" class="hover:opacity-100 transition-opacity duration-300">Előadók</a>
            <a href="<?php echo get_permalink(get_page_by_title('Kötetek')); ?>" class="hover:opacity-100 transition-opacity duration-300">Kötetek</a>
            <a href="<?php echo get_permalink(get_page_by_title('GYIK')); ?>" class="hover:opacity-100 transition-opacity duration-300">GYIK</a>
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
    const body = document.body;
    const menuToggleLarge = document.getElementById("menuToggleLarge");
    const menuToggleSmall = document.getElementById("menuToggleSmall");
    const menuOverlay = document.getElementById("menuOverlay");
    const menuLinks = document.querySelectorAll("#menuOverlay a");

    function toggleMenu(menuButton) {
        const isOpen = menuOverlay.classList.toggle("hidden");
        menuOverlay.classList.toggle("flex");
        body.classList.toggle('overflow-hidden', !isOpen);
        menuButton.style.zIndex = isOpen ? "20" : "60";

        const lines = menuButton.querySelectorAll("span");
        const isSmall = menuButton === menuToggleSmall;
        updateMenuIcon(lines, isOpen, isSmall);
    }

    function updateMenuIcon(lines, isOpen, isSmall) {
        if (!isOpen) {
            lines[0].classList.add("rotate-45");
            lines[0].classList.replace("bg-zinc-900", "bg-neutral-50");
            lines[1].classList.add("-rotate-45");
            lines[1].classList.replace("bg-darkgreen", "bg-neutral-50");

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
            lines[1].classList.replace("bg-neutral-50", "bg-darkgreen");
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

    menuLinks.forEach(link => {
        link.addEventListener("mouseenter", () => {
            menuLinks.forEach(lnk => lnk !== link && lnk.classList.add("opacity-40"));
        });

        link.addEventListener("mouseleave", () => {
            menuLinks.forEach(lnk => lnk.classList.remove("opacity-40"));
        });
    });

    menuToggleLarge.addEventListener("click", () => toggleMenu(menuToggleLarge));
    menuToggleSmall.addEventListener("click", () => toggleMenu(menuToggleSmall));
});
</script>