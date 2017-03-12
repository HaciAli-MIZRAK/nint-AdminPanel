            <div class="col-md-6">
                <!-- ONLINE USERS LIST -->
                <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo _nint( 'Online Kullanıcı Listesi' ); ?></h3>
                        <div class="box-tools pull-right">
                            <span id="OnlineUserListsCount" class="label label-success"></span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div id="OnlineUsersLists" class="box-body no-padding">
                        
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="<?php echo site_url('nintcp/index'); ?>" class="uppercase"><?php echo _nint( 'Tüm Listeyi Gör' ); ?></a>
                    </div><!-- /.box-footer -->
                </div><!--/.box -->
                <!-- ./ ONLINE USERS LIST -->
            </div><!-- /.col -->