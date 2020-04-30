<?php

/************

  Template Name:  Blog Template


 ***********/

get_header(); ?>
<!--inner-page starts=================================-->
    <section class="inner-head">
    	<div class="row">
        	<div class="container">
            	<div class="col-md-12">
                	<div class="inner-heading">
                    	<h1>Blog post page</h1>
                        <div class="border">
                        	<i class="fa fa-stop"></i>
                        <hr/>
                   		</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--inner-head ends.....-->
    <section class="inner-body">
    	<div class="row">
        	<div class="container">
            
             <?php
							$args = array(
							'post_type' => 'post',
							  'orderby' => 'name',
							  'order' => 'DESC',
							  'posts_per_page' => 15	
							  );					  
							  $query = new WP_Query($args);
								if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
								  $feat_image3= '';
									if (has_post_thumbnail( $post->ID ) ){ 
									$feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
									}
						  ?>
            	<div class="full-blog">
                    <div class="col-md-3 col-sm-5 ">
                        <div class="inner-blog-img">
                            <a href="<?php the_permalink();  ?>"><img src="<?php echo $feat_image3; ?>" alt="<?php the_title();  ?>" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-7">
                        <div class="blog-inner">
                            <div class="blog_heading-inner">
                                 <a href="<?php the_permalink();  ?>"><h2><?php the_title();  ?></h2></a>
                              <p><?php echo get_the_date(); ?> | 
                                 By <?php the_author();  ?>  
                             <!--   <?php comments_number( 'no comment', 'one comment', '% comment' ); ?>-->
                            </p>
                            </div>
                            <div class="blog_post-inner">
                                <p>  <?php echo substr(strip_tags($post->post_content), 0, 300); ?></p>
                                <div class="date-inner">
                                    <a href="<?php the_permalink();  ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--col-md-9 ends....-->
                </div>
                <div class="border-inner">
                        <hr/>
                </div>
                <!--full-blog ends...-->
                
           
             <?php endwhile; 
						 wp_reset_postdata();?>	
					    <?php endif; ?>
           
           
            </div>
        </div>
    </section>
    <!--inner-body ends.....-->
    <!--inner-page ends=================================-->

<?php get_footer(); ?>