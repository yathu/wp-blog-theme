<form role="search" method="get" id="search-form" action="<?php echo esc_url(home_url('/')); ?>"
      class="input-group mb-6">
        <input type="search" class="w-full px-3 py-3 border border-gray-300 shadow-sm placeholder-gray-400 rounded-md outline-0" placeholder="Search" aria-label="search nico" name="s"
               id="search-input" value="<?php echo esc_attr(get_search_query()); ?>">

    <input type="hidden" value="post" name="post_type" id="post_type" />

</form>