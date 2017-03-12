        <form action="<?php echo base_url('recordscp/editcategorysaddsrecordscp/' . $EditCategorysLists->categoryid); ?>" method="post" enctype="multipart/form-data">
        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <!-- Genel Ayarlar Panelimiz -->
                    <div class="col-md-9">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-pencil fa-lg"></i> <?php echo _nint( 'Kategori Düzenle' ); ?></h3>
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
                                        <label for=""><?php echo _nint( 'Kategori Title' ); ?></label>
                                        <input type="text" name="categorytitle" value="<?php echo $EditCategorysLists->categorytitle; ?>" class="form-control" id="" placeholder="<?php echo _nint( 'Kategori Title Girin' ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Kategory İçeriği' ); ?></label>
                                        <textarea type="text" name="categorydesc" class="form-control" id="CKeditor" placeholder="<?php echo _nint( 'Kategori İçeriği Girin' ); ?>"><?php echo $EditCategorysLists->categorydesc; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i>
                                        <label for=""><?php echo _nint( 'Kategori Fotoğrafı' ); ?></label>
                                        <input type="file" name="categoryphoto" class="form-control" id="" placeholder="<?php echo _nint( 'Kategori Fotoğrafı Girin' ); ?>">
                                        <input type="hidden" name="__postphotofullpath" value="<?php echo getPhotoParser( $EditCategorysLists->categoryphoto, 'full_path' ); ?>" />
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <i class="fa fa-upload fa-lg"></i>
                                        <label><?php echo _nint("<em><small class='font-red-thunderbird'><b>(izin verilen dosya türleri: 'jpg|jpeg|png')</b></small> <small>İzin verilen Dosya Boyutu: " . ini_get('upload_max_filesize') . "</small></em>"); ?></label>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                    <!-- ./ end Genel Ayarlar Panelimiz -->
                    
                    <!-- küçük özellik panellerini konumlandırdık -->
                    <div class="col-md-3 pull-right">
                        <div class="col-md-12">
                            <!-- FOTOĞRAF ÖN İZLEME -->
                            <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?php echo _nint( 'Fotoğraf Ön İzleme' ); ?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <img class="col-md-12" src="<?php echo base_url( 'assets/nintweb/categorysphoto/' . getPhotoParser( $EditCategorysLists->categoryphoto, 'file_name' ) ); ?>" />
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
