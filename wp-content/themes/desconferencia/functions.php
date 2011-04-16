<?php
/**
 * Created by JetBrains PhpStorm.
 * User: leobalter
 * Date: 08/04/11
 * Time: 21:51
 * To change this template use File | Settings | File Templates.
 */
 
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));