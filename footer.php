<footer class="l-footer">
    <div class="l-footer__section">
        <?php
        $page = get_page_by_path('about');
        ?>
        <a href="<?php echo esc_url(get_permalink($page->ID)); ?>">ショップ情報</a>

        <?php
        $page = get_page_by_path('history');
        ?>
        <a href="<?php echo esc_url(get_permalink($page->ID)); ?>">ヒストリー</a>
    </div>
    <p>
        <small>Copyright : RaiseTech</small>
    </p>
</footer>
<?php wp_footer(); ?>

history