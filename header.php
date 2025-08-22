<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    // トップページ（フロントページ）の場合
    if (is_front_page()): ?>
        <title>きたむらミュージックスクール | 「音楽で生きる」を叶える ミュージックスクール</title>
        <meta name="description" content="「音楽で生きる」を叶える ミュージックスクール「きたむらミュージックスクール」の公式ホームページです。">

    <?php
    // 固定ページの場合
    elseif (is_page()): ?>
        <title><?php echo get_the_title(); ?> | きたむらミュージックスクール</title>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの<?php echo get_the_title(); ?>ページです。">

    <?php
    // 投稿ページの場合
    elseif (is_single()): ?>
        <title><?php echo get_the_title(); ?> | きたむらミュージックスクール</title>

    <?php
    // 投稿に「抜粋」があるかチェック
    if (has_excerpt()) {
        // 抜粋がある場合はそれを説明文に使う
        $excerpt = get_the_excerpt();
    } else {
        // 抜粋がない場合は本文から120文字を取り出して説明文に使う
        $content = get_the_content();
        $content = strip_tags($content); // HTMLタグを除去
        $content = str_replace(["\r\n", "\r", "\n", "&nbsp;"], '', $content); // 改行や空白を除去
        $excerpt = mb_substr($content, 0, 120, "UTF-8"); // 最初の120文字を取得
    }
    ?>
    <meta name="description" content="<?php echo esc_attr($excerpt); ?>">

    <?php
    // アーカイブページ（カテゴリ・タグ・カスタム投稿タイプ一覧など）の場合
    elseif (is_archive()): ?>
    <?php
    // 現在のページ番号を取得（1ページ目は「1」になる）
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

    // カテゴリーアーカイブ
    if (is_category()) {
      $term_name = single_cat_title('', false);
    }
    // カスタムタクソノミー
    elseif (is_tax()) {
      $term_name = single_term_title('', false);
    }
    // カスタム投稿タイプのアーカイブ
    elseif (is_post_type_archive()) {
      $post_type_obj = get_post_type_object(get_post_type());
      $term_name = $post_type_obj ? $post_type_obj->labels->name : '一覧';
    }
    // その他のアーカイブ
    else {
      $term_name = '一覧';
    }

    // 2ページ目以降かどうかでタイトルを変える
    if ($paged > 1) {
        $title = $term_name . '一覧ページ ' . $paged . 'ページ目';
        $description = 'きたむらミュージックスクール公式ホームページの' . $term_name . '一覧ページ ' . $paged . 'ページ目です。';
    } else {
        $title = $term_name . '一覧ページ';
        $description = 'きたむらミュージックスクール公式ホームページの' . $term_name . '一覧ページです。';
    }
    ?>
    <title><?php echo esc_html($title); ?> | きたむらミュージックスクール</title>
    <meta name="description" content="<?php echo esc_attr($description); ?>">

    <?php
    // 検索結果ページの場合
    elseif (is_search()): ?>
        <title>検索結果 | きたむらミュージックスクール</title>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの検索結果ページです。">

    <?php
    // 404ページ
    elseif (is_404()): ?>
        <title>お探しのページはございません | きたむらミュージックスクール</title>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの404ページです。">

    <?php
    // それ以外のページ
    else: ?>
        <title><?php echo get_the_title(); ?> | きたむらミュージックスクール</title>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの<?php echo get_the_title(); ?>ページです。">
    <?php endif; ?>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" id="favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/common/apple-touch-icon-180x180.png">

    <?php wp_head(); ?>
</head>
    <body style="display: none;">
		<div id="container">
			<header class="header">
                <div class="header-content">
                    <?php if ( is_front_page() || is_search() ) : ?>
                        <h1 class="header__title">
                    <?php else : ?>
                        <div class="header__title">
                    <?php endif; ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__title-link">
                            きたむら<br class="sp_none"><span>ミュージックスクール</span>
                        </a>
                    <?php if ( is_front_page() || is_search() ) : ?>
                        </h1>
                    <?php else : ?>
                        </div>
                    <?php endif; ?>
                    <div class="header__nav sp_none">
                        <nav>
                          
                            <?php
                            wp_nav_menu(
                                array(
                                'menu_class'     => 'header__nav-ul',
                                'theme_location' => 'primary',
                                'container'      => false,
                                )
                            );
                            ?>
                            
                        </nav>
                    </div>    
                    <!-- hamburger menu -->
                    <button id="hamburger-block" class="hamburger hamburger-trigger pc_none">
                        <span class="hamburger-line"></span>
                    </button>
                      
                    <div class="hamburger-menu pc_none">
                        <nav>
                            <ul>
                                <li><a href="<?php echo home_url('/plan'); ?>">料金</a></li>
                                <li><a href="<?php echo home_url('/blog'); ?>">ブログ</a></li>
                                <li><a href="<?php echo home_url('/result'); ?>">卒業実績</a></li>
                            </ul>
                        </nav>
                    </div>
    
                    <div id="hamburger-bg" class="hamburger-bg hamburger-trigger pc_none"></div>
                </div>
                

            </header>