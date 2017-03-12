        <!-- Footer Bottom Area
            ============================================
            -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Copyright -->
                        <div class="copyright col-sm-6 col-xs-12 text-left">
                            <p><?php echo getOptionsParser( $webSiteOptions, '_sitecopyright' ); ?> | <a href="<?php echo getOptionsParser( $webSiteOptions, '_siteurl' ); ?>"> <?php echo getOptionsParser( $webSiteOptions, '_sitetitle' ); ?> </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
        ==================================================
        -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url( 'assets/nint/js/jquery-1.10.2.min.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/nint/js/bootstrap.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/nint/js/waypoints.min.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/nint/js/jquery.scrollto.min.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/nint/js/jquery.localscroll.min.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/nint/js/jquery.prettyPhoto.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/nint/js/scripts.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/globalert/sweetalert.min.js' ); ?>"></script>
        <!-- ********************* -->
        <!-- Google Map APi
        ============================================ -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
        <script>
            function initialize()
            {
                var mapOptions = {
                    zoom: 13,
                    scrollwheel: false,
                    center: new google.maps.LatLng(40.802537, 29.439870)
                };
                var map = new google.maps.Map(document.getElementById('contact-map'),
                    mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation: google.maps.Animation.BOUNCE,
                    map: map
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
            
            /* Geçici Olarak popup uyarı paneli */
            $('#LogoutButton').click(function(){
                swal(
                {
                    title: "Emin misiniz?",
                    text: "",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Evet!",
                    closeOnConfirm: false
                    }, function(){
                        window.location.href = 'login/logout.html';
                        //window.location.replace();
                });
            });
        </script>
        <!-- Start Rocket -->
    </body>
</html>