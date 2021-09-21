<?php get_header(); ?>
<main class="l-main">
    <div class="l-main__single__title">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="l-main__content__single">
        <div class="l-main__content__single">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile;
            else : ?>
                <p>記事がありません</p>
            <?php endif; ?>
        </div>
        <!-- <div class="p-article">
            <h2 class="p-article__title">見出し</h2>
            <p>pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。
            </p>
            <h3 class="p-article__title__top">見出しh3</h3>
            <h4>見出しh4</h4>
            <h4>見出しh3</h4>
            <h4>見出しh4</h4>
            <h4>見出しh5</h4>
            <h4>見出しh6</h4>
        </div>
        <div class="p-article__blockquote">
            <blockquote>
                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                <p>出典元:<a href="#">〇〇〇〇〇〇</a></p>
            </blockquote>
        </div>

        <div class="p-picture">
            <img src="/img/single-main.png" alt="#">

            <ul>
                <li class="p-picture__list">
                    <p class="p-picture__column"><img src="/img/single-sub-main.png" alt="#"></p>
                    <p class="p-picture__txt">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </li>
                <li class="p-picture__list__light">
                    <p class="p-picture__column"><img src="/img/single-sub-main.png" alt="#"></p>
                    <p class="p-picture__txt2">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </li>
            </ul>
            <div class="p-picture__column__bottom">
                <img src="/img/single-sub-main.png" alt="#">

            </div>
        </div>
        <div class="p-picture__title">
            <img src="/img/single-sub-main.png" alt="#" class="p-picture__title__item">
            <img src="/img/single-sub-main.png" alt="#" class="p-picture__title__item">
            <img src="/img/single-sub-main.png" alt="#" class="p-picture__title__item">
            <img src="/img/single-sub-main.png" alt="#" class="p-picture__title__item">
            <img src="/img/single-sub-main.png" alt="#" class="p-picture__title__item">
            <img src="/img/single-sub-main.png" alt="#" class="p-picture__title__item">
            <img src="/img/single-sub-main.png" alt="#" class="p-picture__title__item">
            <img src="/img/single-sub-main.png" alt="#" class="p-picture__title__item">
            <img src="/img/single-sub-main.png" alt="#" class="p-picture__title__item">


        </div>
        <div class="p-article__list">
            <ol>
                <li class="p-article__list1">リストリストリスト</li>
                <li class="p-article__list1">リストリストリスト</li>
                <ol>
                    <li class="p-article__list2">リスト2リスト2リスト</li>
                    <li class="p-article__list2">リスト2リスト2リスト</li>
                </ol>
                <li class="p-article__list3">リストリストリスト</li>
                <li class="p-article__list3">リストリストリスト</li>
            </ol>
            <ul>
                <li class="p-article__list1">リストリストリスト</li>
                <li class="p-article__list1">リストリストリスト</li>
            </ul>
            <ul>
                <li class="p-article__list2">リスト2リスト2リスト</li>
                <li class="p-article__list2">リスト2リスト2リスト</li>
            </ul>
            <li class="p-article__list3">リストリストリスト</li>
            <li class="p-article__list3">リストリストリスト</li>
        </div>
        <pre class="c-site__code">
<code>&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;</code>
                    </pre>
        <div class="c-site__table"> -->
        <!-- クラス名を思いつかない -->
        <!-- <table>
                <tr>
                    <th class="table__th">テーブル</th>
                    <th class="table__th1">テーブル</th>
                    <!-- なぜ文字が真ん中による？？ -->
        <!-- </tr>
                <tr>
                    <td class="table__td">テーブル</td>
                    <td class="table__td1">テーブル</td>
                </tr>
                <tr>
                    <td class="table__td2">テーブル</td>
                    <td class="table__td3">テーブル</td>
                </tr>
            </table>
        </div>
        <div class="c-site__btn">
            <button><a href="#">ボタン</a></button>
        </div>

        <p class="c-site__bold">boldboldboldboldboldbold</p>
    </div>
</main> --> -->
    </div>
    <?php get_sidebar(); ?>
    </div>
    <!--headerからmain,sidberまでのdivのくくりの終了タグです-->
    <?php get_footer(); ?>