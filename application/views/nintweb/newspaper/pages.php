                    <div id="main-content">
                        <div id="main-col" class="col-b">
                            
                            <?php mainContentHeader( $urlTitle ); ?>
                            
                            <section class="entry-box clearfix">
                                <article class="entry-box-left clearfix">
                                    <h1 class="entry-title"><?php echo $pageShow->postitle; ?></h1>
                                    <img class="entry-thumb" src="<?php echo base_url( 'assets/nintweb/' . $pageShow->postype . 'photo/' . getPhotoParser( $pageShow ) ); ?>" alt="" />
                                    <div class="entry-content">
                                        <p><?php echo getPostsExlode( $pageShow->postcontent, 0 ); ?></p>
                                    </div><!--entry-content-->
                                </article><!--entry-box-left-->
                                <div class="entry-item-right last">
                                    <div class="entry-date">
                                        <p><?php echo getPostBlogsDate( $pageShow->postdate, 'Month' ); ?></p>
                                        <br>
                                        <span><?php echo getPostBlogsDate( $pageShow->postdate, 'Year' ); ?></span>
                                    </div><!--entry-date-->
                                    <a class="entry-comment" href="#"><i class="icon-comments"></i><?php echo $pageShow->commentcount; ?> &nbsp; <?php echo _nint( 'Yorum' ); ?></a>
                                    <span class="entry-meta"><i class="icon-user"></i><?php echo _nint( 'Ekleyen: ' ); ?>&nbsp;<a class="entry-author" href="#"><?php echo $pageShow->username; ?></a></span>
                                </div><!--entry-item-right-->
                                <div class="clear"></div>
                                <div class="postPages">
                                    <?php echo getPostsExlode( $pageShow->postcontent, 1 ); ?>
                                </div>
                                <div class="kp-tag-box">
                                    <i class="icon-tags icon-2x"></i>
                                    <a class="kp-tag" href="#">action</a><span>,&nbsp;</span>
                                    <a class="kp-tag" href="#">auto</a><span>,&nbsp;</span>
                                    <a class="kp-tag" href="#">cars</a><span>,&nbsp;</span>
                                    <a class="kp-tag" href="#">events</a><span>,&nbsp;</span>
                                    <a class="kp-tag" href="#">Games</a><span>,&nbsp;</span>
                                    <a class="kp-tag" href="#">hight</a>
                                </div><!--kp-tag-box-->
                                <footer class="clearfix">
                                    <p class="prev-post">
                                        <a href="#">Prev:&nbsp;</a><a href="#">Lorem ipsum dolor sit amet adipiscing</a>
                                    </p>
                                    <p class="next-post">
                                        <a href="#">Next:&nbsp;</a><a href="#">Curabitur vel mi sit amet magna malesuada ultrices</a>                                
                                    </p>
                                </footer>
                            </section><!--entry-box-->
                            <article class="about-author clearfix">
                                <div class="author-avatar">
                                    <a class="avatar-thumb" href="#"><img src="placeholders/avatar/author.jpg" alt="" /></a>
                                    <a href="#">Louis Gubitosi</a>
                                </div><!--author-avatar-->
                                <div class="author-content">
                                    <h3>About the author</h3>
                                    <p>Duis sed tellus et tortor vestibulum gravida. Praesent elementum elit at tellus. Curabitur metus ipsum, luctus eu, malesuada ut, tincidunt sed, diam. Donec quis mi sed magna hendrerit accumsan. Duis sed tellus et tortor vestibulum gravida. Praesent elementum elit at tellus. Curabitur metus ipsum, luctus eu, malesuada ut, tincidunt sed, diam. Donec quis mi sed magna hendrerit accumsan. Duis sed tellus et tortor vestibulum gravida. Praesent elementum elit at tellus. Curabitur metus ipsum, luctus eu, malesuada ut, tincidunt sed, diam. Donec quis mi sed magna hendrerit accumsan. Duis sed tellus et tortor vestibulum gravida.</p>
                                    <ul class="clearfix social-link">
                                        <li>Follow:</li>
                                        <li class="facebook-icon">
                                            <a target="_blank" title="Facebook" class="facebook" href="#">Twitter</a>
                                        </li>
                                        <li>|</li>
                                        <li class="twitter-icon">
                                            <a target="_blank" title="Twitter" class="twitter" href="#">Facebook</a>
                                        </li>
                                    </ul><!--social-link-->
                                </div><!--author-content-->
                            </article><!--about-author-->
                            <div id="comments">
                                <h3>10 Comments</h3>
                                <ol class="comments-list clearfix">
                                    <li class="comment clearfix">
                                        <article class="comment-wrap clearfix"> 
                                            <div class="comment-avatar">
                                                <p>
                                                    <img src="placeholders/avatar/avatar-1.jpg" alt="" />
                                                </p>
                                                <a href="#" class="comment-edit-link">Edit</a>
                                                <span>/</span>
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <span class="author">Adrian Mato</span>
                                                    <span class="date">-&nbsp;&nbsp;3 hours ago</span>
                                                </div><!-- end:comment-meta -->                        
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.</p>
                                                <a href="www.kopatheme.com">www.kopatheme.com</a>                                        
                                            </div><!--comment-body -->
                                        </article>                                                                               
                                    </li>
                                    <li class="comment clearfix">
                                        <article class="comment-wrap clearfix"> 
                                            <div class="comment-avatar">
                                                <p>
                                                    <img src="placeholders/avatar/avatar-2.jpg" alt="" />
                                                </p>
                                                <a href="#" class="comment-edit-link">Edit</a>
                                                <span>/</span>
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <span class="author">Admin</span><em>Reply</em><span class="author">Adrian Mato</span>
                                                    <span class="date">-&nbsp;&nbsp;3 hours ago</span>
                                                </div><!-- end:comment-meta -->                        
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.</p>
                                                <a href="www.kopatheme.com">www.kopatheme.com</a>                                        
                                            </div><!--comment-body -->
                                        </article>                                                                               
                                    </li>
                                    <li class="comment clearfix">
                                        <article class="comment-wrap clearfix"> 
                                            <div class="comment-avatar">
                                                <p>
                                                    <img src="placeholders/avatar/avatar-3.jpg" alt="" />
                                                </p>
                                                <a href="#" class="comment-edit-link">Edit</a>
                                                <span>/</span>
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <span class="author">Admin</span><em>Reply</em><span class="author">Adrian Mato</span>
                                                    <span class="date">-&nbsp;&nbsp;3 hours ago</span>
                                                </div><!-- end:comment-meta -->                        
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.</p>
                                                <a href="www.kopatheme.com">www.kopatheme.com</a>                                        
                                            </div><!--comment-body -->
                                        </article>                                                                               
                                    </li>                       

                                </ol><!--end:comments-list-->
                                <center class="pagination">
                                    <ul class="clearfix">
                                        <li><a href="#">&laquo; Previous</a></li>
                                        <li class="current"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Next &raquo;</a></li>
                                    </ul>
                                </center>
                                <div class="clear"></div>
                            </div><!--end:comments-->
                            <div id="respond">
                                <h3>Leave a Reply</h3>               
                                <form id="comments-form" class="clearfix" action="processForm.php" method="post">                
                                    <span class="c-note">Your email address will not be published. Required fields are marked *</span>
                                    <div class="comment-left">
                                        <p class="input-block">
                                            <label class="required" for="comment_name">Name<em>(required)</em>:</label>
                                            <input class="valid" type="text" name="name" id="comment_name" value="">
                                        </p>
                                        <p class="input-block">
                                            <label class="required" for="comment_email">Email<em>(required)</em>:</label>
                                            <input type="email" class="valid" name="email" id="comment_email" value="">
                                        </p>
                                        <p class="input-block">                                                
                                            <label class="required" for="comment_url">Website:</label>
                                            <input type="text" id="comment_url" value="" class="valid" name="url">                                                
                                        </p>
                                        <p class="comment-button">                    
                                            <input type="submit" id="submit-comment" value="Comment &raquo;">
                                        </p>
                                    </div>
                                    <div class="comment-right">
                                        <p class="textarea-block">                        
                                            <label class="required" for="comment_message">Your comment<em>(required)</em>:</label>
                                            <textarea rows="6" cols="88" id="comment_message" name="message"></textarea>
                                        </p>
                                    </div>
                                    <div class="clear"></div>                                                    
                                </form>
                                <div id="response"></div>
                            </div><!--end:respond-->
                            <section class="related-widget">
                                <h3>Related article</h3>
                                <ul class="kp-entry-list clearfix">
                                    <li>
                                        <article class="clearfix">
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-1.jpg" alt="" /></a>
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
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-2.jpg" alt="" /></a>
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
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-3.jpg" alt="" /></a>
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
                                            <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-4.jpg" alt="" /></a>
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
                                </ul><!--kp-entry-list-->
                            </section><!--related-widget-->

                        </div><!--main-col-->
                        <div id="sidebar" class="col-a">
                            <aside class="widget">
                                <div class="search-box clearfix">
                                    <form action="#" class="search-form" method="get">
                                        <input type="text" onBlur="if (this.value == '')
                                                    this.value = this.defaultValue;" onFocus="if (this.value == this.defaultValue)
                                                    this.value = '';" value="Search this site" name="s" class="search-text">
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
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-2.jpg" alt="" /></a>
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
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-3.jpg" alt="" /></a>
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
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-4.jpg" alt="" /></a>
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
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-2.jpg" alt="" /></a>
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
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-3.jpg" alt="" /></a>
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
                                                    <a class="kp-thumb" href="#"><img class="kp-hover" src="placeholders/65x65/65x65-4.jpg" alt="" /></a>
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
                                        </ul><!--kp-entry-list-->
                                    </div><!--tab-content-1-->            
                                </div><!--tab-container-1-->
                            </aside><!--widget-->
                            <aside class="widget">
                                <h3 class="widget-title"><span>Archieve</span></h3>
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
                            <aside class="widget">
                                <h3 class="widget-title"><span>Categories</span></h3>
                                <ul class="kp-categories">
                                    <li><i class="icon-circle-arrow-right"></i><a href="#">Coding</a><span>&nbsp;(20)</span></li>
                                    <li><i class="icon-circle-arrow-right"></i><a href="#">Freebies</a><span>&nbsp;(50)</span></li>
                                    <li><i class="icon-circle-arrow-right"></i><a href="#">Inspiration</a><span>&nbsp;(25)</span></li>
                                    <li><i class="icon-circle-arrow-right"></i><a href="#">Tutorials</a><span>&nbsp;(10)</span></li>
                                </ul><!--kp-categories-->
                            </aside><!--widget-->
                            <aside class="widget">
                                <div class="acc-wrapper">
                                    <div class="accordion-title">
                                        <h3><a href="#">Accordion title 1</a></h3>
                                    </div>
                                    <div class="accordion-container">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    </div>
                                    <div class="accordion-title">
                                        <h3><a href="#">Accordion title 2</a></h3>
                                    </div>
                                    <div class="accordion-container">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    </div>
                                    <div class="accordion-title">
                                        <h3><a href="#">Accordion title 3</a></h3>
                                    </div>
                                    <div class="accordion-container">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    </div>
                                </div><!--end:acc-wrapper-->
                            </aside><!--widget-->
                        </div><!--sidebar-->
                        <div class="clear"></div>
                    </div><!--main-content-->