        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Read Mail
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Mailbox</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <?php echo $mailBoxMenu; ?>
                    <div class="col-md-9">
                        <div class="box box-success box-solid" style="border-radius: 0; border: none;">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-file-text fa-lg"></i> <?php echo _nint( 'Okunan Posta' ); ?></h3>
                                <div class="box-tools pull-right">
                                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <div class="mailbox-read-info">
                                    <h3><?php echo $getMessageRead['subject']; ?></h3>
                                    <h5>From: <?php echo $getMessageRead['from']; ?> <span class="mailbox-read-time pull-right"><?php echo $getMessageRead['date']; ?></span></h5>
                                </div><!-- /.mailbox-read-info -->
                                <div class="mailbox-controls with-border text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-sm" data-toggle="tooltip" title="<?php echo _nint( 'Sil' ); ?>"><i class="fa fa-trash-o"></i></button>
                                        <button class="btn btn-default btn-sm" data-toggle="tooltip" title="<?php echo _nint( 'Cevapla' ); ?>"><i class="fa fa-reply"></i></button>
                                        <button class="btn btn-default btn-sm" data-toggle="tooltip" title="<?php echo _nint( 'Sonraki' ); ?>"><i class="fa fa-share"></i></button>
                                    </div><!-- /.btn-group -->
                                    <button class="btn btn-default btn-sm" data-toggle="tooltip" title="<?php echo _nint( 'Yazdır' ); ?>"><i class="fa fa-print"></i></button>
                                </div><!-- /.mailbox-controls -->
                                <div class="mailbox-read-message">
                                    <?php echo $getMessageRead['body']; ?>
                                </div><!-- /.mailbox-read-message -->
                            </div><!-- /.box-body -->
                            <?php if (isset($getMessageRead['attachments'])): ?>
                            <div class="box-footer">
                                <ul class="mailbox-attachments clearfix">
                                    <li>
                                        <span class="mailbox-attachment-icon"><i class="glyph-icon flaticon-<?php echo ExtensionArray( $getMessageRead['attachments'][0]['name'] ); ?>-file-format"></i></span>
                                        <div class="mailbox-attachment-info">
                                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> <?php echo $getMessageRead['attachments'][0]['name']; ?></a>
                                            <span class="mailbox-attachment-size">
                                                <?php echo formatSizeUnits( $getMessageRead['attachments'][0]['size'] ); ?>
                                                <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /.box-footer -->
                            <?php endif; ?>
                            <div class="box-footer">
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-reply"></i> <?php echo _nint( 'Cevapla' ); ?> </button>
                                    <button class="btn btn-default"><i class="fa fa-share"></i> <?php echo _nint( 'Sonraki' ); ?> </button>
                                </div>
                                <button class="btn btn-default"><i class="fa fa-trash-o"></i> <?php echo _nint( 'Sil' ); ?> </button>
                                <button class="btn btn-default"><i class="fa fa-print"></i> <?php echo _nint( 'Yazdır' ); ?></button>
                            </div><!-- /.box-footer -->
                        </div><!-- /. box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->