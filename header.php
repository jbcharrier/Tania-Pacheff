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

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>


    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">

    <header class="row">
        <div class="col-xs-2">
            <h1><a href="<?php bloginfo('url'); ?>"><img src="#" alt="Logo de Tania Pacheff"><span class="hidden"><?php bloginfo('name'); ?></span></a></h1>
        </div>
        <div class="col-xs-10">

        </div>

    </header>


