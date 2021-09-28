<?php get_header(); ?>
<main class="l-main">
    <?php
    $title_bg = "style=''";
    if (has_post_thumbnail()) {
        $img_url = wp_get_attachment_url(get_post_thumbnail_id());
        // アイキャッチ画像のurlを取得するテンプレタグ
        $title_bg = "style='background-image:url(" . $img_url . ");'";
    }
    ?>
    <div class="l-main__page__title" <?php echo $title_bg ?>>
        <h1><?php single_post_title(); ?></h1>
    </div>
    <div class="l-main__content__single p-main-content-single">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile;
        else : ?>
            <p>記事がありません</p>
        <?php endif; ?>
    </div>
</main>
</div>
<?php get_sidebar() ?>
</div>
<!--headerからmain,sidberまでのdivのくくりの終了タグです-->
<?php get_footer() ?>