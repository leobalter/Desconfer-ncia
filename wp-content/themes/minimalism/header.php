<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>

    <title><?php wp_title(' | ', 1, 'right'); bloginfo('name'); ?></title>

    <meta property="fb:admins" content="leobalter"/>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

    <style>
        article, aside, figure, footer, header, hgroup,
        menu, nav, section {
            display: block;
        }
    </style>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/compstyle.css" type="text/css" media="screen"/>
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
<!--[if lte IE 8]>
<section id="browsers">Seu browser está desatualizado! Atualize ou baixe um melhor.
    <nav>
        <ul>
            <li><a href="http://www.opera.com/browser/download/" title="Download do Opera">Opera</a></li>
            <li><a href="http://www.google.com/chrome/?hl=pt-BR" title="Download do Chrome">Chrome</a></li>
            <li><a href="http://br.mozdev.org/download/" title="Download do Firefox">Firefox</a></li>
        </ul>
    </nav>
</section>
<![endif]-->
<section id="page">

    <header id="header">
        <hgroup id="headerimg">
            <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

            <p class="description"><?php bloginfo('description'); ?></p>
        </hgroup>
    </header>
    <hr/>
