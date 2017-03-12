<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
    <?php ContentHeader( $urlTitle ); ?>

    <!-- Main content -->
    <section class="content">
<!--         Info boxes 
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">CPU Traffic</span>
                        <span class="info-box-number">90<small>%</small></span>
                    </div> /.info-box-content 
                </div> /.info-box 
            </div> /.col 
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">41,410</span>
                    </div> /.info-box-content 
                </div> /.info-box 
            </div> /.col 

             fix for small devices only 
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">760</span>
                    </div> /.info-box-content 
                </div> /.info-box 
            </div> /.col 
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">New Members</span>
                        <span class="info-box-number">2,000</span>
                    </div> /.info-box-content 
                </div> /.info-box 
            </div> /.col 
        </div> /.row -->

        <!-- Kullanıcı Bilgileri -->
        <div class="row">
            <?php require_once 'includes/index/online-user-lists.php'; ?>
            <?php require_once 'includes/index/end-user-register-lists.php'; ?>
        </div>
        <!-- ./ end Kullanıcı Bilgileri -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Control Sidebar sag tarafda açıkıp kapanan panel için
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs 
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
</aside><!-- /.control-sidebar 
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar 
<div class="control-sidebar-bg"></div>-->




