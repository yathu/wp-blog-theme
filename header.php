<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
    </style>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-slate-100 text-gray-900 antialiased'); ?>>

<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">

    <?php do_action('tailpress_header'); ?>

    <header class="bg-white shadow">

        <div class="mx-auto container max-w-screen-xl">
            <div class="lg:flex lg:justify-between lg:items-center py-6">
                <div class="flex justify-between items-center">
                    <div>
                        <?php if (has_custom_logo()) { ?>
                            <?php the_custom_logo(); ?>
                        <?php } else { ?>
                            <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                                <?php echo get_bloginfo('name'); ?>
                            </a>

                            <p class="text-sm font-light text-gray-600">
                                <?php echo get_bloginfo('description'); ?>
                            </p>

                        <?php } ?>
                    </div>

                    <div class="lg:hidden">
                        <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                            <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                    <g id="icon-shape">
                                        <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                              id="Combined-Shape"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>

                <?php
                wp_nav_menu(
                    array(
                        'container_id' => 'primary-menu',
                        'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                        'menu_class' => 'lg:flex lg:-mx-4',
                        'theme_location' => 'primary',
                        'li_class' => 'lg:mx-4',
                        'li_class_0' => 'lg:relative group uppercase font-semibold text-sm',
                        'li_class_1' => 'lg:py-1 text-sm font-medium',
                        'submenu_class' => 'hidden group-hover:block  lg:absolute lg:left-1/2 lg:rounded lg:w-48 lg:max-w-3xl lg:bg-white shadow lg:transform lg:-translate-x-1/2 lg:shadow-behind px-6 pt-2 lg:leading-loose',
                        'fallback_cb' => false,

                    )
                );
                ?>
            </div>
        </div>
    </header>

    <!--    <div class="container">-->
    <!--        --><?php
    //        wp_nav_menu(
    //            array(
    //                'container_id' => 'primary-menu',
    //                'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
    //                'menu_class' => 'lg:flex lg:-mx-4',
    //                'theme_location' => 'primary',
    //                'li_class_0' => 'lg:mx-4 lg:relative group',
    //                'li_class_1' => 'hover:italic',
    //                'submenu_class' => 'hidden group-hover:block  lg:absolute lg:left-1/2 lg:rounded lg:w-48 lg:max-w-3xl lg:bg-white lg:ring-1 lg:transform lg:-translate-x-1/2 lg:shadow-behind px-6 pt-2 lg:leading-loose',
    //                'fallback_cb' => false,));
    //
    //        ?>
    <!--    </div>-->

    <div id="content" class="site-content flex-grow">

        <?php do_action('tailpress_content_start'); ?>

        <main>
