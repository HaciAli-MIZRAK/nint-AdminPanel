        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo site_url(); ?>" style="color: #ffffff;"><b><?php echo getOptionsParser( $webSiteOptions, '_sitetitle' ); ?></b></a>
            </div><!-- /.login-logo -->
            <div class="box-header with-border">
                <!-- -->
                <div class="col-md-12">
                    <?php if (isset($Danger)): ?>
                    <div class="callout callout-danger" style="border-radius: 0; border: none;">
                        <h4 style="display: block; margin-bottom: 0px;">
                            <i class="icon fa fa-check"></i>
                            <?php echo $Danger; ?>
                        </h4>
                    </div>
                    <?php endif; ?>
                </div>
                <!-- -->
            </div>
            <div class="login-box-body">
                <p class="login-box-msg"><?php echo _nint( 'Kullanıcı Girişi' ); ?></p>
                <form action="<?php echo site_url( 'login/contrologin' ); ?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" name="useremail" class="form-control" placeholder="<?php echo _nint( 'Email Adresi Girin' ); ?>">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="userpass" class="form-control" placeholder="<?php echo _nint( 'Şifrenizi Girin' ); ?>">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
<!--                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>-->
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo _nint( 'Giriş Yap' ); ?></button>
                        </div><!-- /.col -->
                    </div>
                </form>
                <div class="social-auth-links text-center">
                    <p><?php echo _nint( '- VEYA -' ); ?></p>
                    <a href="<?php echo $LoginURL; ?>" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> <?php echo _nint( 'Facebook ile Giriş Yap' ); ?> </a>
<!--                    <a href="<?php echo site_url('login/googlepluslogin'); ?>" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> <?php echo _nint( 'Google+ ile Giriş Yap' ); ?></a>-->
                </div><!-- /.social-auth-links -->
<!--                <a href="#"><?php echo _nint( 'Şifremi unuttum' ); ?></a><br>
                <a href="register.html" class="text-center"><?php echo _nint( 'Kayıt ol' ); ?></a>-->
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
