        <style type="text/css">
                .fontawesome-select {
                    font-family: 'FontAwesome', 'Helvetica';
                }
        </style>
        <form action="<?php echo base_url('recordscp/sosialmedialinksrecordscp'); ?>" method="post" enctype="multipart/form-data">
        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <!-- Sosyal Medya ikonları -->
                    <div class="col-md-5">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-pencil fa-lg"></i> <?php echo _nint( 'Sosyal Medya Linki Ekle' ); ?></h3>
                            </div><!-- /.box-header -->
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
                                <table border="0" class="col-md-12" id="westarz">
                                    <tr>
                                        <td>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for=""><?php echo _nint( 'Sosyal Medya Adı:' ); ?></label>
                                                    <input type="text" name="_x_sosialmedia_name[]" class="form-control" value="" id="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for=""><?php echo _nint( 'Sosyal Medya Linki' ); ?></label>
                                                    <input type="url" name="_x_sosialmedia_url[]" class="form-control" value="" id="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><?php echo _nint( 'Sosyal Medya ikonu' ); ?></label>
                                                    <select name="_x_sosialmedia_icon[]" class="fontawesome-select form-control">
                                                        <?php foreach($AMenuIconLists AS $AmenuIcon): ?>
                                                        <option value="<?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?>">&#x<?php echo $AmenuIcon->content; ?>; <?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label></label>
                                                    <a href="javascript:void(0);" class="btn btn-primary" id="addCF" style="display: block; margin-top: 5px; margin-left: -10px; margin-right: -20px;"><?php echo _nint( 'Ekle' ); ?></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div><!-- /.box-body -->
                            <div class="box-footer pad" style="background: #f5f5f5;">
                                <button class="btn btn-primary pull-right" style="border-radius: 0; border: none;"><?php echo _nint( 'Değişiklikleri Kaydet' ); ?></button>
                            </div>
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                    <!-- Sosyal Medya Ayarlar Panelimiz -->
                    
                    <?php $SosialMediaIcon = unserialize(getOptionsParser( $getOptions, '_sosial_media_link' )); ?>
                    <div class="col-md-7">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-edit fa-lg"></i> <?php echo _nint( 'Sosyal Medya Linkleri' ); ?></h3>
                            </div><!-- /.box-header -->
                            <div class="box-body" style="border-radius: 0; border: none;">
                                <?php for($i = 0;$i < count($SosialMediaIcon['_x_sosialmedia_name']);$i++): ?>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Sosyal Medya Adı:' ); ?></label>
                                        <input type="text" name="_x_sosialmedia_name[]" class="form-control" value="<?php echo $SosialMediaIcon['_x_sosialmedia_name'][$i]; ?>" id="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Sosyal Medya Linki' ); ?></label>
                                        <input type="url" name="_x_sosialmedia_url[]" class="form-control" value="<?php echo $SosialMediaIcon['_x_sosialmedia_url'][$i]; ?>" id="" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label><?php echo _nint( 'Sosyal Medya ikonu' ); ?></label>
                                        <select name="_x_sosialmedia_icon[]" class="fontawesome-select form-control">
                                            <?php foreach($AMenuIconLists AS $AmenuIcon): ?>
                                            <option value="<?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?>" <?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle == $SosialMediaIcon['_x_sosialmedia_icon'][$i] ? 'selected': NULL; ?>>&#x<?php echo $AmenuIcon->content; ?>; <?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                    <!-- ./ end Sosyal Medya Ayarlar Panelimiz -->
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
        </form>
