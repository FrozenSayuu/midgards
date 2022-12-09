<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
                    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
            </div>
            <?php wp_nav_menu(['theme_location' => 'primary', 'container' => 'nav']); ?>
        </header>