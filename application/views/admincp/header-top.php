<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url( 'nintcp/index' ); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>N</b>IO</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Nint</b>IO</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- Messages: style can be found in dropdown.less-->
                <?php //require_once 'includes/headerfolders/menu-messages.php'; ?>
                <!-- ./ end Messages: style can be found in dropdown.less-->
                
                <!-- Notifications: style can be found in dropdown.less -->
                <?php //require_once 'includes/headerfolders/menu-notification.php'; ?>
                <!-- ./ end Notifications: style can be found in dropdown.less -->
                
                <!-- Tasks: style can be found in dropdown.less -->
                <?php //require_once 'includes/headerfolders/menu-tasks.php'; ?>
                <!-- ./ end Tasks: style can be found in dropdown.less -->
                
                <!-- User Account: style can be found in dropdown.less -->
                <?php //require_once 'includes/headerfolders/menu-footer.php'; ?>
                <!-- ./ end User Account: style can be found in dropdown.less -->
                
                <?php //require_once 'includes/headerfolders/menu-right-sidebar.php'; ?>
            </ul>
        </div>

    </nav>
</header>