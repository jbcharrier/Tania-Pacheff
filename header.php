<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>
        <?php bloginfo('name'); ?>
        <?php if (is_home()) : ?>
            <?php bloginfo('description'); ?>
        <?php else : ?>
            <?php wp_title(); ?>
        <?php endif; ?>
    </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Site web de Tania Pacheff - Consultante diététicienne nutritionniste">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<!--START Plugin newsletter Wysija-->
    <script type="text/javascript" src="http://localhost/tania_pacheff/wp-includes/js/jquery/jquery.js?ver=2.7"></script>
    <script type="text/javascript"
            src="http://localhost/tania_pacheff/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-fr.js?ver=2.7"></script>
    <script type="text/javascript"
            src="http://localhost/tania_pacheff/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.7"></script>
    <script type="text/javascript"
            src="http://localhost/tania_pacheff/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var wysijaAJAX = {
            "action": "wysija_ajax",
            "controller": "subscribers",
            "ajaxurl": "http://localhost/tania_pacheff/wp-admin/admin-ajax.php",
            "loadingTrans": "Chargement..."
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
            src="http://localhost/tania_pacheff/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7"></script>
<!--END Plugin newsletter Wysija-->

    <?php wp_head(); ?>

<!--    [if lt IE 9]>-->
<!--    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<!--    <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>-->
<!--    <![endif]-->
</head>
<body id="page">
<!--[if lt IE 8]>-->
<!--<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade-->
<!--your browser</a> to improve your experience.</p>-->
<!--<![endif]-->

<div class="container-fluid">
     <header class="row">
        <div class="col-xs-2">
            <h1>
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?>" alt="Logo de Tania Pacheff">
                    <span class="hidden">
                        <?php bloginfo('name'); ?>
                    </span>
                </a>
            </h1>
        </div>
        <div class="col-xs-9" id="menu-navig">
            <?php
            $param_menu = [
                'theme_location' => 'main',
                'container' => 'nav',
                'container_class' => 'navigation'
            ];
            wp_nav_menu($param_menu); ?>
        </div>
        <div class="col-xs-1" id="logo-quiz">
            <a href="http://localhost/tania_pacheff/?page_id=64">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/logo-quiz.png' ?>"
                     alt="Logo quiz nutritionnel">
            </a>
        </div>
    </header>

