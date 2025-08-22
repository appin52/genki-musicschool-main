<form role="search" method="get" class="blog-details-side__search-box" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="blog-details-side__search__box-input" placeholder="検索ワード" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="blog-details-side__search__box-image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/blog-details/logo-blog-details_search.svg" alt="検索">
    </button>
</form>