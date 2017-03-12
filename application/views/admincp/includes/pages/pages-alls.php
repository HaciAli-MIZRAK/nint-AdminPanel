        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-list-alt fa-lg"></i> <?php echo _nint( 'Tüm Sayfalar' ); ?> </h3>
                                <div class="box-tools pull-right">
                                    <?php echo $pagesLink; ?>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo _nint( 'S.No' ); ?></th>
                                            <th><?php echo _nint( 'Sayfa Başlıkları' ); ?></th>
                                            <th><?php echo _nint( 'Sayfa Yazarı' ); ?></th>
                                            <th><?php echo _nint( 'Sayfa Ekleme' ); ?></th>
                                            <th><?php echo _nint( 'Sayfa Durumu' ); ?></th>
                                            <th><?php echo _nint( 'Sıra' ); ?></th>
                                            <th><?php echo _nint( 'Kimler Görüyor' ); ?></th>
                                            <th><?php echo _nint( 'Sayfa Dili' ); ?></th>
                                            <th colspan="3" class="text-center"><?php echo _nint( 'İşlemler' ); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $PagesCount = 1; ?>
                                        <?php if($pagesLists): ?>
                                        <?php foreach($pagesLists AS $Pages): ?>
                                        <tr <?php echo $Pages->poststatus == 'deleted' ? 'style="color: #ffffff; background: #f56954;"' : NULL; ?>>
                                            <td><?php echo $PagesCount++;?></td>
                                            <td><?php echo $Pages->postitle; ?></td>
                                            <td><?php echo $Pages->username; ?></td>
                                            <td><?php echo getTimeToDate( $Pages->postdate ); ?></td>
                                            <td><input <?php echo $Pages->poststatus == 'deleted' ? 'id="switch-disabled" disabled' : 'id="PagesCheck-' . $Pages->postid . '"'; ?> type="checkbox" <?php echo $Pages->poststatus == 'publish' ? 'checked' : NULL; ?> class="PagesCheck form-control" data-on-text="Aktif" data-off-text="Pasif" data-size="mini" style="display: block; border-radius: 0; border: none;" /></td>
                                            <td><?php echo $Pages->menuorder; ?></td>
                                            <td><?php echo getPostsViews( $Pages->postviews ); ?></td>
                                            <td><?php echo $Pages->language; ?></td>
                                            <?php if($Pages->poststatus == 'deleted'): ?>
                                            <td>
                                                <a data-toggle="tooltip" title="<?php echo _nint( 'Silinen Sayfa için Fotoğraf ön izlemesi yapılamaz.' ); ?>">
                                                    <i class="fa fa-image fa-white fa-lg" title="<?php echo $Pages->postitle; ?>"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a data-toggle="tooltip" title="<?php echo _nint( 'Silinen Sayfa için düzenleme yapılamaz.' ); ?>">
                                                    <i class="fa fa-edit fa-white fa-lg"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url( 'recordscp/replypagesrecordscp/' . $Pages->postid ); ?>" onclick="return confirmReply()">
                                                    <i class="fa fa-reply-all fa-white fa-lg" title="<?php echo _nint( 'Geri Al' ); ?>"></i>
                                                </a>
                                            </td>
                                            <?php else: ?>
                                            <td>
                                                <a data-toggle="tooltip" title="<img src='<?php echo base_url('assets/nintweb/pagesphoto/' . getPhotoParser( $Pages )); ?>' style='display: block; width: 205px; height: 80px; margin: -10px;' />">
                                                    <i class="fa fa-image fa-lg" title="<?php echo $Pages->postitle; ?>"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url( 'nintcp/editpages/' . $Pages->postid ); ?>">
                                                    <i class="fa fa-edit fa-lg" title="<?php echo _nint( 'Sayfayı Düzenle' ); ?>"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url( 'recordscp/clearpagesrecordscp/' . $Pages->postid ); ?>" onclick="return confirmDel()">
                                                    <i class="fa fa-trash fa-lg" title="<?php echo _nint( 'Sayfayı Sil' ); ?>"></i>
                                                </a>
                                            </td>
                                            <?php endif; ?>
                                        </tr> 
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="11" class="text-center" style="color: red; font-size: 1.3em;"><?php echo _nint( 'Henüz Sayfa Eklenmemiş!!' ); ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>                                
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                        <?php if($pagesLink): ?>
                        <div class="box-footer pull-right clearfix">
                            <?php echo $pagesLink; ?>
                        </div><!-- /.box-footer -->
                        <?php endif; ?>
                    </div>
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
