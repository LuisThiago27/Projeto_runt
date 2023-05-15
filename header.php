<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        wp_head();

        $title = get_the_title();
        if($title == ''){
            $title =   'Home';
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/DankiCode/style.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo">
                    <a href="/wordpress"><img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/logo.png" alt=""></a>
                </div>
                <ul class="menu-desktop">
                    <li><a href="/wordpress/">Home</a></li>
                    <li><a href="/wordpress/sobre">Sobre</a></li>
                    <li><a href="/wordpress/contato">Contato</a></li>
                </ul>
                <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                    <ul>
                        <li><a href="/wordpress/">Home</a></li>
                        <li><a href="/wordpress/sobre">Sobre</a></li>
                        <li><a href="/wordpress/contato">Contato</a></li>
                    </ul>
                </div>