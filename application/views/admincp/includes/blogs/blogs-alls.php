        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-calendar-o fa-lg"></i> <?php echo _nint( 'Tüm Bloglar' ); ?> </h3>
                                <div class="box-tools pull-right">
                                    <?php echo $blogsLink; ?>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo _nint( 'S.No' ); ?></th>
                                            <th><?php echo _nint( 'Blog Başlıkları' ); ?></th>
                                            <th><?php echo _nint( 'Blog Yazarı' ); ?></th>
                                            <th><?php echo _nint( 'Blog Ekleme' ); ?></th>
                                            <th><?php echo _nint( 'Blog Durumu' ); ?></th>
                                            <th><?php echo _nint( 'Sıra' ); ?></th>
                                            <th><?php echo _nint( 'Kimler Görüyor' ); ?></th>
                                            <th><?php echo _nint( 'Blog Dili' ); ?></th>
                                            <th colspan="3" class="text-center"><?php echo _nint( 'İşlemler' ); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $BlogsCount = 1; ?>
                                        <?php if($blogsLists): ?>
                                        <?php foreach($blogsLists AS $Blogs): ?>
                                        <tr <?php echo $Blogs->poststatus == 'deleted' ? 'style="color: #ffffff; background: #f56954;"' : NULL; ?>>
                                            <td><?php echo $BlogsCount++;?></td>
                                            <td><?php echo $Blogs->postitle; ?></td>
                                            <td><?php echo $Blogs->username; ?></td>
                                            <td><?php echo getTimeToDate( $Blogs->postdate ); ?></td>
                                            <td><input <?php echo $Blogs->poststatus == 'deleted' ? 'id="switch-disabled" disabled' : 'id="BlogsCheck-' . $Blogs->postid . '"'; ?> type="checkbox" <?php echo $Blogs->poststatus == 'publish' ? 'checked' : NULL; ?> class="BlogsCheck form-control" data-on-text="Aktif" data-off-text="Pasif" data-size="mini" style="display: block; border-radius: 0; border: none;" /></td>
                                            <td><?php echo $Blogs->menuorder; ?></td>
                                            <td><?php echo getPostsViews( $Blogs->postviews ); ?></td>
                                            <td><?php echo $Blogs->language; ?></td>
                                            <?php if($Blogs->poststatus == 'deleted'): ?>
                                            <td>
                                                <a data-toggle="tooltip" title="<?php echo _nint( 'Silinen Blog için Fotoğraf ön izlemesi yapılamaz.' ); ?>">
                                                    <i class="fa fa-image fa-white fa-lg" title="<?php echo $Blogs->postitle; ?>"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a data-toggle="tooltip" title="<?php echo _nint( 'Silinen Blog için düzenleme yapılamaz.' ); ?>">
                                                    <i class="fa fa-edit fa-white fa-lg"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url( 'recordscp/replypagesrecordscp/' . $Blogs->postid ); ?>" onclick="return confirmReply()">
                                                    <i class="fa fa-reply-all fa-white fa-lg" title="<?php echo _nint( 'Geri Al' ); ?>"></i>
                                                </a>
                                            </td>
                                            <?php else: ?>
                                            <td>
                                                <a data-toggle="tooltip" title="<img src='<?php echo base_url('assets/nintweb/blogsphoto/' . getPhotoParser( $Blogs )); ?>' style='display: block; width: 205px; height: 80px; margin: -10px;' />">
                                                    <i class="fa fa-image fa-lg" title="<?php echo $Blogs->postitle; ?>"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url( 'nintcp/editblogs/' . $Blogs->postid ); ?>">
                                                    <i class="fa fa-edit fa-lg" title="<?php echo _nint( 'Blogu Düzenle' ); ?>"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url( 'recordscp/clearpagesrecordscp/' . $Blogs->postid ); ?>" onclick="return confirmDel()">
                                                    <i class="fa fa-trash fa-lg" title="<?php echo _nint( 'Blogu Sil' ); ?>"></i>
                                                </a>
                                            </td>
                                            <?php endif; ?>
                                        </tr> 
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="11" class="text-center" style="color: red; font-size: 1.3em;"><?php echo _nint( 'Henüz Blog Eklenmemiş!!' ); ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>                                
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                        <?php if($blogsLink): ?>
                        <div class="box-footer pull-right clearfix">
                            <?php echo $blogsLink; ?>
                        </div><!-- /.box-footer -->
                        <?php endif; ?>
                    </div>
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
