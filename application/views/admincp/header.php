<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo getOptionsParser( $webSiteOptions, '_sitetitle' ); ?> | <?php echo empty(uri_string()) ? _nint( 'Anasayfa' ) : $urlTitle; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/bootstrap.min.css' ); ?>" />
        
        <!-- Bootstrap Switch Button -->
        <?php if(uri_string() == ('nintcp/allblogs') || uri_string() == ('nintcp/generalsettings') || uri_string() == ('nintcp/adminsmenus') || uri_string() == ('nintcp/allpages') || uri_string() == ('nintcp/allusers') || uri_string() == ('nintcp/allpages/' . $this->uri->segment(3,0)) || uri_string() == ('nintcp/allusers/' . $this->uri->segment(3,0)) || uri_string() == ('nintcp/allsliders') || uri_string() == ('nintcp/allsliders/' . $this->uri->segment(3,0))): ?>
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/bootstrap-switch.min.css' ); ?>" />
        <?php endif; ?>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/nint.min.css' ); ?>" />
        <!-- Nint Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/skin-blue.css' ); ?>" />
        
        <!-- Bootstrap wysihtml5 Editör -->
        <?php if(uri_string() == ('nintcp/addsliders') || uri_string() == ('nintcp/editsliders/' . $this->uri->segment(3.0))): ?>
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/bootstrap3-wysihtml5.min.css' ); ?>" />
        <?php endif; ?>
        
        <?php if(uri_string() == ('nintcp/emailbox/INBOX') || uri_string() == ('nintcp/emailbox/' . $this->uri->segment(3.0) . '/mail-read/' . $this->uri->segment(5.0))): ?>
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/blue.css' ); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url( 'assets/admincp/mailbox/font/flaticon.css' ); ?>">
        <?php endif; ?>
            
        <!-- Radio Style -->
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/flat/blue.css' ); ?>" />
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/flat/red.css' ); ?>" />
        
        <!-- Checkbox Style -->
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/minimal/blue.css' ); ?>" />
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admincp/css/minimal/red.css' ); ?>" />
        
        <!-- Globalert -->
<!--        <link href="<?php echo base_url( 'assets/globalert/sweetalert.css' ); ?>" rel="stylesheet" />-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">