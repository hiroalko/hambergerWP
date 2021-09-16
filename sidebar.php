<div class="l-sidebar__overlay"></div>
<div class="l-sidebar">
    <span class="batsu"></span>
    <h2 class="p-sidebar__title">Menu</h2>
    <?php
    $categories = get_categories();
    foreach ($categories as $category) :
    ?>
        <!-- ↑全てのカテゴリを取得 -->
        <p class="p-sidebar__category"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a></p>
        <!-- ↑リンク付きで取得 -->
        <?php
        $my_query = new WP_Query(
            array(
                'cat' => $category->term_id,
                'posts_per_page' => -1,
            )
        );
        if ($my_query->have_posts()) :
        ?>
            <ul class="p-sidebar__list">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <li class="p-sidebar__menu"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>投稿はありません。</p>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
</div>