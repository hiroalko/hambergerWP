<?php get_header(); ?>
<main class="l-main">
    <div class="l-main__title">
        <h3 class="p-main__subtitle">
            Search:<br>
            <span><?php the_search_query(); ?></span>
        </h3>

    </div>
    <div class="l-main__content">
        <div class="l-main__content__title">小見出しが入ります</div>
        <p class="l-main__content__text"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <ul class="l-main__content--menu">
            <?php
            if (have_posts()) :
                // もし投稿があれば
                while (have_posts()) : the_post();
                    // 繰り返しますよ the_postで投稿を出している
            ?>
                    <li class="menu__content">
                        <div class="menu__content__img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="menu__content__text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>
                    </li>

            <?php
                endwhile;
            endif;
            ?>


        </ul>

        <div class="p-pagenation__pc">
            <ul>
                <li class="pre">&lt;&lt;前へ</li>
                <li class="pre1">次へ&gt;&gt;</li>
            </ul>
        </div>
    </div>
</main>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>