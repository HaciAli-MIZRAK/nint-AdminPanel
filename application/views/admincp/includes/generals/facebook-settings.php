        <form action="<?php echo base_url('recordscp/facebooksettingsrecordscp'); ?>" method="post" enctype="multipart/form-data">
        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <!-- Genel Ayarlar Panelimiz -->
                    <div class="col-md-9">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-cog fa-lg"></i> <?php echo _nint( 'Facebook Yayın Ayarları' ); ?></h3>
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
                                        <label for=""><?php echo _nint( 'Facebook App ID' ); ?></label>
                                        <input type="text" name="_facebookappid" class="form-control" value="<?php echo getOptionsParser( $getOptions, '_facebookappid' ); ?>" id="" placeholder="<?php echo _nint( '' ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Facebook Secret' ); ?></label>
                                        <input type="text" name="_facebookappsecret" class="form-control" value="<?php echo getOptionsParser( $getOptions, '_facebookappsecret' ); ?>" id="" placeholder="<?php echo _nint( '' ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Facebook Sayfa ID <em><small class="text-red">Paylaşım Yapmak istediğiniz Facebook sayfasının ID sini yazabilirsiniz.</small></em>' ); ?></label>
                                        <input type="text" name="_facebookpagesid" class="form-control" value="<?php echo getOptionsParser( $getOptions, '_facebookpagesid' ); ?>" id="" placeholder="<?php echo _nint( '' ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Facebook Token <em><small class="text-red">Paylaşım Yapmak istediğiniz Facebook sayfasının Token Kodunu yazabilirsiniz.</small></em>' ); ?></label>
                                        <input type="text" name="_facebooktoken" class="form-control" value="<?php echo getOptionsParser( $getOptions, '_facebooktoken' ); ?>" id="" placeholder="<?php echo _nint( '' ); ?>" required>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                    <!-- ./ end Genel Ayarlar Panelimiz -->
                    <div class="col-md-3">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo _nint( 'Yayınlama Özellikleri' ); ?></h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                
                            </div><!-- /.box-body -->
                            <div class="box-footer pad" style="background: #f5f5f5;">
                                <button class="btn btn-primary pull-right" style="border-radius: 0; border: none;"><?php echo _nint( 'Değişiklikleri Kaydet' ); ?></button>
                            </div>
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
        </form>
