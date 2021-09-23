<?php get_header(); ?>
<main class="l-main">
    <div class="l-main__single__title">
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
<?php get_sidebar(); ?>
</div>
<!--headerからmain,sidberまでのdivのくくりの終了タグです-->
<?php get_footer(); ?>