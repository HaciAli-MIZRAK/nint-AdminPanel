        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Mailbox
                    <small><?php echo _nint( 'Toplam: ' ); ?>[<?php echo $mailBoxTotalCount; ?>]<?php echo _nint( ' eMail var' ); ?></small>
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
                                <h3 class="box-title"><i class="fa fa-envelope-o"></i> <?php echo _nint( 'Inbox' ); ?></h3>
                                <div class="box-tools pull-right">
                                    <div class="has-feedback">
                                        <input type="text" class="form-control input-sm" placeholder="Search Mail">
                                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                    </div>
                                </div><!-- /.box-tools -->
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <div class="mailbox-controls">
                                    <!-- Check all button -->
                                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                                    </div><!-- /.btn-group -->
                                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                    <div class="pull-right">
                                        1-50/200
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                        </div><!-- /.btn-group -->
                                    </div><!-- /.pull-right -->
                                </div><!-- ./ end mailbox-controls -->
                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <?php if ($mailBoxMessages): ?>
                                            <?php for($i = (count($mailBoxMessages) - 1);$i >= 0;$i--): ?>
                                            <tr <?php echo $mailBoxMessages[$i]['unread'] == 1 ? 'style="color: #ffffff; font-weight: bold; background: #3c8dbc;"' : NULL; ?>>
                                                <td><input type="checkbox"></td>
                                                <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                                <td class="mailbox-name">
                                                    <a href="<?php echo base_url('nintcp/emailbox/' . $this->uri->segment(3,0) . '/mail-read/' . ($i + 1)); ?>" <?php echo $mailBoxMessages[$i]['unread'] == 1 ? 'style="color: #ffffff;"' : NULL; ?>>
                                                        <?php echo $mailBoxMessages[$i]['from']; ?>
                                                    </a>
                                                </td>
                                                <td class="mailbox-subject">
                                                    <?php echo $mailBoxMessages[$i]['subject']; ?>
                                                </td>
                                                <td class="mailbox-attachment">
                                                    <?php echo isset($mailBoxMessages[$i]['attachments'][0]['name']) ? '<i class="fa fa-paperclip"></i>' : NULL; ?>
                                                </td>
                                                <td class="mailbox-date">
                                                    5 mins ago
                                                </td>
                                                <td><?php echo $mailBoxMessages[$i]['answered'] == 1 ? '<i class="fa fa-reply"></i>' : NULL ?></td>
                                            </tr>
                                            <?php endfor; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="5" class="text-center"><h4 class="text-red"><?php echo _nint( 'Kutu boş' ); ?></h4></td>
                                            </tr> 
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.mail-box-messages -->
                            </div><!-- /.box-body -->
                            <div class="box-footer no-padding">
                                <div class="mailbox-controls">
                                    <!-- Check all button -->
                                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                                    </div><!-- /.btn-group -->
                                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                    <div class="pull-right">
                                        1-50/200
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                        </div><!-- /.btn-group -->
                                    </div><!-- /.pull-right -->
                                </div>
                            </div>
                        </div><!-- /. box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->