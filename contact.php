<?php

/************

 *  This is Common page Template file *
 *  Template Name: Contact 

 ***********/

get_header(); ?>
 <!--inner-page starts=================================-->
    <section class="inner-head">
    	<div class="row">
        	<div class="container">
            	<div class="col-md-12">
                	<div class="inner-heading">
                    	<h1>Newsletter Sign Up</h1>
                        <p>Keep informed of all the latest book offers from the UKs leading book retailers.</p>
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
            	<div class="col-md-6">
                	<div class="form_area_inner">
                            <form role="form">
                               <div class="form-group">
                                <label for="First">First Name:</label>
                                <input type="text" class="form-control" id="First">
                              </div>
                              <div class="form-group">
                                <label for="Last">Last Name:</label>
                                <input type="email" class="form-control"  id="Last">
                              </div>
                              <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                              </div>
                              <input type="submit" class="btn btn-default btn-form" value="Sign Up">
                            </form>
                        </div>
                </div>
                <div class="col-md-5">
                	<div class="contact-book">
                		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/book-contact.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--inner-body ends.....-->
    <!--inner-page ends=================================-->
    
<?php /*?>  
<div class="main-content">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12  top-25">
                    <div class="right-content">
                     <?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				?>
                          <h4 class="color"><?php the_title();?></h4>
                            <div class="right-content-text">
                            	<div class="training-center">
                                	<?php the_content();?>
                                </div>
                            </div>
                      </div>
                  </div>
            </div>
            
            <?php
	// End the loop.
	endwhile;
	?>  
            <div class="col-md-6">
            	<div class="contact-form">
                      <!--<h3>Contact Us</h3> -->
                           <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
                        </div>
            </div>
            <div class="col-md-6">
            	<div class="img-contact"> 
				<?php 
       $args = array(
       'post_type' => 'gallery',
         'orderby' => 'name',
         'order' => 'DESC',
         );
         $query = new WP_Query($args);
        if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
         $feat_image2 = '';
         if (has_post_thumbnail( $post->ID ) ){ 
         $feat_image2 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
         }
      ?>
                    <img src="<?php echo $feat_image2; ?>" alt="<?php the_title();?>">
                      <?php endwhile; 
         wp_reset_postdata();?> 
        <?php endif; ?>
                </div>
            </div>
    </div>
</div>
</div><?php */?>
<?php get_footer(); ?>