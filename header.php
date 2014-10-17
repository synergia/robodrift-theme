<!DOCTYPE html>
<!--
	Tessellate by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
    <title>
        <?php wp_title( '&laquo;', true, 'right'); ?>
    </title>
		<!--[if lte IE 8]><script src="<?php get_template_directory_uri(); ?>/css/ie/html5shiv.js"></script><![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/ie/v8.css" />
    <![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/ie/v9.css" />
    <![endif]-->
</head>

<body <?php body_class(); ?>>
