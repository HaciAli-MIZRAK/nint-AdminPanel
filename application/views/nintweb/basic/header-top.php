        <!-- Start Header
        ==================================================
        -->
        <header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Your Logo -->
                    <a href="<?php echo base_url(); ?>" class="navbar-brand"> <?php echo getOptionsParser( $webSiteOptions, '_sitetitle' ); ?> </a>
                </div>
                <!-- Start Navigation -->
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo base_url(); ?>"><?php echo _nint( 'ANASAYFA' ); ?></a>
                        </li>
                    </ul>
                    <?php echo $MainMenu; ?>
                    <?php if(!isset($login)): ?>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo site_url( 'login/login' ); ?>"><?php echo _nint( 'Giriş Yap' ); ?></a>
                        </li>
                    </ul>
                    <?php else: ?>
                    <ul class="nav navbar-nav">
                        <?php if(!empty($admin)): ?>
                        <li>
                            <a href="<?php echo site_url( 'nintcp/index' ); ?>"><?php echo _nint( 'Yönetim' ); ?></a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?php echo site_url( 'login/logout' ); ?>" onclick="return confirmLogout();"><?php echo _nint( 'Çıkış Yap' ); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>
                    <ul class="nav navbar-nav navbar-right header-button">
                        <li>
                            <button type="button" class="btn btn-primary"><?php echo _nint( 'Takip Sistemine Giriş' ); ?></button>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End Header
        ==================================================
        -->
