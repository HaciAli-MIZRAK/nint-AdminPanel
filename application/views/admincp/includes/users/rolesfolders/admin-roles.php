                    <div class="col-md-4 col-md-offset-4">
                        <!-- iCheck -->
                        <div class="box box-success box-solid">
                            <div class="box-header">
                                <h3 class="box-title"><?php echo _nint( 'Menü İzinleri' ); ?></h3>
                            </div>
                            <div class="box-body">
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th><?php echo _nint( 'Admin Menü' ); ?></th>
                                                <th class="pull-right"><?php echo _nint( 'Erişim izni' ); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($AdminMenuLists AS $AdminLists): ?>
                                            <tr <?php echo $AdminLists->mparentid == 0 ? 'style="background: #bfbfbf; color: #ffffff;"' : NULL; ?>>
                                                <td class="border-right"><?php echo $AdminLists->mparentid == 0 ? '<strong>' . $AdminLists->menutitle . '</strong>' : $AdminLists->menutitle; ?></td>
                                                <td class="text-center border-right">
                                                    <div class="form-group pull-right">
                                                        <input type="checkbox" name="read_menu|<?php echo $AdminLists->mid; ?>" <?php echo $AdminLists->read == 1 ? 'checked': NULL; ?> id="userRoles" rel="<?php echo $getUserInfo->userid; ?>" />
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
