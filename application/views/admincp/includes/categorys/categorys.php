        <style>
            .toolTipStyle {
                display: block;
                width: 205px;
                height: 80px;
                margin: -10px;
            }
        </style>
        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo _nint( 'Tüm Kategoriler' ); ?></h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <div class="box-body">
                                <!-- -->
                                <div class="col-md-12" style="display: block; position: relative; height: 55px;">
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
                                            <i class="icon fa fa-warning"></i>
                                            <?php echo $Danger; ?>
                                        </h4>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- -->
                                <!-- kategori ekleme alanı -->
                                <form action="<?php echo base_url('recordscp/newcategorysaddsrecordscp'); ?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-4">
                                    <div class="box box-success" style="border-radius: 0; border: none;">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fa fa-edit fa-lg"></i> <?php echo _nint( 'Yeni Kategori Ekle' ); ?></h3>
                                        </div><!-- /.box-header -->
                                        <div class="box-body" style="border-radius: 0; border: none;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for=""><?php echo _nint( 'Kategori Adı' ); ?></label>
                                                    <input type="text" name="categorytitle" class="form-control" value="" id="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for=""><?php echo _nint( 'Üst Kategori' ); ?></label>
                                                    <select name="categoryparentid" class="form-control">
                                                        <option value="0"><?php echo _nint( 'Üst Kategori Seçin' ); ?></option>
                                                        <?php echo $CategorySelectShow; ?>
                                                    </select>
                                                </div>
                                            </div> <!-- ./ end Üst Kategori -->
                                            <div class="col-md-4">
                                                <div class="form-group btn btn-default btn-file">
                                                    <i class="fa fa-paperclip"></i>
                                                    <label for=""><?php echo _nint( 'Kategori Fotoğrafı' ); ?></label>
                                                    <input type="file" name="categoryphoto" class="form-control" id="" placeholder="<?php echo _nint( 'Kategori Fotoğrafı Girin' ); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label><?php echo _nint("<em><small class='font-red-thunderbird'><b>(izin verilen dosya türleri: 'jpg|jpeg|png')</b></small> <small>İzin verilen Dosya Boyutu: " . ini_get('upload_max_filesize') . "</small></em>"); ?></label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for=""><?php echo _nint( 'Kategori İçeriği' ); ?></label>
                                                    <textarea type="text" name="categorydesc" class="textarea form-control" rows="6" id="CKeditor" placeholder="<?php echo _nint( 'Kategori İçeriği Girin' ); ?>"></textarea>
                                                </div>
                                            </div>
                                        </div><!-- /.box-body -->
                                        <div class="box-footer pad" style="background: #f5f5f5;">
                                            <button class="btn btn-primary pull-right" style="border-radius: 0; border: none;"><?php echo _nint( 'Değişiklikleri Kaydet' ); ?></button>
                                        </div>
                                    </div><!-- /.box -->
                                </div><!-- /.col -->
                                </form>
                                <!-- ./ end kategori ekleme alanı -->
                                
                                <!-- kategori listesi alanı -->
                                <div class="col-md-8">
                                    <div class="box box-success" style="border-radius: 0; border: none;">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fa fa-list fa-lg"></i> <?php echo _nint( 'Kategori Listesi' ); ?></h3>
                                        </div><!-- /.box-header -->
                                        <div class="box-body" style="border-radius: 0; border: none;">
                                            <div class="box-body table-responsive no-padding">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-right"><?php echo _nint( 'Kategori Adı' ); ?></th>
                                                            <th class="border-right"><?php echo _nint( 'Kategori Tanıtım' ); ?></th>
                                                            <th class="border-right"><?php echo _nint( 'Kategori Seo URI' ); ?></th>
                                                            <th class="border-right"><?php echo _nint( 'Konu Sayısı' ); ?></th>
                                                            <th colspan="3" class="text-center"><?php echo _nint( 'İşlemler' ); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if($CategoryTableShow): ?>
                                                        <?php echo $CategoryTableShow; ?>
                                                        <?php else: ?>
                                                        <tr>
                                                            <td colspan="7" class="text-center" style="color: red; font-size: 1.3em;"><?php echo _nint( 'Henüz Kategori Eklenmemiş!!' ); ?></td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>                                
                                                </table>
                                            </div><!-- /.box-body table-responsive no-padding -->
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col -->
                                <!-- ./ end kategori listesi alanı -->
                                
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
