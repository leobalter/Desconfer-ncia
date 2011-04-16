<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="pt-BR"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="pt-BR"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="pt-BR"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title><?php wp_title(' | ', 1, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="Desconferência - Podcast sobre desenvolvimento front-end e back-end"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!--[if lt IE 9 ]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css"/>

    <script src="<?php bloginfo('template_url'); ?>/js/modernizr-1.7.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
    <script>window.jQuery || document.write("<script src='<?php bloginfo('template_url'); ?>/js/jquery-1.5.1.min.js'>\x3C/script>")</script>

    <script src="<?php bloginfo('template_url'); ?>/js/effects.js"></script>

    <link rel="alternate" type="application/rss+xml"
          title="<?php printf(__('%s RSS Feed', 'minimalism'), get_bloginfo('name')); ?>"
          href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="alternate" type="application/atom+xml"
          title="<?php printf(__('%s Atom Feed', 'minimalism'), get_bloginfo('name')); ?>"
          href="<?php bloginfo('atom_url'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

</head>

<body>

<div id="main" role="main">
    <header>
        <div class="wrap clearfix">
            <h1><a href="<?php echo get_option('home'); ?>/"title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>

            <h2>O que você quer saber sobre o<br/>desenvolvimento <strong class="fe">front-end</strong> e <strong
                    class="be">back-end</strong>?</h2>
        </div>
    </header>


