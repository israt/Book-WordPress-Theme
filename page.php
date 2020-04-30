<?php

/************

 *  This is Common page Template file *


 ***********/

get_header(); ?>

  <!--inner-head ends.....-->
    <section class="inner-body">
    	<div class="row">
        	<div class="container">
            	<div class="full-blog-details">
                        
                    <div class="col-md-9">
                    	<h1>Blog Post Heading</h1>
                        <div class="border-blog">
                        <hr/>
                   		</div>
                    	<div class="inner-blog-img-details">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog-inner.jpg" alt="">
                        </div>
                        <div class="blog-inner-details">
                            <div class="blog_heading-inner-details">
                                <p>OCTOBER 24,2015 | 
                                    <a href="">Author Name</a> | 
                                    <a href="">Comments</a>
                                </p>
                            </div>
                            <div class="blog_post-inner-details">
                                <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <!--col-md-8 ends..-->
                    <div class="col-md-3">
                        <div class="blog-inner-details">
                            <div class="sidebar">
                                <h2>Latest Offer</h2>
                                <ul>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">simply dummy text</a></li>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">simply dummy text</a></li>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">simply dummy text</a></li>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">simply dummy text</a></li>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">simply dummy text</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                   <!--col-md-4 ends..--> 
                </div>
                
            </div>
        </div>
    </section>
    <!--inner-body ends.....-->
<?php get_footer(); ?>