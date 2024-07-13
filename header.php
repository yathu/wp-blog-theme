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

    <header class="bg-white">
        <div class="mx-auto container max-w-screen-xl">
            <div class="lg:flex lg:justify-between lg:items-center lg:px-4 my-3 lg:my-3">
                <div class="flex justify-between items-center">
                    <div>
                        <?php if (has_custom_logo()) { ?>
                            <?php the_custom_logo(); ?>
                        <?php } else { ?>
                            <a href="<?php echo get_bloginfo('url'); ?>" class="font-bold tracking-widest text-gray-900 uppercase">
                                <?php echo get_bloginfo('name'); ?>
                            </a>

                         <!--   <p class="text-sm font-light text-gray-600">
                                <?php echo get_bloginfo('description'); ?>
                            </p>
                            !-->

                        <?php } ?>
                    </div>

                    <div class="lg:hidden">
                        <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                            <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <?php
                wp_nav_menu(
                    array(
                        'container_id' => 'primary-menu', 
                        'container_class' => 'hidden mt-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block lg:mr-4 xl:mr-0',
                        'menu_class' => 'lg:flex lg:-mx-4 text-gray-900',
                        'theme_location' => 'primary',
                        'li_class' => '',
                        'li_class_0' => 'lg:relative group font-semibold text-sm py-2 px-4 lg:hover:bg-gray-200 hover:rounded-lg',
                        'li_class_1' => 'lg:px-0 py-2 text-sm font-semibold lg:text-center lg:hover:bg-gray-200 hover:rounded-lg',
                        'submenu_class' => 'hidden group-hover:block lg:absolute lg:w-48 lg:max-w-3xl bg-white lg:shadow-2xl px-3 pt-2 pb-2 lg:leading-loose lg:right-0 top-full rounded-lg lg:rounded-b-lg lg:mt-0', 
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
