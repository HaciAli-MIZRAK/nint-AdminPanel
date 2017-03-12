        <form action="<?php echo base_url('recordscp/newpagesaddsrecordscp'); ?>" method="post" enctype="multipart/form-data">
        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <!-- Genel Ayarlar Panelimiz -->
                    <div class="col-md-9">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-plus fa-lg"></i> <?php echo _nint( 'Yeni Sayfa Ekle' ); ?></h3>
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
                                        <label for=""><?php echo _nint( 'Sayfa Title' ); ?></label>
                                        <input type="text" name="postitle" class="form-control" id="" placeholder="<?php echo _nint( 'Sayfa Title Girin' ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Sayfa İçeriği' ); ?></label>
                                        <textarea type="text" name="postcontent" class="textarea form-control" rows="10" id="CKeditor" placeholder="<?php echo _nint( 'Sayfa İçeriği Girin' ); ?>"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i>
                                        <label for=""><?php echo _nint( 'Sayfa Fotoğrafı' ); ?></label>
                                        <input type="file" name="__postsphoto" class="form-control" id="" placeholder="<?php echo _nint( 'Sayfa Fotoğrafı Girin' ); ?>">
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
                    <div class="col-md-3 pull-right">
                        <div class="col-md-12">
                            <!-- YAYINLAMA ÖZELLİKLERİ -->
                            <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?php echo _nint( 'Yayınlama Özellikleri' ); ?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Yayınlama Ayarları' ); ?></strong></h5>
                                        <div class="form-group">
                                            <input type="radio" name="poststatus" value="publish" id="postpublish" class="minimal" checked>
                                            <label class="fa-padding-left" for="postpublish"> <?php echo _nint( 'Yayımla' ); ?></label>
                                        </div>    
                                        <div class="form-group">
                                            <input type="radio" name="poststatus" value="pending" id="postnotpublish" class="minimal">
                                            <label class="fa-padding-left" for="postnotpublish"> <?php echo _nint( 'Yayımlama' ); ?></label>
                                        </div>
                                    </div><!-- ./Yayınlama Ayarları -->
                                    <div class="col-md-6">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Görünürlük Ayarları' ); ?></strong></h5>
                                        <div class="form-group">
                                            <input type="radio" name="postviews" value="public" id="postpublicviews" class="minimal" checked>
                                            <label class="fa-padding-left" for="postpublicviews"> <?php echo _nint( 'Herkese Açık' ); ?></label>
                                        </div>    
                                        <div class="form-group">
                                            <input type="radio" name="postviews" value="private" id="postprivateviews" class="minimal">
                                            <label class="fa-padding-left" for="postprivateviews"> <?php echo _nint( 'Üyelere Açık' ); ?></label>
                                        </div>
                                    </div><!-- ./Görünürlük Ayarları -->
                                    <div class="col-xs-12">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Sayfa Dili' ); ?></strong></h5>
                                        <div class="form-group">
                                            <select name="langselect" class="form-control">
                                                <option value="tr"><?php echo _nint( 'Türkçe' ); ?></option>
                                                <?php foreach($LanguageLists AS $Lang): ?>
                                                <option value="<?php echo $Lang[0]->isocode; ?>"><?php echo $Lang[0]->language; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div><!-- ./Dil Ayarları -->
                                </div><!-- /.box-body -->
                                <div class="box-footer pad" style="background: #f5f5f5;">
                                    <button class="btn btn-primary pull-right" style="border-radius: 0; border: none;"><?php echo _nint( 'Değişiklikleri Kaydet' ); ?></button>
                                </div>
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-12">
                            <!-- SAYFA ÖZELLİKLERİ -->
                            <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?php echo _nint( 'Sayfa Özellikleri' ); ?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="col-xs-9">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Menü Konumu' ); ?></strong></h5>
                                        <div class="form-group">
                                            <select name="menuviews" class="form-control">
                                                <option value="top"><?php echo _nint( 'Üst Menü' ); ?></option>
                                                <option value="bottom"><?php echo _nint( 'Alt Menü' ); ?></option>
                                            </select>
                                        </div>
                                    </div><!-- ./Menü Konumu -->
                                    <div class="col-xs-3">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Sıra' ); ?></strong></h5>
                                        <div class="form-group">
                                            <input type="text" name="menuorder" value="0" id="menuorder" class="form-control">
                                        </div>
                                    </div><!-- ./Sıralama -->
                                    <div class="col-xs-12">
                                        <h5 class="fa-black"><strong><?php echo _nint( 'Sayfa Şablon Ayarları' ); ?></strong></h5>
                                        <div class="form-group">
                                            <select name="__pagetemplate" class="form-control">
                                                <option value="default"><?php echo _nint( 'DefaultTemplate' ); ?></option>
                                                <?php for($i = 0;$i < count($TemplateLists);$i++): ?>
                                                <option><?php echo $TemplateLists[$i]; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div><!-- ./Sayfa Şablon Ayarları -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div>
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
        </form>
