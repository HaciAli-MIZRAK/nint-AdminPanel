        <style type="text/css">
                .sortable { cursor: move; }
                .fontawesome-select {
                    font-family: 'FontAwesome', 'Helvetica';
                }
        </style>
        
        
        <div class="content-wrapper">
            
            <?php ContentHeader( $urlTitle ); ?>
            
            <section class="content">
                <div class="row">
                    <!-- Genel Ayarlar Panelimiz -->
                    <div class="col-md-9">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-cog fa-lg"></i> <?php echo _nint( 'Admin Panel Menüleri' ); ?></h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive no-padding" style="border-radius: 0; border: none;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo _nint( 'S.No' ); ?></th>
                                            <th><?php echo _nint( 'Title' ); ?></th>
                                            <th><?php echo _nint( 'URI' ); ?></th>
                                            <th><?php echo _nint( 'Icon' ); ?></th>
                                            <th><?php echo _nint( 'On/Off' ); ?></th>
                                            <th><?php echo _nint( 'Sıra' ); ?></th>
                                            <th><?php echo _nint( 'Durum' ); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody id="sortable">
                                        <?php foreach($AdminMenuLists AS $Menu): ?>
                                        <tr class="sabit" id="item-<?php echo $Menu->mid; ?>" <?php echo $Menu->mparentid == 0 ? 'style="background: #e5e5e5;"' : NULL; ?>>
                                            <td class="sortable"><?php echo $Menu->mid; ?></td>
                                            <td <?php echo $Menu->mparentid == 0 ? 'style="font-weight: bold;"' : NULL; ?>><?php echo $Menu->menutitle; ?></td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" value="<?php echo $Menu->menuri; ?>" class="form-control" />
                                                    </div>                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-10">
                                                    <select id="itemx-<?php echo $Menu->mid; ?>" class="fontawesome-select form-control">
                                                        <?php foreach($AMenuIconLists AS $AmenuIcon): ?>
                                                        <option value="<?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?>" <?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle == $Menu->menuicon ? 'selected' : NULL; ?>>&#x<?php echo $AmenuIcon->content; ?>; <?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <span id="AdminMenuIcon-<?php echo $Menu->mid; ?>" class="pull-left"></span>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <?php if($Menu->mparentid == 0): ?>
                                                        <input id="AmenuOpen-<?php echo $Menu->mid; ?>" type="checkbox" <?php echo $Menu->menuopen == -1 ? 'checked' : NULL; ?> class="AdminMenuOpen form-control" data-on-text="Aktif" data-off-text="Pasif" data-size="small" style="display: block; border-radius: 0; border: none;" />
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $Menu->menuorder; ?></td>
                                            <td>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input id="AmenuStatus-<?php echo $Menu->mid; ?>" type="checkbox" <?php echo $Menu->mstatus == -1 ? 'checked' : NULL; ?> class="AdminMenuStatus form-control" data-size="small" style="display: block; border-radius: 0; border: none;" />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> 
                                        <?php endforeach; ?>
                                    </tbody>                                
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                    <!-- ./ end Genel Ayarlar Panelimiz -->
                    <form action="<?php echo base_url('recordscp/newadminsmenusrecordscp'); ?>" method="post">
                    <div class="col-md-3">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo _nint( 'Yeni Admin Menu Ekle' ); ?></h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <!-- -->
                                <div class="col-md-12">
                                    <?php if (isset($Success)): ?>
                                    <div class="callout callout-success" style="border-radius: 0; border: none;">
                                        <h4 style="display: block; margin-bottom: 0px;">
                                            <i class="icon fa fa-check"></i>
                                            <?php echo $Success; ?>
                                        </h4>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (isset($Danger)): ?>
                                    <div class="callout callout-danger" style="border-radius: 0; border: none;">
                                        <h4 style="display: block; margin-bottom: 0px;">
                                            <i class="icon fa fa-check"></i>
                                            <?php echo $Danger; ?>
                                        </h4>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Ana Menu Seç' ); ?></label>
                                        <select name="mparentid" class="form-control">
                                            <option value="0"><?php echo _nint( 'Ana Menü Seçin' ); ?></option>
                                            <?php foreach($AdminMenuLists AS $TopMenu): ?>
                                            <option value="<?php echo $TopMenu->mid; ?>"><?php echo $TopMenu->mparentid == 0 ? $TopMenu->menutitle : '# ' . $TopMenu->menutitle; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Admin Menu Title' ); ?></label>
                                        <input type="text" name="menutitle" class="form-control" id="" placeholder="<?php echo _nint( 'Admin Menu Title Girin' ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Admin Menu URI' ); ?></label>
                                        <input type="text" name="menuri" class="form-control" id="" placeholder="<?php echo _nint( 'Admin Menu URI Girin' ); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><?php echo _nint( 'Admin Menu Icon' ); ?></label>
                                        <select name="menuicon" class="fontawesome-select form-control">
                                            <?php foreach($AMenuIconLists AS $AmenuIcon): ?>
                                            <option value="<?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?>">&#x<?php echo $AmenuIcon->content; ?>; <?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>                                    
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer pad" style="background: #f5f5f5;">
                                <button class="btn btn-primary pull-right" style="border-radius: 0; border: none;"><?php echo _nint( 'Değişiklikleri Kaydet' ); ?></button>
                            </div>
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                    </form>
                </div>
            </section> 
        </div><!-- ./ end content-wrapper -->
