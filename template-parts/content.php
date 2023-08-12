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

<article
        id="post-<?php the_ID(); ?>" <?php post_class('w-full sm:w-2/4 lg:w-full p-0 sm:px-3 lg:px-0 mb-5 sm:mb-6 l:mb-9'); ?>>
    <div class="flex flex-col lg:flex-row bg-white rounded-2xl h-full lg:p-4">
        <img
                class="w-full lg:w-2/6 rounded-b-none lg:rounded-xl  object-cover max-h-44 lg:max-h-80"
                src="<?php echo $isofeaturedimage; ?>" alt=""/>
        <div class="w-full lg:w-4/6 p-4 l:pl-5">
            <span class="rounded-full bg-gray-200 px-3 py-1.5 text-xs font-medium text-gray-700 inline-block mb-2 hidden">
            <?php echo implode(',', array_column($the_cat, 'cat_name')); ?>
            </span>
            <h2 class="mb-2 lg:mb-3 line-clamp-3 text-2xl lg:text-4xl font-bold">

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
    </div>
</article>
