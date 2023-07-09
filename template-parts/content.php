<?php
$isofeaturedimage = get_the_post_thumbnail_url();

if (empty($isofeaturedimage)) {
    $isofeaturedimage = 'https://www.bonbonentertainment.nl/wp-content/uploads/2021/06/no-image.jpg';
}
$the_cat = get_the_category();

if (empty($the_cat)) {
    $the_cat = [];
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col rounded-lg shadow-lg overflow-hidden'); ?> >
    <img class="h-48 w-full object-cover" src="<?php echo $isofeaturedimage; ?>" alt="">

    <div class="flex-1 bg-white p-4 pt-3 flex flex-col justify-between">
        <div class="flex-1">
            <a href="#" class="block mt-2">
                <?php the_title(sprintf('<h2 class="text-xl md:text-2xl font-bold leading-none mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

                <p class="text-sm font-medium text-indigo-600">
                    <a href="#"
                       class="hover:underline"> <?php echo implode(',', array_column($the_cat, 'cat_name')); ?> </a>

                </p>
                <p class="mt-3 text-base text-gray-500 line-clamp-6">
                    <?php
                    echo wp_strip_all_tags( wp_trim_words( get_the_content(), 40, '...' ) );
                    ?>
                </p>
            </a>
        </div>
    </div>
</article>


<article id="post-<?php the_ID(); ?>" <?php post_class('mb-12 hidden'); ?>>

    <header class="entry-header mb-4">
        <?php the_title(sprintf('<h2 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"
              class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
    </header>

    <?php if (is_search() || is_archive()) : ?>

        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>

    <?php else : ?>

        <div class="entry-content">
            <img src="<?php echo $isofeaturedimage; ?>" alt="">
            <?php


            /* translators: %s: Name of current post */
            //            the_content(
            //                sprintf(
            //                    __('Continue reading %s', 'tailpress'),
            //                    the_title('<span class="screen-reader-text bg-red-400">"', '"</span>', false)
            //                )
            //            );

            //            wp_link_pages(
            //                array(
            //                    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
            //                    'after' => '</div>',
            //                    'link_before' => '<span>',
            //                    'link_after' => '</span>',
            //                    'pagelink' => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
            //                    'separator' => '<span class="screen-reader-text">, </span>',
            //                )
            //            );
            ?>
        </div>

    <?php endif; ?>

</article>
