        <form action="<?php echo base_url('recordscp/editusersaddsrecordscp/' . $Edituser->USERID); ?>" method="post" enctype="multipart/form-data">
        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <!-- Genel Ayarlar Panelimiz -->
                    <div class="col-md-9">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-pencil fa-lg"></i> <?php echo _nint( 'Kullanıcıyı Düzenle' ); ?></h3>
                                <div class="box-tools pull-right">
                                    <div class="form-group">
                                        <label for=""><?php echo getTimeToDate( date('Y-m-d H:i:s') ); ?> <?php echo date('H:i:s'); ?></label>
                                    </div>
                                </div><!-- /.box-tools -->
                            </div><!-- /.box-header -->
                            <div class="box-body" style="border-radius: 0; border: none;">
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
                                <!-- -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Kullanıcı Adı' ); ?></label>
                                        <input type="text" name="username" class="form-control" value="<?php echo $Edituser->username; ?>" id="" placeholder="<?php echo _nint( 'Kullanıcı Adı Girin' ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'E-posta Adresi' ); ?></label>
                                        <input type="text" name="useremail" class="form-control" value="<?php echo $Edituser->useremail; ?>" id="" placeholder="<?php echo _nint( 'E-posta Adresi Girin' ); ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Kullanıcı Şifresini Düzenle' ); ?></label>
                                        <input type="text" name="userpass" class="form-control" id="" placeholder="<?php echo _nint( 'Kullanıcı Şifresi Girin' ); ?>">
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                    <!-- ./ end Genel Ayarlar Panelimiz -->
                    <div class="col-md-3 pull-right">
                        <div class="col-md-12">
                            <!-- YAYINLAMA ÖZELLİKLERİ -->
                            <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?php echo _nint( 'Kullanıcı Detayları' ); ?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="col-xs-12">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Kullanıcı Yetkisi' ); ?></strong></h5>
                                        <div class="form-group">
                                            <select name="_userroles" class="form-control">
                                                <option value="14"><?php echo _nint( 'Standart Kullanıcı' ); ?></option>
                                            </select>
                                        </div>
                                    </div><!-- ./Kullanıcı Yetkisi -->
                                    <div class="col-xs-12">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Ebeveyn Kullanıcı' ); ?></strong></h5>
                                        <div class="form-group">
                                            <select name="parentid" class="form-control">
                                                <option value="-1"><?php echo _nint( 'Kullanıcı Seçin' ); ?></option>
                                                <?php foreach($userShowLists AS $userLists): ?>
                                                    <option value="<?php echo $userLists->userid; ?>" <?php echo $Edituser->parentid == $userLists->userid ? 'selected' : NULL; ?>><?php echo $userLists->username; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div><!-- ./Ebeveyn Kullanıcı -->
                                    <div class="col-xs-12">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Kullanıcı Bildirimi Ayarları' ); ?></strong></h5>
                                        <div class="form-group">
                                            <select name="_notification" class="form-control">
                                                <option value="NULL"><?php echo _nint( 'Kullanıcı Bildirimi' ); ?></option>
                                                <option value="_sms"><?php echo _nint( 'SMS Bildirimi' ); ?></option>
                                                <option value="_email"><?php echo _nint( 'e-mail Bildirimi' ); ?></option>
                                            </select>
                                        </div>
                                    </div><!-- ./Kullanıcı Bildirimi Ayarları -->
                                    <div class="col-xs-12">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Tarayıcı Bildirimi Ayarları' ); ?></strong></h5>
                                        <div class="form-group">
                                            <select name="_scannernotification" class="form-control">
                                                <option value="NULL"><?php echo _nint( 'Tarayıcı Bildirimi Yok' ); ?></option>
                                                <option value="_snotification"><?php echo _nint( 'Tarayıcı Bildirimi Var' ); ?></option>
                                            </select>
                                        </div>
                                    </div><!-- ./Kullanıcı Bildirimi Ayarları -->
                                </div><!-- /.box-body -->
                                <div class="box-footer pad" style="background: #f5f5f5;">
                                    <button class="btn btn-primary pull-right" style="border-radius: 0; border: none;"><?php echo _nint( 'Değişiklikleri Kaydet' ); ?></button>
                                </div>
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div>
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
        </form>
