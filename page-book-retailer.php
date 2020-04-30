<?php



/************



 Template Name:  Book Retailers





 ***********/



get_header(); ?>



  <!--inner-page starts=================================-->

    <section class="inner-head">

    	<div class="row">

        	<div class="container">

            	<div class="col-md-12">

                	<div class="inner-heading">

                    	<h1>Book Retailers</h1>

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

                	<div class="inner-retail">

                    	 <?php

							$args = array(

							'post_type' => 'book-retailers',

							  'orderby' => 'name',

							  'order' => 'DESC',	

							  );					  

							  $query = new WP_Query($args);

								if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

								  $feat_image3= '';

									if (has_post_thumbnail( $post->ID ) ){ 

									$feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

									}

						  ?>

                    

                    

                    

                    	<div class="col-md-3 col-sm-3 col-lg-3">

                        	<div class="inner-retail-logo">

                                <a href="<?php $url = get_post_meta( get_the_ID(), 'url', true );    // check if the custom field has a value

   if( ! empty( $url ) ) { echo '' . $url . '';}  ?>" target="_blank">

                                    <img src="<?php echo $feat_image3; ?>"  alt="<?php the_title();  ?>"/>

                                </a>

                            </div>

                            <div class="inner-retail-title">

                                <p><?php the_title();  ?></p>

                            </div>

                        </div>

                        

                        <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>

                        

                        

                    

                    </div>

            </div>

        </div>

    </section>

    

    

  

<?php get_footer(); ?>