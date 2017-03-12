        <div class="main-content-wrapper">
            <!-- Page Breadcrumb Area
            ============================================
            -->
            <div class="page-breadcrumb bg-off-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12"></div>
                    </div>
                </div>
            </div>
            <!-- Contact Page
            ============================================ -->
            <div class="contact-page bg-off-white padding-bottom-90 fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 margin-bottom-90"></div>
                        <div class="col-xs-12 margin-bottom-90">
                            <h3 style="display: block; margin-bottom: -55px;"><?php echo $pageShow->postitle; ?></h3>
                        </div>
                        <div class="col-xs-12 margin-bottom-90">
                            <div id="contact-map"></div>
                        </div>
                        <div class="contact-form col-md-5 col-sm-6 col-xs-12">
                            <h2><?php echo $pageShow->postitle; ?> <?php echo _nint( 'FORMU' ); ?></h2>
                            <form action="mail.php">
                                <div class="input-box transparent">
                                    <input type="text" name="name" placeholder="<?php echo _nint( 'Adınız*' ); ?>" />
                                </div>
                                <div class="input-box transparent">
                                    <input type="email" name="email" placeholder="<?php echo _nint( 'Email*' ); ?>"/>
                                </div>
                                <div class="input-box transparent">
                                    <input type="text" name="subject" placeholder="<?php echo _nint( 'Konu Başlığı*' ); ?>" />
                                </div>
                                <div class="input-box transparent">
                                    <textarea name="message" placeholder="<?php echo _nint( 'Mesaj içeriği*' ); ?>" style="resize: none;"></textarea>
                                </div>
                                <div class="input-box submit-box width-full">
                                    <input type="submit" value="<?php echo _nint( 'Gönder' ); ?>" class="button large">
                                </div>
                            </form>
                        </div>

                        <div class="contact-info col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                            <h2><?php echo $pageShow->postitle; ?> <?php echo _nint( 'BİLGİLERİ' ); ?></h2>
                            <div class="contact-info-wrap">
                                <div class="sin-contact-info fix">
                                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                                    <p><?php echo getOptionsParser( $webSiteOptions, '_siteaddress' ); ?></p>
                                </div>
                                <div class="sin-contact-info fix">
                                    <div class="icon"><i class="fa fa-phone"></i></div>
                                    <p><?php echo getOptionsParser( $webSiteOptions, '_phone' ); ?></p>
                                </div>
                                <div class="sin-contact-info fix">
                                    <div class="icon"><i class="fa fa-envelope"></i></div>
                                    <?php echo getOptionsParser( $webSiteOptions, '_sitemail' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Shipping Service Area
            ============================================
            -->
            <div class="shipping-service-area">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Single Service -->
                        <div class="sin-service col-lg-3 col-sm-6 col-xs-12">
                            <!-- Service Icon -->
                            <div class="icon text-center"><i class="fa fa-car"></i></div>
                            <!-- Service Content -->
                            <div class="content fix">
                                <h3>free shipping</h3>
                                <p>Lorem ipsum dummy text goes here</p>
                            </div>
                        </div>
                        <!-- Single Service -->
                        <div class="sin-service col-lg-3 col-sm-6 col-xs-12">
                            <!-- Service Icon -->
                            <div class="icon text-center"><i class="fa fa-money"></i></div>
                            <!-- Service Content -->
                            <div class="content fix">
                                <h3>money back guarantee</h3>
                                <p>Lorem ipsum dummy text goes here</p>
                            </div>
                        </div>
                        <!-- Single Service -->
                        <div class="sin-service col-lg-3 col-sm-6 col-xs-12">
                            <!-- Service Icon -->
                            <div class="icon text-center"><i class="fa fa-shield"></i></div>
                            <!-- Service Content -->
                            <div class="content fix">
                                <h3>safe shopping</h3>
                                <p>Lorem ipsum dummy text goes here</p>
                            </div>
                        </div>
                        <!-- Single Service -->
                        <div class="sin-service col-lg-3 col-sm-6 col-xs-12">
                            <!-- Service Icon -->
                            <div class="icon text-center"><i class="fa fa-headphones"></i></div>
                            <!-- Service Content -->
                            <div class="content fix">
                                <h3>online support</h3>
                                <p>Lorem ipsum dummy text goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-page col-xs-12">
                <h3 class="padding-10"></h3>
            </div>
