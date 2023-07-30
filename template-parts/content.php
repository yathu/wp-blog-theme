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

<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-row bg-white p-6 rounded-2xl mb-9'); ?>>
    <img class="w-2/6 rounded-2xl object-cover" src="<?php echo $isofeaturedimage; ?>" alt=""/>
    <div class="w-4/6 pl-5">
            <span class="rounded-full bg-gray-200 px-3 py-1.5 text-xs font-medium text-gray-700 inline-block mb-2">
            <?php echo implode(',', array_column($the_cat, 'cat_name')); ?>
            </span>
        <h2 class="mb-3 line-clamp-3 text-4xl font-bold leading-10">

            <a href="<?php esc_url(the_permalink()) ?>"> <?php the_title() ?></a>
        </h2>
        <p class="line-clamp-3 leading-7">
            <?php
            echo wp_strip_all_tags(wp_trim_words(get_the_content(), 40, '...'));
            ?>
        </p>
        <div class="mt-5 flex items-center">
            <svg class="h-5 w-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 20 20">
                <path fill="currentColor"
                      d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/>
            </svg>
            <span class="ml-1 text-sm text-gray-400">May 2, 2022</span>
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
