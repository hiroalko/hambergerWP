<div class="l-sidebar__overlay"></div>
<div class="l-sidebar">
    <span class="batsu"></span>
    <h2 class="p-sidebar__title">Menu</h2>
    <?php
    // 引数に指定したメニューの位置にメニューが設定してある場合。引数にはregister_nav_menus()で登録したスラッグ名を指定
    if (has_nav_menu('side')) {
        // メニューの設定を配列で指定
        $args = array(
            'menu_class' => 'menu',
            // 表示させるメニューを、register_nav_menus()で登録したスラッグ名で指定。初期値はなし
            'theme_location' => 'side',
            // ul要素を囲むかどうか。使えるタグはdiv、nav。囲まない場合はfalseを指定。初期値はdiv
            'container' => false,
            // メニューのリンク前に表示するテキスト。初期値はなし
            'link_before' => '<span>',
            // メニューのリンク後に表示するテキスト。初期値はなし
            'link_after' => '</span>',
            // メニュー項目を囲むタグ。囲むタグをなしにする場合でも、パラメータを指定し %3$s の記述が必須
            'items_wrap' => '<ul class="%2$s">%3$s</ul>'
        );
        // メニューを表示
        wp_nav_menu($args);
    };
    ?>
</div>
</div>
<!-- ↑最後のdivの閉じはflexの関係で崩れるので記載 -->