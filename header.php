<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/style.css">
    <title>hamburgersite</title>
    <?php wp_head(); ?>
    <!-- // WordPressのテーマに含める関数。 -->
</head>

<body <?php body_class(); ?>>
    <div class="l-wrapper">
        <div class="l-description">
            <header class="l-header">
                <div class="p-header">
                    <div class="p-header__title">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?>
                        </a>
                    </div>
                    <h2 class="p-header__sp-title">Menu</h2>
                    <?php get_search_form(); ?>
                </div>

            </header>