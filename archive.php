<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/scss/reset.css">
    <link rel="stylesheet" href="/scss/style.css">
    <title>hamburgersite</title>
</head>

<body>
    <div class="l-wrapper">
        <div class="l-description">
            <div class="header">
                <header>
                    <div class="l-header">
                        <div class="p-header">
                            <div class="p-header__title">
                                <a href="/front.html"></a>
                                    <h1>Hamburger</h1>
                                </a>
                            </div>
                            <h2 class="p-header__sp-title">Menu</h2>
                            <form class="p-header__form">
                                <input type="search" name="search" class="p-header__search" placeholder="&#xf002;">
                                <input type="submit" name="submit" class="p-header__submit" value="検索">
                            </form>
                        </div>
                    </div>
                </header>
            </div>
            <main class="l-main">
                <div class="l-main__title">
                    <h3 class="p-main__subtitle">
                        Menu:<br>
                        <span>チーズバーガー</span>
                    </h3>
                </div>
                <div class="l-main__content">
                    <div class="l-main__content__title">小見出しが入ります</div>
                    <p class="l-main__content__text"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <ul class="l-main__content--menu">
                        <li class="menu__content">
                            <div class="menu__content__img">
                                <img src="/img/archive-main.png" alt="#">
                            </div>
                            <div class="menu__content__text">
                                <h3>チーズバーガー</h3>
                                <h4>小見出しが入ります</h4>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a href="#">詳しく見る</a>
                            </div>
                        </li>
                        <li class="menu__content">
                            <div class="menu__content__img">
                                <img src="/img/archive-main.png" alt="#">
                            </div>
                            <div class="menu__content__text">
                                <h3>ダブルチーズバーガー</h3>
                                <h4>小見出しが入ります</h4>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a href="#">詳しく見る</a>
                            </div>
                        </li>
                        <li class="menu__content">
                            <div class="menu__content__img">
                                <img src="/img/archive-main.png" alt="#">
                            </div>
                            <div class="menu__content__text">
                                <h3>スペシャルチーズバーガー</h3>
                                <h4>小見出しが入ります</h4>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a href="#">詳しく見る</a>
                            </div>
                        </li>
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
        <div class="l-sidebar__overlay"></div>
        <div class="l-sidebar">
            <span class="batsu"></span>
            <h2 class="p-sidebar__title">Menu</h2>
            <p class="p-sidebar__category"><a href="#">ハンバーガー</a></p>
            <ul>
                <li class="p-sidebar__menu l-sidebr__menu__menu"><a href="#">ハンバーガー</a></li>
                <li class="p-sidebar__menu"><a href="#">チーズバーガー</a></li>
                <li class="p-sidebar__menu"><a href="#">テリヤキバーガー</a></li>
                <li class="p-sidebar__menu"><a href="#">アボガドバーガー</a></li>
                <li class="p-sidebar__menu"><a href="#">フィッシュバーガー</a></li>
                <li class="p-sidebar__menu"><a href="#">ベーコンバーガー</a></li>
                <li class="p-sidebar__menu"><a href="#">チキンバーガー</a></li>
            </ul>
            <p class="p-sidebar__category"><a href="#">サイド</a></p>

            <ul>
                <li class="p-sidebar__menu"><a href="#">ポテト</a></li>
                <li class="p-sidebar__menu"><a href="#">サラダ</a></li>
                <li class="p-sidebar__menu"><a href="#">ナゲット</a></li>
                <li class="p-sidebar__menu"><a href="#">コーン</a></li>
            </ul>
            <p class="p-sidebar__category"><a href="#">ドリンク</a></p>
            <ul>
                <li class="p-sidebar__menu"><a href="#">コーラ</a></li>
                <li class="p-sidebar__menu"><a href="#">ファンタ</a></li>
                <li class="p-sidebar__menu"><a href="#">オレンジ</a></li>
                <li class="p-sidebar__menu"><a href="#">アップル</a></li>
                <li class="p-sidebar__menu"><a href="#">紅茶（ice/hot)</a></li>
                <li class="p-sidebar__menu"><a href="#">コーヒー(ice/hot)</a></li>
            </ul>
        </div>
    </div>
    </div>
    <footer class="l-footer">
        <div class="l-footer__section">
            <a href="/html/page.html">ショップ情報</a>
            <a href="/html/page.html">ヒストリー</a>
        </div>
        <p> 
            <small>Copyright : RaiseTech</small>
        </p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/script.js"></script>
    


</body>

</html>