        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-th fa-lg"></i> <?php echo _nint( 'Tüm Sliderlar' ); ?> </h3>
                                <div class="box-tools pull-right">
                                    <?php echo $slidersLink; ?>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo _nint( 'S.No' ); ?></th>
                                            <th><?php echo _nint( 'Slider Başlıkları' ); ?></th>
                                            <th><?php echo _nint( 'Slider Yazarı' ); ?></th>
                                            <th><?php echo _nint( 'Slider Ekleme' ); ?></th>
                                            <th><?php echo _nint( 'Slider Durumu' ); ?></th>
                                            <th><?php echo _nint( 'Sıra' ); ?></th>
                                            <th><?php echo _nint( 'Kimler Görüyor' ); ?></th>
                                            <th><?php echo _nint( 'Slider Dili' ); ?></th>
                                            <th colspan="3" class="text-center"><?php echo _nint( 'İşlemler' ); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $SlidersCount = 1; ?>
                                        <?php if($slidersLists): ?>
                                        <?php foreach($slidersLists AS $Sliders): ?>
                                        <tr <?php echo $Sliders->poststatus == 'deleted' ? 'style="color: #ffffff; background: #f56954;"' : NULL; ?>>
                                            <td><?php echo $SlidersCount++;?></td>
                                            <td><?php echo $Sliders->postitle; ?></td>
                                            <td><?php echo $Sliders->username; ?></td>
                                            <td><?php echo getTimeToDate( $Sliders->postdate ); ?></td>
                                            <td><input <?php echo $Sliders->poststatus == 'deleted' ? 'id="switch-disabled" disabled' : 'id="SlidersCheck-' . $Sliders->postid . '"'; ?> type="checkbox" <?php echo $Sliders->poststatus == 'publish' ? 'checked' : NULL; ?> class="SlidersCheck form-control" data-on-text="Aktif" data-off-text="Pasif" data-size="mini" style="display: block; border-radius: 0; border: none;" /></td>
                                            <td><?php echo $Sliders->menuorder; ?></td>
                                            <td><?php echo getPostsViews( $Sliders->postviews ); ?></td>
                                            <td><?php echo $Sliders->language; ?></td>
                                            <?php if($Sliders->poststatus == 'deleted'): ?>
                                            <td>
                                                <a data-toggle="tooltip" title="<?php echo _nint( 'Silinen Slider için Fotoğraf ön izlemesi yapılamaz.' ); ?>">
                                                    <i class="fa fa-image fa-white fa-lg" title="<?php echo $Sliders->postitle; ?>"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a data-toggle="tooltip" title="<?php echo _nint( 'Silinen Slider için düzenleme yapılamaz.' ); ?>">
                                                    <i class="fa fa-edit fa-white fa-lg"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url( 'recordscp/replyslidersrecordscp/' . $Sliders->postid ); ?>" onclick="return confirmReply()">
                                                    <i class="fa fa-reply-all fa-white fa-lg" title="<?php echo _nint( 'Geri Al' ); ?>"></i>
                                                </a>
                                            </td>
                                            <?php else: ?>
                                            <td>
                                                <a data-toggle="tooltip" title="<img src='<?php echo base_url('assets/nintweb/slidersphoto/' . getPhotoParser( $Sliders )); ?>' style='display: block; width: 205px; height: 80px; margin: -10px;' />">
                                                    <i class="fa fa-image fa-lg" title="<?php echo $Sliders->postitle; ?>"></i>
                                                </a>
                                            </td>
                                            <td><a href="<?php echo base_url( 'nintcp/editsliders/' . $Sliders->postid ); ?>"><i class="fa fa-edit fa-lg" title="<?php echo _nint( 'Sayfayı Düzenle' ); ?>"></i></a></td>
                                            <td><a href="<?php echo base_url( 'recordscp/clearslidersrecordscp/' . $Sliders->postid ); ?>" onclick="return confirmDel()"><i class="fa fa-trash fa-lg" title="<?php echo _nint( 'Sayfayı Sil' ); ?>"></i></td>
                                            <?php endif; ?>
                                        </tr> 
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="11" class="text-center" style="color: red; font-size: 1.3em;"><?php echo _nint( 'Henüz Slider Eklenmemiş!!' ); ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>                                
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                        <?php if($slidersLink): ?>
                        <div class="box-footer pull-right clearfix">
                            <?php echo $slidersLink; ?>
                        </div><!-- /.box-footer -->
                        <?php endif; ?>
                    </div>
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
