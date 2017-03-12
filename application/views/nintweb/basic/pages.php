        <!-- Start Features
        ==================================================
        -->
        <section id="features" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img class="col-md-12" src="<?php echo base_url( 'assets/nint/pagesphoto/' . getPhotoParser( getMetaParser( $pageShow->PMT, 0 ), 'file_name' ) ); ?>" style="display: block; max-height: 205px;" />
                    </div>
                    <h1></h1>
                    <div class="col-md-12">
                        <!-- Title -->
                        <div class="overview animate" data-animate="flipInX">
                            <h1><?php echo $pageShow->postitle; ?></h1>
                            <p class="lead"><?php echo $pageShow->postcontent; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features
        ==================================================
        -->
        <!-- Start Newsletter Block
        ==================================================
        -->
        <section id="newsletter" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview">
                            <h1><strong>Subscribe Newsletter</strong></h1>
                            <p class="lead">Join thousands of awesome people, there's only one thing to do. Subscribe !</p>
                        </div>
                        <form role="form">
                            <div class="input-group">
                                <input type="text" class="form-control input-lg" placeholder="Enter email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-lg btn-default" type="button">Subscribe Me</button>
                                    </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Newsletter Blcok
        ==================================================
        -->
