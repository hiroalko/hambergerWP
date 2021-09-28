<?php get_header(); ?>
<main class="l-main">
    <div class="l-main__title">
        <h3 class="p-main__subtitle">
            <?php
            $cat = get_the_category();
            // $catという箱(変数）にget_the_category();を入れている作業
            // var_dump($cat);
            $cat = $cat[0];
            // 0番目を上書き保存
            ?>
            Menu:<br>
            <span><?php echo $cat->cat_name; ?></span>
            <!-- // 箱に入れた変数の名前を出力している -->
        </h3>
    </div>
    <!-- カテゴリーメニュー名を出力させる -->
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
                            <!-- <img src="/img/archive-main.png" alt="#"> -->
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="menu__content__text">
                            <h3><?php the_title(); ?></h3>
                            <h4>小見出しが入ります</h4>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>

                    </li>

            <?php
                endwhile;
            endif;
            ?>

        </ul>
        <?php wp_pagenavi(); ?>
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