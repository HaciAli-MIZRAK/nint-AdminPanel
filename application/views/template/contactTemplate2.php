            <div id="main-content">                
                <div id="main-col" class="col-b">
                    
                    <?php mainContentHeader( $urlTitle ); ?>
                    
                    <div id="respond">
                        <div class="contact-form-header">
                            <p><?php echo $pageShow->postcontent; ?></p>
                        </div><!--contact-form-header-->
                        <h3><?php echo $pageShow->postitle; ?> &nbsp; <?php echo _nint( 'FORMU' ); ?></h3>               
                        <form id="contact-form" class="clearfix" action="<?php echo base_url('mailform/websitecontactform'); ?>" method="post">
                            <span class="c-note"><?php echo _nint( 'Lütfen Gerekli Alanları Doldurun *' ); ?></span>
                            <div class="contact-left">
                                <p class="input-block">
                                    <label class="required" for="contact_name"><?php echo _nint( 'Adınız: ' ); ?><em>(*)</em>:</label>
                                    <input class="valid" type="text" name="name" id="contact_name" value="">
                                </p>
                                <p class="input-block">
                                    <label class="required" for="contact_email"><?php echo _nint( 'E-mail Adresiniz: ' ); ?><em>(*)</em>:</label>
                                    <input type="email" class="valid" name="email" id="contact_email" value="">
                                </p>
                                <p class="input-block">                                                
                                    <label class="required" for="contact_website"><?php echo _nint( 'WebSiteniz: ' ); ?></label>
                                    <input type="text" id="contact_url" value="" class="valid" name="website">                                                
                                </p>
                                <p class="comment-button">                    
                                <input type="submit" id="submit-contact" value="<?php echo _nint( 'Gönder' ); ?> &raquo;">
                                </p>
                            </div>
                            <div class="contact-right">
                                <p class="input-block">                                                
                                    <label class="required" for="contact_subject"><?php echo _nint( 'Konu Başlığı: ' ); ?></label>
                                    <input type="text" id="contact_subject" value="" class="valid" name="subject">                                                
                                </p>
                                <p class="textarea-block">                        
                                    <label class="required" for="contact_message"><?php echo _nint( 'Konu içeriği: ' ); ?><em>(*)</em>:</label>
                                    <textarea rows="6" cols="88" id="contact_message" name="message"></textarea>
                                </p>
                            </div>
                            <div class="clear"></div>                                                    
                        </form>
                        <div id="response"></div>
                    </div><!--respond-->                    
                    <div class="kp-map">
                    	<h3><?php echo _nint( 'Biz neredeyiz?' ); ?></h3>
                        <iframe width="100%" scrolling="no" height="435" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.1482517180275!2d29.440744813190477!3d40.80273588729258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb2092b8a2c849%3A0x6cf176715d5f2309!2sArap%C3%A7e%C5%9Fme%2C+Kavak+Cd.+2-1%2C+41400+Gebze%2FKocaeli!5e0!3m2!1str!2str!4v1476831675252" marginwidth="0" marginheight="0" class="google-map"></iframe>
                    </div><!--kp-map-->
                </div><!--main-col-->
                <div id="sidebar" class="col-a">
                    <aside class="widget">
                        <div class="search-box clearfix">
                            <form action="#" class="search-form" method="get">
                                <input type="text" onBlur="if(this.value=='')this.value=this.defaultValue;" onFocus="if(this.value==this.defaultValue)this.value='';" value="Search this site" name="s" class="search-text">
                                <input type="submit" value="" name="submit" class="search-submit">
                            </form><!-- search-form -->
                        </div><!--search-box-->
                    </aside><!--widget-->
                    <aside class="widget">
                        <div class="list-container-1">
                            <ul class="tabs-1 clearfix">
                                <li class="first-tab"><a href="#tab-1-1"><i class="icon-time"></i></a></li>
                                <li><a href="#tab-1-2"><i class="icon-comments"></i></a></li>
                                <li><a href="#tab-1-3"><i class="icon-tags"></i></a></li>
                            </ul><!--tabs-1-->
                        </div><!--list-container-1-->
                        <div class="tab-container-1">
                            <div id="tab-1-1" class="tab-content-1">                        
                                <ul class="kp-entry-list">
                                    <li>
                                        <article class="clearfix">
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-1.jpg" alt="" /></a>
                                            <div class="entry-content">
                                                <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                <div class="info-meta">
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a class="entry-author" href="#">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp;In:&nbsp;</span>
                                                    <a class="entry-categories" href="#">Wordpress</a>
                                                </div><!--info-meta-->
                                            </div><!--entry-content-->
                                        </article>
                                    </li>
                                    <li>
                                        <article class="clearfix">
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-2.jpg" alt="" /></a>
                                            <div class="entry-content">
                                                <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                <div class="info-meta">
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a class="entry-author" href="#">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp;In:&nbsp;</span>
                                                    <a class="entry-categories" href="#">Wordpress</a>
                                                </div><!--info-meta-->
                                            </div><!--entry-content-->
                                        </article>
                                    </li>
                                    <li>
                                        <article class="clearfix">
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-3.jpg" alt="" /></a>
                                            <div class="entry-content">
                                                <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                <div class="info-meta">
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a class="entry-author" href="#">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp;In:&nbsp;</span>
                                                    <a class="entry-categories" href="#">Wordpress</a>
                                                </div><!--info-meta-->
                                            </div><!--entry-content-->
                                        </article>
                                    </li>
                                    <li>
                                        <article class="clearfix">
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-4.jpg" alt="" /></a>
                                            <div class="entry-content">
                                                <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                <div class="info-meta">
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a class="entry-author" href="#">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp;In:&nbsp;</span>
                                                    <a class="entry-categories" href="#">Wordpress</a>
                                                </div><!--info-meta-->
                                            </div><!--entry-content-->
                                        </article>
                                    </li>
                                </ul><!--kp-entry-list-->
                            </div><!--tab-content-1-->
                            <div id="tab-1-2" class="tab-content-1">                        
                                <ul class="kp-comment-list">
                                    <li>
                                        <a class="entry-author" href="#">Admin</a><span class="entry-meta">&nbsp;on&nbsp;</span>
                                        <a href="#" class="comment-title">"Lorem ipsum dolor sit amet, consectetuer adipiscing elit"</a>                                            
                                    </li>
                                    <li>
                                        <a class="entry-author" href="#">Nicole Kidman</a><span class="entry-meta">&nbsp;on&nbsp;</span>
                                        <a href="#" class="comment-title">"Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa."</a>                                            
                                    </li>
                                    <li>
                                        <a class="entry-author" href="#">John Henry</a><span class="entry-meta">&nbsp;on&nbsp;</span>
                                        <a href="#" class="comment-title">"Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh"</a>                                            
                                    </li>
                                    <li>
                                        <a class="entry-author" href="#">Angelina Jolie</a><span class="entry-meta">&nbsp;on&nbsp;</span>
                                        <a href="#" class="comment-title">"Maecenas at justo id velit placerat molestie"</a>                                            
                                    </li>
                                </ul><!--kp-comment-list-->
                            </div><!--tab-content-1-->
                            <div id="tab-1-3" class="tab-content-1">                        
                                <ul class="kp-entry-list">
                                    <li>
                                        <article class="clearfix">
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-1.jpg" alt="" /></a>
                                            <div class="entry-content">
                                                <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                <div class="info-meta">
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a class="entry-author" href="#">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp;In:&nbsp;</span>
                                                    <a class="entry-categories" href="#">Wordpress</a>
                                                </div><!--info-meta-->
                                            </div><!--entry-content-->
                                        </article>
                                    </li>
                                    <li>
                                        <article class="clearfix">
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-2.jpg" alt="" /></a>
                                            <div class="entry-content">
                                                <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                <div class="info-meta">
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a class="entry-author" href="#">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp;In:&nbsp;</span>
                                                    <a class="entry-categories" href="#">Wordpress</a>
                                                </div><!--info-meta-->
                                            </div><!--entry-content-->
                                        </article>
                                    </li>
                                    <li>
                                        <article class="clearfix">
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-3.jpg" alt="" /></a>
                                            <div class="entry-content">
                                                <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                <div class="info-meta">
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a class="entry-author" href="#">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp;In:&nbsp;</span>
                                                    <a class="entry-categories" href="#">Wordpress</a>
                                                </div><!--info-meta-->
                                            </div><!--entry-content-->
                                        </article>
                                    </li>
                                    <li>
                                        <article class="clearfix">
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-4.jpg" alt="" /></a>
                                            <div class="entry-content">
                                                <a class="post-title" href="#">Senate teams clash over a schedule for debat</a>
                                                <div class="info-meta">
                                                    <span class="entry-meta">By:&nbsp;</span>
                                                    <a class="entry-author" href="#">Admin</a>
                                                    <span class="entry-meta">&nbsp;-&nbsp;In:&nbsp;</span>
                                                    <a class="entry-categories" href="#">Wordpress</a>
                                                </div><!--info-meta-->
                                            </div><!--entry-content-->
                                        </article>
                                    </li>
                                </ul><!--kp-entry-list-->
                            </div><!--tab-content-1-->            
                        </div><!--tab-container-1-->
                    </aside><!--widget-->
                    <aside class="widget">
                        <h3 class="widget-title"><span>Archive</span></h3>
                        <ul class="kp-archieve">
                            <li><i class="icon-calendar"></i><a href="#">October 2013 (4)</a></li>
                            <li><i class="icon-calendar"></i><a href="#">September 2013 (400)</a></li>
                            <li><i class="icon-calendar"></i><a href="#">August 2013 (300)</a></li>
                            <li><i class="icon-calendar"></i><a href="#">July 2013 (11)</a></li>
                        </ul><!--kp-archieve-->
                    </aside><!--widget-->
                    <aside class="widget">
                    	<div class="kp-adv-300">
                        	<a href="#"><img class="kp-hover" src="placeholders/banner-300.png" alt="" /></a>
                        </div><!--kp-adv-300-->
                    </aside><!--widget-->                   
                </div><!--sidebar-->
                <div class="clear"></div>
            </div><!--main-content-->