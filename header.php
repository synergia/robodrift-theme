<!DOCTYPE html>
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
    <!--OG things-->


    <meta property="og:type" content="website" />
    <meta property="og:title" content="RoboDrift" />
    <meta property="og:description" content="Pierwsze takie wyścigi robotów" />
    <meta property="og:url" content="http://robo-drift.pwr.wroc.pl" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1203" />
    <meta property="og:image:height" content="610" />
    <meta property="og:site_name" content="RoboDrift" />
    <meta name="twitter:card" content="Pierwsze takie wyścigi robotów" />
    <!--    <meta name="twitter:site" content="@L7lab"/>-->
    <meta name="twitter:title" content="RoboDrift" />
    <meta name="twitter:description" content="Pierwsze takie wyścigi robotów" />
    <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/img/og.png" />
    <meta name="twitter:domain" content="robo-drift.pwr.wroc.pl" />

    <?php wp_head(); ?>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/ie/v8.css" />
    <![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/ie/v9.css" />
    <![endif]-->

    <script>
        function mo() {
            return (/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera);
        }
    </script>
</head>

<body <?php body_class(); ?>>
