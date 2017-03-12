        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url( 'assets/admincp/js/jquery.min.js' ); ?>"></script>
        <!-- Jquery UI -->
        <script src="<?php echo base_url( 'assets/admincp/js/jquery-ui.min.js' ); ?>"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url( 'assets/admincp/js/bootstrap.min.js' ); ?>"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url( 'assets/admincp/js/plugin/icheck.min.js' ); ?>"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>