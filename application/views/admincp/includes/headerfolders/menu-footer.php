                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets/admincp/img/nint2-160x160.jpg' ); ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $username; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url('assets/admincp/img/nint2-160x160.jpg' ); ?>" class="img-circle" alt="User Image">
                                <p>
                                    <?php echo $username; ?>
                                    <small><?php echo getTimeToDate( date('Y-m-d H:i:s') ); ?></small>
                                </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat"><?php echo _nint( 'Profil Paneli' ); ?></a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url( 'login/logout' ); ?>" class="btn btn-default btn-flat"><?php echo _nint( 'Çıkış Yap' ); ?></a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->