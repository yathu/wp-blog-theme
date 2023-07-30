<?php get_header(); ?>

    <div class="container max-w-screen-xl mx-auto my-8 flex">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="w-2/3 px-4">
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) :
                    the_post();
                    ?>

                    <?php get_template_part('template-parts/content', get_post_format()); ?>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>

        <div class="w-1/3 px-4">
            <div class="bg-white rounded-2xl p-6">
                <h3>
                    Featured posts
                </h3>
            </div>
        </div>


    </div>

<?php
get_footer();
