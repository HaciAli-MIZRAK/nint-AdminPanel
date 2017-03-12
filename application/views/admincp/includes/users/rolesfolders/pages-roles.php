                    <div class="col-md-4 col-md-offset-4">
                        <!-- iCheck -->
                        <div class="box box-success box-solid">
                            <div class="box-header">
                                <h3 class="box-title"><?php echo _nint( 'Sayfa İzinleri' ); ?></h3>
                            </div>
                            <div class="box-body">
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th><?php echo _nint( 'Sayfalar' ); ?></th>
                                                <th class="pull-right"><?php echo _nint( 'Erişim izni' ); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($userRolesPagesShow AS $PagesShow): ?>
                                            <tr>
                                                <td class="border-right"><?php echo $PagesShow->postitle; ?></td>
                                                <td class="text-center border-right">
                                                    <div class="form-group pull-right">
                                                        <input type="checkbox" name="read_pages|<?php echo $PagesShow->postid; ?>[]" <?php echo $PagesShow->read == 1 ? 'checked': NULL; ?> id="userRoles" rel="<?php echo $getUserInfo->userid; ?>" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
