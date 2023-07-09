<?php get_header(); ?>

<div class="container mx-auto my-8">

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-7xl mx-auto">
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 xl:grid-cols-4 lg:max-w-none">


                <?php if ( have_posts() ) : ?>
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>

                        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>


</div>

<?php
get_footer();
