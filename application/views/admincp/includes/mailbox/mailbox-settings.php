        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6 col-md-offset-3">
                        <!-- general form elements -->
                        <div class="box box-primary box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo _nint( 'MailBox Ayarları' ); ?></h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?php echo base_url('recordscp/newmailboxsettingsrecordscp'); ?>" method="post">
                                <div class="box-body">
                                    <!-- -->
                                    <div class="col-md-12">
                                        <?php if (isset($Success)): ?>
                                        <div class="callout callout-success" style="border-radius: 0; border: none;">
                                            <h4 style="display: block; margin-bottom: 0px;">
                                                <i class="icon fa fa-check"></i>
                                                <?php echo $Success; ?>
                                            </h4>
                                        </div>
                                        <?php endif; ?>
                                        <?php if (isset($Danger)): ?>
                                        <div class="callout callout-danger" style="border-radius: 0; border: none;">
                                            <h4 style="display: block; margin-bottom: 0px;">
                                                <i class="icon fa fa-check"></i>
                                                <?php echo $Danger; ?>
                                            </h4>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="mailboxaddress"><?php echo _nint( 'eMailBox Server: <em><smal>(IP Adresi veya Domain Adresi Yazabilirsiniz.)</smal></em>' ); ?></label>
                                            <input type="text" name="_mailboxaddress" class="form-control" id="mailboxaddress" value="<?php echo getOptionsParser( $getOptions, '_mailboxaddress' ); ?>" placeholder="<?php echo _nint( 'eMailBox Server Bilgisini Girin' );?>" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="mailboxusers"><?php echo _nint( 'Kullanıcı Adı: <em><smal>(email adresinizi yazın.)</smal></em>' ); ?></label>
                                            <input type="email" name="_mailboxusers" class="form-control" id="mailboxusers" value="<?php echo getOptionsParser( $getOptions, '_mailboxusers' ); ?>" placeholder="<?php echo _nint( 'eMailBox Kullanıcı Bilgisini Girin' );?>" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="mailboxpassword"><?php echo _nint( 'Şifreniz: <em><smal>(email şifrenizi yazın.)</smal></em>' ); ?></label>
                                            <input type="password" name="_mailboxpassword" class="form-control" id="mailboxpassword" value="<?php echo getOptionsParser( $getOptions, '_mailboxpassword' ); ?>" placeholder="<?php echo _nint( 'eMailBox Şifre Bilgisini Girin' );?>" required />
                                        </div>
                                        <div class="form-group">
                                            <label><?php echo _nint( 'Şifreli Bağlantı Türü' ); ?></label>
                                            <select name="_mailboxencrypto" class="form-control">
                                                <option value="0" <?php echo getOptionsParser( $getOptions, '_mailboxencrypto' ) == 0 ? 'selected' : NULL; ?>><?php echo _nint( 'Şifre Türü Seçin' ); ?></option>
                                                <option value="ssl" <?php echo getOptionsParser( $getOptions, '_mailboxencrypto' ) == 'ssl' ? 'selected' : NULL; ?>><?php echo _nint( 'SSL' ); ?></option>
                                                <option value="tls" <?php echo getOptionsParser( $getOptions, '_mailboxencrypto' ) == 'tls' ? 'selected' : NULL; ?>><?php echo _nint( 'TLS' ); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn btn-primary btn-lg"><?php echo _nint( 'Ayarlarını Kayıt Edin' ); ?></button>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div><!-- /.box -->
                    </div>
                </div>
            </section>
        </div>
        