                    <div class="col-md-3">
                        <a href="compose.html" class="btn btn-success btn-block margin-bottom" style="border-radius: 0; border: none; padding-top: 10px; padding-bottom: 10px;">Compose</a>
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-archive"></i> <?php echo _nint( 'Kutular' ); ?></h3>
                                <div class="box-tools">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="<?php echo base_url( 'nintcp/emailbox/' . $mailBoxFoldersURI[0]); ?>"><i class="fa fa-inbox"></i><?php echo $mailBoxfoldersLists[0][0]; ?><span class="label label-success pull-right" style="border-radius: 0; border: none;"><?php echo $mailBoxunReadCount[0]; ?></span></a></li>
                                    <li><a href="<?php echo base_url( 'nintcp/emailbox/' . $mailBoxFoldersURI[1]); ?>"><i class="fa fa-envelope-o"></i><?php echo $mailBoxfoldersLists[1][1]; ?><span class="label label-primary pull-right" style="border-radius: 0; border: none;"><?php echo $mailBoxCounts[1]; ?></span></a></li>
                                    <li><a href="<?php echo base_url( 'nintcp/emailbox/' . $mailBoxFoldersURI[2]); ?>"><i class="fa fa-file-text-o"></i><?php echo $mailBoxfoldersLists[2][1]; ?><span class="label label-info pull-right" style="border-radius: 0; border: none;"><?php echo $mailBoxCounts[2]; ?></span></a></li>
                                    <li><a href="<?php echo base_url( 'nintcp/emailbox/' . $mailBoxFoldersURI[3]); ?>"><i class="fa fa-filter"></i><?php echo $mailBoxfoldersLists[3][1]; ?><span class="label label-warning pull-right" style="border-radius: 0; border: none;"><?php echo $mailBoxCounts[3]; ?></span></a></li>
                                    <li><a href="<?php echo base_url( 'nintcp/emailbox/' . $mailBoxFoldersURI[4]); ?>"><i class="fa fa-trash-o"></i><?php echo $mailBoxfoldersLists[4][1]; ?><span class="label label-danger pull-right" style="border-radius: 0; border: none;"><?php echo $mailBoxCounts[4]; ?></span></a></li>
                                </ul>
                            </div><!-- /.box-body -->
                        </div><!-- /. box -->
                    </div><!-- /.col -->