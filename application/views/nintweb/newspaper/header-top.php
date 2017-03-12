                    <header id="kp-header">
                        <div id="kp-header-top">
                            <nav id="main-nav" class="clearfix">
                                <?php echo $MainMenu; ?>
                                <?php if(!isset($login)): ?>
                                <ul id="main-menu" class="col-md-4 clearfix pull-right">
                                    <li>
                                        <a href="http://demo.nint.io"><?php echo _nint( 'DEMO PANEL' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url( 'login/login' ); ?>"><?php echo _nint( 'Giriş Yap' ); ?></a>
                                    </li>
                                </ul>
                                <?php else: ?>
                                <ul id="main-menu" class="col-md-4 clearfix pull-right">
                                    <?php if(!empty($admin)): ?>
                                    <li>
                                        <a href="http://demo.nint.io"><?php echo _nint( 'DEMO PANEL' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url( 'nintcp/index' ); ?>"><?php echo _nint( 'Yönetim' ); ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <li>
                                        <a href="<?php echo site_url( 'login/logout' ); ?>" onclick="return confirmLogout();"><?php echo _nint( 'Çıkış Yap' ); ?></a>
                                    </li>
                                </ul>
                                <?php endif; ?>
                            </nav>
                        </div><!--kp-header-top-->
                        <!-- ./ end login bar -->
                        <div id="kp-header-bottom" class="clearfix">
                            <div id="logo-image"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/nintweb/newspaper/placeholders/logo1.png'); ?>" alt="" /></a></div>
                            <div class="top-head">
                                <p><?php echo _nint( 'Bu Gün Yazılan Bloglar' ); ?> <span class="kopa-square"></span><span class="kopa-date"><?php echo getTimeToDate( date('Y-m-d') ); ?></span></p>
                                <div class="head-line clearfix">
                                    <h3 class="head-line-title">Just in</h3>
                                    <div class="head-line-scroll">
                                        <div class="flexslider" id="head-line-slider">
                                            <ul class="slides">
                                                <li><a href="#">Hearst Partners with Gucci's Chime for Change Campaign</a></li>
                                                <li><a href="#">Hearst Partners with DG's Chime for Change Campaign</a></li>
                                            </ul>
                                        </div><!--head-line-slider-->
                                    </div><!--head-line-scroll-->
                                </div><!--head-line-->
                            </div><!--top-head-->
                            <div id="kp-top-banner"><a href="#"><img src="<?php echo base_url('assets/nintweb/newspaper/placeholders/top-banner.png'); ?>" alt="" /></a></div>
                        </div><!--kp-header-bottom-->    
                    </header><!--kp-header-->