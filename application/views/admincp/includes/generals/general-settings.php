        <form action="<?php echo base_url('recordscp/generalsettingsrecordscp'); ?>" method="post" enctype="multipart/form-data">
        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <!-- Genel Ayarlar Panelimiz -->
                    <div class="col-md-9">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-cog fa-lg"></i> <?php echo _nint( 'Genel Site Ayarları' ); ?></h3>
                                <div class="box-tools pull-right">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Site: ' ); ?></label>
                                        <input type="checkbox" name="_sitestatus" class="form-control" <?php echo $getOptions[0]->metavalue == 'on' ? 'checked' : NULL; ?> data-on-text="Aktif" data-off-text="Pasif" data-size="mini" style="display: block; border-radius: 0; border: none;">
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
                                <?php foreach($getOptions AS $metakey => $metavalue): ?>
                                <?php if($metavalue->metakey == '_sitestatus' || $metavalue->status == '0'): ?>
                                <?php else: ?>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for=""><?php echo _nint( $metavalue->keyname ); ?></label>
                                            <input type="<?php echo $metavalue->type; ?>" name="<?php echo $metavalue->metakey; ?>" class="form-control" value="<?php echo $metavalue->metavalue; ?>" id="" placeholder="<?php echo _nint( 'Site Title Girin' ); ?>" required>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Template Seç' ); ?></label>
                                        <select name="_websitetheme" class="form-control">
                                            <option value="0"><?php echo _nint( 'Ana Menü Seçin' ); ?></option>
                                            <?php foreach($getWebSiteTheme AS $WebSite): ?>
                                            <option value="<?php echo $WebSite; ?>" <?php echo $WebSite == getOptionsParser( $getOptions, '_websitetheme' ) ? 'selected' : NULL; ?>><?php echo $WebSite; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>                                    
                                </div>
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
