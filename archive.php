<?php get_header(); ?>
<main class="l-main">
    <div class="l-main__title">
        <h3 class="p-main__subtitle">
            Menu:<br>
            <?php
            $cat = get_the_category();
            $cat = $cat[0];
            echo $cat->cat_name;
            ?>
            <!-- カテゴリーを出力させる↑ -->
        </h3>
    </div>
    <!-- カテゴリーメニュー名を出力させる -->
    <div class="l-main__content">
        <div class="l-main__content__title">小見出しが入ります</div>
        <p class="l-main__content__text"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <ul class="l-main__content--menu">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>

                    <li class="menu__content">
                        <div class="menu__content__img">
                            <img src="/img/archive-main.png" alt="#">
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
        <div class="p-pagenation">
            <ul>
                <li>page 1/10</li>
                <li class="this">&lt;&lt;</li>
                <li><a href="/html/archive.html">1</a></li>
                <li><a href="/html/archive.html">2</a></li>
                <li><a href="/html/archive.html">3</a></li>
                <li><a href="/html/archive.html">4</a></li>
                <li><a href="/html/archive.html">5</a></li>
                <li><a href="/html/archive.html">6</a></li>
                <li><a href="/html/archive.html">7</a></li>
                <li><a href="/html/archive.html">8</a></li>
                <li><a href="/html/archive.html">9</a></li>
                <li class="this">&gt;&gt;</li>
            </ul>
        </div>
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