<?php get_header(); ?>

    <div class="container mx-auto my-5 flex flex-col lg:flex-row px-4 sm:px-2 max-w-screen-xl md:max-w-3xl lg:max-w-screen-xl">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="w-full lg:w-2/3 px-0 lg:px-3 xl:px-6 flex flex-wrap">
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) :
                    the_post();
                    ?>

                    <?php get_template_part('template-parts/content', get_post_format()); ?>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>

        <div class="w-full lg:w-1/3 sm:px-3 lg:px-3 xl:px-0 ">
            <div class="bg-white rounded-2xl p-6">

                <div id="sidebar-primary" class="sidebar">
                    <?php
                    if (function_exists('get_search_form')) {
                        get_search_form();

                    }
                    ?>

                    <?php
                    if (function_exists('wpp_get_mostpopular')) {
                        wpp_get_mostpopular(array(
                            'header' => 'Popular Posts',
                            'header_start' => '<h3 class="mb-5 font-bold text-2xl">',
                            'header_end' => '</h3>',
                            'limit' => 10,
                            'range' => 'last7days',
                            'order_by' => 'views',
                            'post_type' => 'post',
                            'excerpt_length' => 75,
                            'thumbnail_width' => 80,
                            'thumbnail_height' => 80,
                            'post_html' => '<li class="{current_class} flex flex-row">
<img src="{thumb_url}" alt="" class="wpp-thumbnail wpp_featured wpp_cached_thumb rounded w-20 h-20" />
<div class="wpp-item-data flex-1 font-medium">
<h3 class="mb-1">{title} </h3>
<p class="wpp-excerpt line-clamp-1 font-normal">{excerpt}</p>
</div></li>',
                        ));
                    }
                    ?>

                    <?php dynamic_sidebar('RightSidebar'); ?>
                </div>
            </div>
        </div>


    </div>

<?php
get_footer();
