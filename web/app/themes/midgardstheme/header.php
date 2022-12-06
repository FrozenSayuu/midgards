<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="\app\themes\midgardstheme\sass\style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="site-header">
            <div class="header-icon">
                <div class="header-title">
                    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                </div>
            </div>
            <?php wp_nav_menu(['theme_location' => 'primary', 'container' => 'nav']); ?>

            <div class="mobile-container">
                <div class="menu-icons">
                    <svg class="close-menu-icon" width="26" height="30" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L29 33" stroke="black" stroke-width="2" />
                        <path d="M1 33L29 1" stroke="black" stroke-width="2" />
                    </svg>

                    <svg class="open-menu-icon" width="32" height="30" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="1" x2="36" y2="1" stroke="black" stroke-width="2" />
                        <line y1="29" x2="36" y2="29" stroke="black" stroke-width="2" />
                        <line y1="15" x2="36" y2="15" stroke="black" stroke-width="2" />
                    </svg>
                </div>


                <div class="mobile-container-menu"><?php wp_nav_menu(['theme_location' => 'primary', 'container' => 'nav']); ?></div>
            </div>
        </header>