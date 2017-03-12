        </div><!-- ./wrapper -->
        <!-- -->
        <script>
        var URL = "<?php echo base_url(); ?>";
        </script>
        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url( 'assets/admincp/js/jquery.min.js' ); ?>"></script>
        <!-- Jquery UI -->
        <script src="<?php echo base_url( 'assets/admincp/js/jquery-ui.min.js' ); ?>"></script>
        <!-- Jquery Ajax JSON -->
        <script src="<?php echo base_url( 'assets/admincp/js/ajaxjson.js' ); ?>"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url( 'assets/admincp/js/bootstrap.min.js' ); ?>"></script>
       
        <!-- Bootstrap Switch Button -->
        <?php if(uri_string() == ('nintcp/generalsettings') || uri_string() == ('nintcp/adminsmenus')): ?>
        <script src="<?php echo base_url( 'assets/admincp/js/bootstrap-switch.min.js' ); ?>"></script>
        <script>
            /* Bootstrap Switch */
            $('[type="checkbox"]').bootstrapSwitch();
        </script>
        <?php endif; ?>
        <!-- Nint App -->
        <script src="<?php echo base_url( 'assets/admincp/js/nint.min.js' ); ?>"></script>
        
        <!-- Bootstrap wysihtml5 Editör JS -->
        <?php if(uri_string() == ('nintcp/addsliders') || uri_string() == ('nintcp/editsliders/' . $this->uri->segment(3.0))): ?>
        <script src="<?php echo base_url( 'assets/admincp/js/bootstrap3-wysihtml5.all.min.js' ); ?>"></script>
        <script>
            /* Text Editör Alanı */
            $(".textarea").wysihtml5({
                toolbar: {
                    "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                    "emphasis": true, //Italics, bold, etc. Default true
                    "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                    "html": false, //Button which allows you to edit the generated HTML. Default false
                    "link": false, //Button to insert a link. Default true
                    "image": false, //Button to insert an image. Default true,
                    "color": false, //Button to change color of font  
                    "blockquote": false, //Blockquote  
                },
            }); // end $(".textarea").wysihtml5({});
        </script> 
        <?php endif; ?>
        
        <!-- Pages Adds Panele CKeditör -->
        <?php if(uri_string() == ('nintcp/addpages') || uri_string() == ('nintcp/editpages/' . $this->uri->segment(3.0))): ?>
        <!-- CK Editor -->
        <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('CKeditor');
        </script>
        <?php endif; ?>
        
        <!-- Blog Adds Panele CKeditör -->
        <?php if(uri_string() == ('nintcp/addblogs') || uri_string() == ('nintcp/editblogs/' . $this->uri->segment(3.0))): ?>
        <!-- CK Editor -->
        <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('CKeditor');
        </script>
        <?php endif; ?>
        
        <!-- Admin Main Panel -->
        <?php if(uri_string() == ('nintcp/index')): ?>
        <script src="<?php echo base_url( 'assets/admincp/js/plugin/onlineuserlists.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/admincp/js/plugin/enduseregisterlists.js' ); ?>"></script>
        <?php endif; ?>
        
        <!-- Admin Panel Menu Panel -->
        <?php if(uri_string() == ('nintcp/adminsmenus')): ?>
        <script src="<?php echo base_url( 'assets/admincp/js/plugin/adminsmenus.js' ); ?>"></script>
        <?php endif; ?>
        
        <!-- Pages Status -->
        <?php if(uri_string() == ('nintcp/allpages') || uri_string() == ('nintcp/allpages/' . $this->uri->segment(3.0))): ?>
        <script src="<?php echo base_url( 'assets/admincp/js/plugin/generaljslibs.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/admincp/js/bootstrap-switch.min.js' ); ?>"></script>
        <script>
            /* Tooltip */
            $('a[data-toggle="tooltip"]').tooltip({
                animated: 'fade',
                placement: 'left',
                html: true
            });
            
            /* Bootstrap Switch */
            $('[type="checkbox"]').bootstrapSwitch();
        </script>
        <?php endif; ?>
        
        <!-- Sliders Status -->
        <?php if(uri_string() == ('nintcp/allsliders') || uri_string() == ('nintcp/allusers') || uri_string() == ('nintcp/allsliders/' . $this->uri->segment(3.0)) || uri_string() == ('nintcp/allusers/' . $this->uri->segment(3.0))): ?>
        <script src="<?php echo base_url( 'assets/admincp/js/plugin/generaljslibs.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/admincp/js/bootstrap-switch.min.js' ); ?>"></script>
        <script>
            /* Tooltip */
            $('a[data-toggle="tooltip"]').tooltip({
                animated: 'fade',
                placement: 'left',
                html: true
            });
            
            /* Bootstrap Switch */
            $('[type="checkbox"]').bootstrapSwitch();
        </script>
        <?php endif; ?>
        
        <?php if(uri_string() == ('nintcp/emailbox/INBOX')): ?>
        <script src="<?php echo base_url( 'assets/admincp/js/plugin/icheck.min.js' ); ?>"></script>
        <script>
        $(function () {
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            $('.mailbox-messages input[type="checkbox"]').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });

            //Enable check and uncheck all functionality
            $(".checkbox-toggle").click(function () {
                var clicks = $(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                    $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
                } else {
                    //Check all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("check");
                    $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
                }
                $(this).data("clicks", !clicks);
            });

            //Handle starring for glyphicon and font awesome
            $(".mailbox-star").click(function (e) {
                e.preventDefault();
                //detect type
                var $this = $(this).find("a > i");
                var glyph = $this.hasClass("glyphicon");
                var fa = $this.hasClass("fa");

                //Switch states
                if (glyph) {
                    $this.toggleClass("glyphicon-star");
                    $this.toggleClass("glyphicon-star-empty");
                }

                if (fa) {
                    $this.toggleClass("fa-star");
                    $this.toggleClass("fa-star-o");
                }
            });
        });
        </script>
        <?php endif; ?>
        
        <!-- Blogs Lists -->
        <?php if(uri_string() == ('nintcp/allblogs')): ?>
        <script src="<?php echo base_url( 'assets/admincp/js/plugin/generaljslibs.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/admincp/js/bootstrap-switch.min.js' ); ?>"></script>
        <script>
            /* Tooltip */
            $('a[data-toggle="tooltip"]').tooltip({
                animated: 'fade',
                placement: 'left',
                html: true
            });
            
            /* Bootstrap Switch */
            $('[type="checkbox"]').bootstrapSwitch();
        </script>
        <?php endif; ?>
        <!-- Radio ve Checkbox -->
        <script src="<?php echo base_url( 'assets/admincp/js/plugin/icheck.min.js' ); ?>"></script>
        <script>
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            $('input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });
            //Red color scheme for iCheck
            $('input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
            });
            
            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            });
            
        </script>
        
        <!-- Sosyal Medya Ayarları Lists -->
        <?php if(uri_string() == ('nintcp/sosialmedialinks')): ?>
        <script type="text/javascript">
            $(document).ready(function()
            {
                var cnt = 2;
                $("#addCF").click(function(){
                    $("#westarz").append(
                        '<tr><td>' +
                            '<div class="col-md-3">' +
                                '<div class="form-group">' +
                                    '<label for=""><?php echo _nint( 'Sosyal Medya Adı:' ); ?></label>' +
                                    '<input type="text" name="_x_sosialmedia_name[]" class="form-control" value="" id="">' +
                                '</div>' +
                            '</div>' +
                            '<div class="col-md-5">' +
                                '<div class="form-group">' +
                                    '<label for=""><?php echo _nint( 'Sosyal Medya Linki' ); ?></label>' +
                                    '<input type="url" name="_x_sosialmedia_url[]" class="form-control" value="" id="">' +
                                '</div>' +
                            '</div>' +
                            '<div class="col-md-3">' +
                                '<div class="form-group">' +
                                    '<label><?php echo _nint( 'Sosyal Medya ikonu' ); ?></label>' +
                                    '<select name="_x_sosialmedia_icon[]" class="fontawesome-select form-control">' +
                                        <?php foreach($AMenuIconLists AS $AmenuIcon): ?>
                                        '<option value="<?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?>">&#x<?php echo $AmenuIcon->content; ?>; <?php echo $AmenuIcon->fontprefix . ' ' . $AmenuIcon->fontitle; ?></option>' +
                                        <?php endforeach; ?>
                                    '</select>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col-md-1">' +
                                '<a href="javascript:void(0);" class="btn btn-primary" id="remCF" style="display: block; margin-top: 25px; margin-left: -10px; margin-right: -20px;"><?php echo _nint( 'Sil' ); ?></a>' +
                            '</div>' +
                        '</td></tr>'
                    );
                    cnt++;
                });
                $("#westarz").on('click','#remCF',function()
                {
                    if (confirm("Silmek istediğinizden emin misiniz?"))
                    {
                        console.log($(this).parent().parent().remove());
                    }
                });
            });
        </script>
        <?php endif; ?>
        
        <script>
            $('input[type="checkbox"]#userRoles').click(function() {
                if(this.checked)
                {
                    //console.log($(this).attr('rel'));
                    $.post(URL + 'recordscp/newusersrolesmenurecordscp', {userid: $(this).attr('rel'), userRolesvalue: $(this).attr('name'), value: 1}, function(data){
                        console.log(data);
                    });
                } else {
                    //console.log("vazgeçildi");
                    $.post(URL + 'recordscp/newusersrolesmenurecordscp', {userid: $(this).attr('rel'), userRolesvalue: $(this).attr('name'), value: 0}, function(data){
                        console.log(data);
                    });
                }
            });
        </script>
        
        <script>
            /* Tooltip */
            $('a[data-toggle="tooltip"]').tooltip({
                animated: 'fade',
                placement: 'left',
                html: true
            });
            
            /* Geçici Olarak popup uyarı paneli */
            function confirmDel()
            {
                var agree = confirm("Bu içeriği silmek istediğinizden emin misiniz?");
                if (agree)
                {
                    return true;
                } else {
                    return false;
                }
            }
            
            function confirmReply()
            {
                var agree = confirm("Bu içeriği geri almak istediğinizden emin misiniz?");
                if (agree)
                {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    </body>
</html>