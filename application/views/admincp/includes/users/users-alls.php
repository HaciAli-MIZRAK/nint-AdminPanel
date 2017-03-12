        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <!-- -->
                    <div class="col-md-12">
                        <?php if (isset($Danger)): ?>
                        <div class="callout callout-danger" style="border-radius: 0; border: none;">
                            <h4 style="display: block; margin-bottom: 0px;">
                                <i class="fa fa-warning"></i>
                                <?php echo $Danger; ?>
                            </h4>
                        </div>
                        <?php endif; ?>
                    </div>
                    <!-- -->
                    <div class="col-xs-12">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header">
                                <h3 class="box-title"> <?php echo _nint( 'Tüm Kullanıcılar' ); ?> </h3>
                                <div class="box-tools pull-right">
                                    <?php echo $usersLink; ?>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo _nint( 'S.No' ); ?></th>
                                            <th><?php echo _nint( 'Kullanıcı Adı' ); ?></th>
                                            <th><?php echo _nint( 'E-posta Adresi' ); ?></th>
                                            <th><?php echo _nint( 'Kayıt tarihi' ); ?></th>
                                            <th><?php echo _nint( 'Durumu' ); ?></th>
                                            <th><?php echo _nint( 'Yetkisi' ); ?></th>
                                            <th><?php echo _nint( 'Siparişler' ); ?></th>
                                            <th><?php echo _nint( 'Yorumlar' ); ?></th>
                                            <th><?php echo _nint( 'Konular' ); ?></th>
                                            <th><?php echo _nint( 'Kayıt Türü' ); ?></th>
                                            <th colspan="3" class="text-center"><?php echo _nint( 'İşlemler' ); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $usersCount = 1; ?>
                                        <?php if($usersLists): ?>
                                        <?php foreach($usersLists AS $Users): ?>
                                        <tr <?php echo $Users->userviews == 'deleted' ? 'style="color: #ffffff; background: #f56954;"' : NULL; ?>>
                                            <td><?php echo $usersCount++;?></td>
                                            <td><?php echo $Users->username; ?></td>
                                            <td><?php echo $Users->useremail; ?></td>
                                            <td><?php echo getTimeToDate( $Users->userregistered ); ?></td>
                                            <td><input <?php echo $Users->userviews == 'deleted' ? 'id="switch-disabled" disabled' : 'id="UsersCheck-' . $Users->userid . '"'; ?> type="checkbox" <?php echo $Users->userviews == 'publish' ? 'checked' : NULL; ?> class="UsersCheck form-control" data-on-text="Aktif" data-off-text="Pasif" data-size="mini" style="display: block; border-radius: 0; border: none;" /></td>
                                            <td>1458</td>
                                            <td>1458</td>
                                            <td>1458</td>
                                            <td>1458</td>
                                            <td><?php echo !empty($Users->fbid) ? '<i class="fa fa-facebook text-primary"></i>' : 'normal' ; ?></td>
                                            <?php if($Users->userviews == 'deleted'): ?>
                                            <td>
                                                <a data-toggle="tooltip" title="<?php echo _nint( 'Silinen Kullanıcı için Yetkilendirme yapılamaz.' ); ?>">
                                                    <i class="fa fa-user-secret fa-lg" title="<?php echo _nint( 'Kullanıcıyı Yetklileri' ); ?>"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a data-toggle="tooltip" title="<?php echo _nint( 'Silinen Kullanıcı için Düzenleme yapılamaz.' ); ?>">
                                                    <i class="fa fa-edit fa-lg" title="<?php echo _nint( 'Kullanıcıyı Düzenle' ); ?>"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('recordscp/replyusersrecordscp/' . $Users->userid . '/' . $Users->userseoname); ?>" onclick="return confirmReply()">
                                                    <i class="fa fa-reply-all fa-white fa-lg" title="<?php echo _nint( 'Geri Al' ); ?>"></i>
                                                </a>
                                            </td>
                                            <?php else: ?>
                                            <td><a href="<?php echo site_url('nintcp/userolespages/' . $Users->userid . '/' . $Users->userseoname); ?>"><i class="fa fa-user-secret fa-lg" title="<?php echo _nint( 'Kullanıcıyı Yetklileri' ); ?>"></i></a></td>
                                            <td><a href="<?php echo site_url('nintcp/editusers/' . $Users->userid . '/' . $Users->userseoname); ?>"><i class="fa fa-edit fa-lg" title="<?php echo _nint( 'Kullanıcıyı Düzenle' ); ?>"></i></a></td>
                                            <td><a href="<?php echo site_url('recordscp/clearusersrecordscp/' . $Users->userid . '/' . $Users->userseoname); ?>" onclick="return confirmDel()"><i class="fa fa-trash fa-lg" title="<?php echo _nint( 'Kullanıcıyı Sil' ); ?>"></i></a></td>
                                            <?php endif; ?>
                                        </tr> 
                                        <?php endforeach; ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="11" class="text-center" style="color: red; font-size: 1.3em;"><?php echo _nint( 'Henüz Kullanıcı Kaydı Yok!!' ); ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>                                
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                        <?php if($usersLink): ?>
                        <div class="box-footer pull-right clearfix">
                            <?php echo $usersLink; ?>
                        </div><!-- /.box-footer -->
                        <?php endif; ?>
                    </div>
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
