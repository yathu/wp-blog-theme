<?php get_header(); ?>

    <div class="container max-w-screen-xl mx-auto my-5 flex flex-col lg:flex-row px-4 sm:px-2 md:max-w-3xl lg:max-w-screen-xl">

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
                    <?php dynamic_sidebar('RightSidebar'); ?>
                </div>
            </div>
        </div>


    </div>

<?php
get_footer();
