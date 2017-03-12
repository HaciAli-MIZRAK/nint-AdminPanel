                    <div id="main-content">
                        <div id="main-col" class="col-b">
                            <!-- Sliders Box -->
                            <section class="slider-wrapper">
                                <!-- <h1><span>Breaking news</span></h1>-->
                                <div class="flexslider" id="home-slider">
                                    <ul class="slides">
                                        <?php for($i = 0;$i < count($sliderShow);$i++): ?>
                                        <?php if($sliderShow[$i]->metakey == '__postsphoto'): ?>
                                        <li>
                                            <article>
                                                <div class="kp-view">
                                                    <img src="<?php echo base_url( 'assets/nintweb/slidersphoto/' . getPhotoParser( $sliderShow[$i] ) ); ?>" alt="<?php echo $sliderShow[$i]->postitle; ?>" />
                                                    <a class="kp-mask" href="<?php echo site_url($sliderShow[$i]->postseoname); ?>"></a>
                                                </div><!--kp-view-->
                                                <div class="flex-caption">
                                                    <h1><a href="<?php echo site_url($sliderShow[$i]->postseoname); ?>"><?php echo $sliderShow[$i]->postitle; ?></a></h1>
                                                    <p>
                                                        <span class="entry-meta"><?php echo _nint( 'Tarih: ' ); ?>&nbsp;</span>
                                                        <span class="entry-date"><?php echo getTimeToDate( $sliderShow[$i]->postdate ); ?></span>
                                                        <span class="entry-meta">&nbsp;-&nbsp;<?php echo _nint( 'Ekleyen: ' ); ?>&nbsp;</span>
                                                        <a class="entry-author" href="#"><?php echo $sliderShow[$i]->username; ?></a>
                                                        <span class="entry-meta">&nbsp;-&nbsp;</span>
                                                        <a class="entry-comment" href="#"><?php echo $sliderShow[$i]->commentcount; ?> &nbsp; <?php echo _nint( 'Yorum' ); ?></a>
                                                    </p>
                                                </div><!--flex-caption-->
                                            </article>
                                        </li>
                                        <?php endif; ?>
                                        <?php endfor; ?>
                                    </ul>
                                </div><!--home-slider-->
                            </section><!--slider-wrapper-->
                            <!-- ./end Sliders Box -->
                            
                            <div class="main-two-third">
                                <div class="widget-area-1">
                                    <section class="widget">
                                        <h2 class="widget-title"><span>Fashion</span></h2>
                                        <article class="main-one-third">
                                            <div class="entry-thumb">
                                                <a href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/270x155/270x155-1.jpg'); ?>" alt="" /></a>
                                            </div><!--kp-thumb-->
                                            <div class="entry-content">
                                                <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="info-meta">
                                                    <i class="icon-user-md"></i>
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a href="#" class="entry-author">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp</span>
                                                    <i class="icon-folder-open-alt"></i>
                                                    <span class="entry-meta">In:&nbsp;</span>
                                                    <a href="#" class="entry-categories">Wordpress</a>
                                                </div><!--info-meta-->
                                                <p>Martha Stewart had a really good pattern for a handbag…. you could rival her! good work Morbi sem justo, aliquam ut element</p>
                                            </div><!--entry-content-->
                                        </article><!--main-one-third-->
                                        <ul class="older-post main-one-third last">
                                            <li>
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-5.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                            <li>
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-2.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                            <li>
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-6.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                        </ul><!--older-post-->
                                        <div class="clear"></div>
                                    </section><!--widget-->
                                    <section class="widget">
                                        <h2 class="widget-title"><span>Fashion</span></h2>
                                        <article class="main-one-third">
                                            <div class="entry-thumb">
                                                <a href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/270x155/270x155-5.jpg'); ?>" alt="" /></a>
                                            </div><!--kp-thumb-->
                                            <div class="entry-content">
                                                <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="info-meta">
                                                    <i class="icon-user-md"></i>
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a href="#" class="entry-author">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp</span>
                                                    <i class="icon-folder-open-alt"></i>
                                                    <span class="entry-meta">In:&nbsp;</span>
                                                    <a href="#" class="entry-categories">Wordpress</a>
                                                </div><!--info-meta-->
                                                <p>Martha Stewart had a really good pattern for a handbag…. you could rival her! good work Morbi sem justo, aliquam ut element</p>

                                            </div><!--entry-content-->
                                        </article><!--main-one-third-->
                                        <ul class="older-post main-one-third last">
                                            <li>
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-5.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                            <li>
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-2.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                            <li>
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-6.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                        </ul><!--older-post-->
                                        <div class="clear"></div>
                                    </section><!--widget-->
                                </div><!--widget-area-1-->
                                <div class="widget-area-2">
                                    <section class="widget main-one-third">
                                        <h3 class="widget-title"><span>Life Style</span></h3>
                                        <article>
                                            <div class="entry-thumb">
                                                <a href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/270x155/270x155-2.jpg'); ?>" alt="" /></a>
                                            </div><!--kp-thumb-->
                                            <div class="entry-content">
                                                <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="info-meta">
                                                    <i class="icon-user-md"></i>
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a href="#" class="entry-author">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp</span>
                                                    <i class="icon-folder-open-alt"></i>
                                                    <span class="entry-meta">In:&nbsp;</span>
                                                    <a href="#" class="entry-categories">Wordpress</a>
                                                </div><!--info-meta-->
                                                <p>Martha Stewart had a really good pattern for a handbag…. you could rival her! good work Morbi sem justo, aliquam ut element</p>

                                            </div><!--entry-content-->
                                        </article>
                                        <ul class="older-post">
                                            <li class="clearfix">
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-7.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                            <li class="clearfix">
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-3.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                        </ul><!--older-post-->
                                    </section><!--widget-->
                                    <section class="widget main-one-third last">
                                        <h3 class="widget-title"><span>Business</span></h3>
                                        <article>
                                            <div class="entry-thumb">
                                                <a href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/270x155/270x155-3.jpg'); ?>" alt="" /></a>
                                            </div><!--kp-thumb-->
                                            <div class="entry-content">
                                                <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="info-meta">
                                                    <i class="icon-user-md"></i>
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a href="#" class="entry-author">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp</span>
                                                    <i class="icon-folder-open-alt"></i>
                                                    <span class="entry-meta">In:&nbsp;</span>
                                                    <a href="#" class="entry-categories">Wordpress</a>
                                                </div><!--info-meta-->
                                                <p>Martha Stewart had a really good pattern for a handbag…. you could rival her! good work Morbi sem justo, aliquam ut element</p>

                                            </div><!--entry-content-->
                                        </article>
                                        <ul class="older-post">
                                            <li class="clearfix">
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-8.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                            <li class="clearfix">
                                                <article class="clearfix">
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/65x65/65x65-9.jpg'); ?>" alt="" /></a>
                                                    <div class="entry-content">
                                                        <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                        <div class="info-meta">
                                                            <i class="icon-user-md"></i>
                                                            <span class="entry-meta">By:&nbsp;</span>
                                                            <a href="#" class="entry-author">Admin</a>
                                                            <span class="entry-meta">&nbsp;-&nbsp</span>
                                                            <i class="icon-folder-open-alt"></i>
                                                            <span class="entry-meta">In:&nbsp;</span>
                                                            <a href="#" class="entry-categories">Wordpress</a>
                                                        </div><!--info-meta-->
                                                    </div><!--entry-content-->
                                                </article>
                                            </li>
                                        </ul><!--older-post-->
                                    </section><!--widget-->
                                </div><!--widget-area-2-->                        
                            </div><!--main-two-third-->
                            <div class="main-one-third last">
                                <aside class="widget">
                                    <h3 class="widget-title"><span>Latest tweets</span></h3>
                                    <div class="twitter-widget">
                                        <div class='twitter_outer'>
                                            <input type='hidden' class='tweet_id' value='envato'>
                                            <input type='hidden' class='tweet_count' value='3'>
                                            <div class='twitter_inner clearfix'></div>
                                        </div><!--twitter_outer-->
                                    </div><!--twitter-widget-->
                                </aside><!--widget--> 
                                <aside class="widget">
                                    <ul class="kp-adv-125 clearfix">
                                        <li><a href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/125x125/125x125-1.jpg'); ?>" alt="" /></a></li>
                                        <li><a href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/125x125/125x125-2.jpg'); ?>" alt="" /></a></li>
                                        <li><a href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/125x125/125x125-3.jpg'); ?>" alt="" /></a></li>
                                        <li><a href="#"><img class="kp-hover" src="<?php echo base_url('assets/nintweb/newspaper/placeholders/125x125/125x125-4.jpg'); ?>" alt="" /></a></li>
                                    </ul><!--kp-gallery-->
                                </aside><!--widget-->


                                <aside class="widget">
                                    <h3 class="widget-title"><span>Categories</span></h3>
                                    <ul class="kp-categories">
                                        <li><i class="icon-double-angle-right"></i><a href="#">Coding</a><span>&nbsp;(20)</span></li>
                                        <li><i class="icon-double-angle-right"></i><a href="#">Freebies</a><span>&nbsp;(50)</span></li>
                                        <li><i class="icon-double-angle-right"></i><a href="#">Inspiration</a><span>&nbsp;(25)</span></li>
                                        <li><i class="icon-double-angle-right"></i><a href="#">Tutorials</a><span>&nbsp;(10)</span></li>
                                    </ul><!--kp-categories-->
                                </aside><!--widget-->
                            </div><!--main-one-third-->
                            <div class="clear"></div>
                        </div><!--main-col-->
                        <?php require_once 'side-bar.php'; // sol side barı ekliyoruz. ?>
                        <div class="clear"></div>
                    </div><!--main-content-->
             