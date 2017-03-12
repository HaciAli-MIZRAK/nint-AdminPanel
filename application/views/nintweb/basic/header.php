<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo getOptionsParser( $webSiteOptions, '_sitedescription' ); ?>">
        <meta name="keywords" content="<?php echo getOptionsParser( $webSiteOptions, '_sitekeywords' ); ?>">
        <title><?php echo getOptionsParser( $webSiteOptions, '_sitetitle' ); ?> | <?php echo empty(uri_string()) ? _nint( 'Anasayfa' ) : $pageShow->postitle; ?></title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url( 'assets/nintweb/' . getOptionsParser( $webSiteOptions, '_websitetheme' ) . '/css/bootstrap.min.css' ); ?>" rel="stylesheet" />
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,400italic,700italic' rel='stylesheet' type='text/css' />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        <!-- Rocket extras -->
        <link href="<?php echo base_url( 'assets/nintweb/' . getOptionsParser( $webSiteOptions, '_websitetheme' ) . '/css/animate.css' ); ?>" rel="stylesheet" />
        <link href="<?php echo base_url( 'assets/nintweb/' . getOptionsParser( $webSiteOptions, '_websitetheme' ) . '/css/prettyPhoto.css' ); ?>" rel="stylesheet" />
        <link href="<?php echo base_url( 'assets/nintweb/' . getOptionsParser( $webSiteOptions, '_websitetheme' ) . '/css/style.css' ); ?>" rel="stylesheet" />
        
        <link rel="stylesheet" href="https://devitems.com/html/xoss-preview/xoss/css/color.css" />
        
        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo base_url( 'assets/nintweb/favicon.png' ); ?>">
    </head>
    <body>
