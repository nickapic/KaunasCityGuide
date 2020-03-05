<!DOCTYPE html>
<html lang="<?=get_bloginfo('language')?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/style.css" />
    <script src="<?=get_stylesheet_directory_uri()?>/js/preloader.js"></script>
    <title>Kaunas City Guide</title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?=get_stylesheet_directory_uri()?>/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?=get_stylesheet_directory_uri()?>/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?=get_bloginfo('description')?>">
    <meta name="keywords" content="Kaunas, Lithuania, City, Guide, Student, Accommodation, Costs, Living, Visa, University">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
</head>
<body class="home_page">
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>
<?php if(!is_single()): ?> <header> <?php endif; ?>
    <nav class="header">
        <div class="logo-box">
            <h1 class="logo-box-logo"><a href="<?=get_site_url()?>"><?=get_bloginfo('name')?></a></h1>
        </div>
        <?php
            wp_nav_menu(
                array(
                    'depth' => 1,
                    'theme_location' => 'top-bar',
                    'menu_class' => 'header_navigation'
                )
            );
        ?>
    </nav>