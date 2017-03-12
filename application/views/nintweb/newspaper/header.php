<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo getOptionsParser( $webSiteOptions, '_sitetitle' ); ?> | <?php echo empty(uri_string()) ? _nint( 'Anasayfa' ) : $pageShow->postitle; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php echo getOptionsParser( $webSiteOptions, '_sitedescription' ); ?>">
        <meta name="keywords" content="<?php echo getOptionsParser( $webSiteOptions, '_sitekeywords' ); ?>">
        <link href="<?php echo base_url('assets/nintweb/newspaper/css/reset.css'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url('assets/nintweb/newspaper/css/flexslider.css'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url('assets/nintweb/newspaper/css/prettyPhoto.css'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url('assets/nintweb/newspaper/css/font-awesome.css'); ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url('assets/nintweb/newspaper/css/style.css'); ?>">
        <link href="<?php echo base_url('assets/nintweb/newspaper/css/responsive.css'); ?>" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,300italic,400italic,700,600italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'> <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if IE 7]>
            <link rel="stylesheet" href="<?php echo base_url('assets/nintweb/newspaper/css/ie7.css'); ?>" type="text/css" media="all" />
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/nintweb/newspaper/css/ie.css'); ?>" type="text/css" media="all" />
        <![endif]-->
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/nintweb/newspaper/img/favicon.ico'); ?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/nintweb/newspaper/img/apple-touch-icon.png'); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/nintweb/newspaper/img/apple-touch-icon-72x72.png'); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/nintweb/newspaper/img/apple-touch-icon-114x114.png'); ?>">
    </head>
    <body class="home-page">
        <div id="main-left">
            <div id="main-right">
                <div class="wrapper">

