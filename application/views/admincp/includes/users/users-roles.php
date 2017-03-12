        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <!-- Kullanıcı Roles Panelimiz -->
                    <div class="col-md-4 col-md-offset-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-aqua-active">
                                <h3 class="widget-user-username"><?php echo $getUserInfo->username; ?></h3>
                                <h5 class="widget-user-desc">Founder & CEO</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="http://localhost/nintio/assets/admincp/img/nint2-160x160.jpg" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">3,200</h5>
                                            <span class="description-text"><?php echo _nint( 'Satış' ); ?></span>
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">13,000</h5>
                                            <span class="description-text"><?php echo _nint( 'Yorum' ); ?></span>
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">35</h5>
                                            <span class="description-text"><?php echo _nint( 'Konu' ); ?></span>
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div>
                        </div><!-- /.widget-user -->
                    </div><!-- /.col -->
                    
                    <?php require_once 'rolesfolders/admin-roles.php'; ?>
                    
                    <?php require_once 'rolesfolders/pages-roles.php'; ?>
                    
                </div>
            </section>
        </div>
