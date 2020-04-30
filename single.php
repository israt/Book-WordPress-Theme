<?php

/************

 *  This is single page Template file *


 ***********/

get_header(); ?>


<!--banner section starts...-->
    <section class="banner_area_inner_iblog">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="banner_text_inner_iblog">
                        <h2>BLOG INNER</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner section ends...-->
    <!--inner-head ends.....-->
    <section class="inner-body">
    	<div class="row">
        	<div class="container">
            	<div class="full-blog-details">
                        
                    <div class="col-md-9 col-sm-9">
                    	<h1>Blog Post Heading</h1>
                        <div class="border-blog">
                         <hr/>
                   		</div>
                    	<div class="inner-blog-img-details">
                            <img src="images/blog-inner.jpg" alt="">
                        </div>
                        <div class="blog-inner-details">
                            <div class="blog_heading-inner-details">
                                <p>Octeber 24,2015 | 
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
                    <div class="col-md-3 col-sm-3">
                        <div class="blog-inner-details2">
                           <div class="sidebar_blog">
                                <h2>Category</h2>
                                <ul>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">Category 1</a></li>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">Category 2</a></li>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">Category 3</a></li>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">Category 4</a></li>
                                	<li><i class="fa fa-check"></i>&nbsp;<a href="#">Category 5</a></li>
                                </ul>
                 		</div>
                         <div class="sidebar_blog margin2">
                                        <h2>Recent Posts</h2>
                                        <ul>
                                            <li><i class="fa fa-check"></i>&nbsp;<a href="#">Recent Post 1</a></li>
                                            <li><i class="fa fa-check"></i>&nbsp;<a href="#">Recent Post 2</a></li>
                                            <li><i class="fa fa-check"></i>&nbsp;<a href="#">Recent Post 3</a></li>
                                            <li><i class="fa fa-check"></i>&nbsp;<a href="#">Recent Post 4</a></li>
                                            <li><i class="fa fa-check"></i>&nbsp;<a href="#">Recent Post 5</a></li>
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
    
    
    

  <!--inner-head ends.....-->
    <section class="inner-body">
    	<div class="row">
        	<div class="container">
            	<div class="full-blog-details">
                         <?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				?>
                    <div class="col-md-9">
                    	<h1><?php the_title();?></h1>
                        <div class="border-blog">
                        <hr/>
                   		</div>
                    	<div class="inner-blog-img-details">
                        <?php
						
						 $feat_image3= '';
									if (has_post_thumbnail( $post->ID ) ){ 
									$feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
									}
						?>
                           <img src="<?php echo $feat_image3; ?>" alt="<?php the_title();  ?>" class="img-responsive">
                        </div>
                        <div class="blog-inner-details">
                            <div class="blog_heading-inner-details">
                                <p><?php echo get_the_date(); ?> | 
                                 By <?php the_author();  ?>  
                             <!--   <?php comments_number( 'no comment', 'one comment', '% comment' ); ?>-->
                            </p>
                            </div>
                            <div class="blog_post-inner-details">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                     <?php
	// End the loop.
	endwhile; ?>
                    <!--col-md-8 ends..-->
                    <div class="col-md-3">
                        <div class="blog-inner-details">
                            <div class="sidebar">
                                <h2>Latest Offer</h2>
                                <ul>
                                 
             <?php
				$args = array(
				'post_type' => 'post',
				  'orderby' => 'name',
				  'order' => 'DESC',	
				  );					  
				  $query = new WP_Query($args);
					if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
			
			  ?>
                          
                       <li><i class="fa fa-check"></i>&nbsp;<a href="<?php the_permalink();  ?>"><?php the_title();  ?></a></li>
                                
                        <?php endwhile; 
						 wp_reset_postdata();?>	
					    <?php endif; ?> 
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