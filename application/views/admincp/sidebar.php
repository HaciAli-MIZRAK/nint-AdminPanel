<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url( 'assets/admincp/img/nint2-160x160.jpg' ); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $username; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <hr style="display: block; margin: 15px 0 15px 0; border: 1px #222d32 solid;">
        <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="<?php echo site_url( 'nintcp/index' ); ?>">
                    <i class="fa fa-dashboard" style="color: #f56954;"></i>
                    <span class="modal-title fa-lg" style="color: #f56954;">
                        <?php echo _nint( 'Yönetim Paneli' ); ?> 
                    </span>                        
                </a>
            </li>
        </ul>
        <hr style="display: block; margin: 0 0 0 0; border: 1px #2c3b41 solid;">
        <?php echo $AdminMenu; ?>
        <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="<?php echo site_url('login/logout'); ?>">
                    <i class="fa fa-power-off"></i>
                    <span>
                        <?php echo _nint( 'Çıkış Yap' ); ?>
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>