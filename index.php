<?php



/************



 *  This is Home page main Template file *



 *  Template Name: HomePage



 ***********/



get_header(); ?>



    <!--banner starts -->

    <section class="banner_area">

    	<div class="row">

        	<div class="container">

            	<div class="col-md-9">

                	<div class="banner">

                    <!--carousel starts....-->

                    	<div id="myCarousel" class="carousel slide" data-ride="carousel">

                              <!-- Indicators -->

                              <ol class="carousel-indicators">

                                     <?php

							$args = array(

							'post_type' => 'slide',

							  'orderby' => 'id',

							  'order' => 'DESC',

							  );

								$query = new WP_Query($args);

								$first=0;

								$i=1;

								

							   if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

								if($first==0){

								?>

								 <li data-target="#myCarousel" data-slide-to="0" class="active">

								<?php  }  else {  ?>

								 <li data-target="#myCarousel" data-slide-to="<?php echo $i++; ?>">

								  <?php

							  }

							  $first++;

							 

								?>

								</li>

												

				

							   <?php endwhile;

							 wp_reset_postdata();?>	

							  <?php endif; ?> 

                              </ol>

                            

                              <!-- Wrapper for slides -->

                              <div class="carousel-inner" role="listbox">

                                           	 <?php

												$args = array(

												'post_type' => 'slide',

												  'orderby' => 'id',

												  'order' => 'DESC',

												  );

													$query = new WP_Query($args);

													$first=1;

												   if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

													if($first==1){

													?>

													<div class="item active">

													<?php  }  else {  ?>

													  <div class="item">

													  <?php

												  }

												  $first++;

												   $feat_image = '';

													if (has_post_thumbnail( $post->ID ) ){ 

													$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

													?>

													 <img src="<?php echo $feat_image; ?>" alt="<?php echo the_title(); ?>">

													 <!-- <div class="carousel-caption">

														<h3><?php the_title();  ?></h3>

													  <?php the_content(); ?>

													   

													  </div>-->

													<?php } ?>

									

												  </div>						

									

												   <?php endwhile;

												 wp_reset_postdata();?>	

												  <?php endif; ?>

                              </div>

                            

                              <!-- Left and right controls -->

                              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                                <span class="sr-only">Previous</span>

                              </a>

                              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                                <span class="sr-only">Next</span>

                              </a>

                            </div>

                            <!--carousel ends.........-->

                    </div>

                </div>

            	<div class="col-md-3">

                	<div class="row">

                        <div class="form_area">

                            <h2><?php echo of_get_option('head-text','no entry');?>

                            <span class="blue bold"><?php echo of_get_option('blue-text','no entry');?></span></h2>

							<?php echo do_shortcode('[mc4wp_form]'); ?>
                           <!-- <form role="form">

                              <div class="form-group">

                                <label for="email">Email address:</label>

                                <input type="email" class="form-control" placeholder="Enter Email"id="email">

                              </div>

                              <input type="submit" class="btn btn-default btn-form" value="Sign Up">

                            </form>
-->
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--banner ends -->

    <!--retailer starts=================================-->

    <section class="retailer_area">

    	<div class="container">

        	<div class="row">

            	<h1>Top Book Retailers</h1>

                	<div class="border">

                        	<i class="fa fa-stop"></i>

                        <hr/>

                   </div>

                	<div class="col-md-1 col-sm-1">&nbsp;</div>

                    	 <?php

							$args = array(

							'post_type' => 'book-retailers',

							  'orderby' => 'name',

							  'order' => 'DESC',

							  'posts_per_page' => 5	

							  );					  

							  $query = new WP_Query($args);

								if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

								  $feat_image3= '';

									if (has_post_thumbnail( $post->ID ) ){ 

									$feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

									}

						  ?>

                    <!--col-md-2 starts-->

                	<div class="col-md-2 col-sm-2">

                    	<div class="retailer">

                        	<div class="ratailer_img">

                            	<a href="<?php $url = get_post_meta( get_the_ID(), 'url', true );    // check if the custom field has a value

   if( ! empty( $url ) ) { echo '' . $url . '';}  ?>" target="_blank">

                                	 <img src="<?php echo $feat_image3; ?>"  alt="<?php the_title();  ?>"/>

                                </a>

                            </div>

                            <div class="ratailer_name">

                            	<p><?php the_title();  ?></p>

                            </div>

                        </div>

                    </div>

                    <!--col-md-2 ends-->

                         <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>

                        

                    

                    <div class="col-md-1 col-sm-1">&nbsp;</div>

            </div>

        </div>

    </section>

    <!--retailer ends=================================-->

    <!--latest-offers starts=================================-->

    <section class="latest">

    	<div class="row">

        	<div class="container">

            <h1>Latest Offers</h1>

            		<div class="border">

                        	<i class="fa fa-stop"></i>

                        <hr/>

                   </div>

                    <?php

							$args = array(

							'post_type' => 'post',

							  'orderby' => 'name',

							  'order' => 'DESC',

							  'posts_per_page' => 3	

							  );					  

							  $query = new WP_Query($args);

								if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

								  $feat_image3= '';

									if (has_post_thumbnail( $post->ID ) ){ 

									$feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

									}

						  ?>

            	<!--col-md-4 starts...-->

            	<div class="col-md-4">

                	<div class="blog">

                    	<div class="blog_img">

                        	 <img src="<?php echo $feat_image3; ?>" alt="<?php the_title();  ?>" class="img-responsive">

                        </div>

                        <div class="blog_heading">

                        	<h2><?php the_title();  ?></h2>

                            <p><?php echo get_the_date(); ?> | 

                                 By <?php the_author();  ?>  

                             <!--   <?php comments_number( 'no comment', 'one comment', '% comment' ); ?>-->

                            </p>

                        </div>

                        <div class="blog_post">

                        	<p>   <?php echo substr(strip_tags($post->post_content), 0, 200); ?></p>

                            <div class="date">

                               <a href="<?php the_permalink();  ?>">Read More</a>

                            </div>

                        </div>

                    </div>

                </div>

            	<!--col-md-4 ends...-->

                     <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>

               

            </div>

        </div>

    </section>

    <!--latest-offers ends=================================-->

    

    



<?php /*?>

<!--banner starts here......-->

<section class="main-banner">

	<div class="container">

    	<div class="row">

        	<div class="col-md-12">

            	<div class="banner">

                	<div id="myCarousel" class="carousel slide" data-ride="carousel">

                          <!-- Indicators -->

                          <ol class="carousel-indicators">

                            <?php

							$args = array(

							'post_type' => 'slide',

							  'orderby' => 'id',

							  'order' => 'DESC',

							  );

								$query = new WP_Query($args);

								$first=0;

								$i=1;

								

							   if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

								if($first==0){

								?>

								 <li data-target="#myCarousel" data-slide-to="0" class="active">

								<?php  }  else {  ?>

								 <li data-target="#myCarousel" data-slide-to="<?php echo $i++; ?>">

								  <?php

							  }

							  $first++;

							 

								?>

								</li>

												

				

							   <?php endwhile;

							 wp_reset_postdata();?>	

							  <?php endif; ?> 

                          </ol>

                        

                          <!-- Wrapper for slides -->

                          <div class="carousel-inner" role="listbox">

                          	 <?php

			$args = array(

			'post_type' => 'slide',

			  'orderby' => 'id',

			  'order' => 'DESC',

			  );

			    $query = new WP_Query($args);

				$first=1;

			   if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

			  	if($first==1){

				?>

				<div class="item active">

                <?php  }  else {  ?>

                  <div class="item">

                  <?php

			  }

			  $first++;

			   $feat_image = '';

				if (has_post_thumbnail( $post->ID ) ){ 

				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

				?>

                 <img src="<?php echo $feat_image; ?>" alt="<?php echo the_title(); ?>">

                  <div class="carousel-caption">

                    <h3><?php the_title();  ?></h3>

                  <?php the_content(); ?>

                   

                  </div>

				<?php } ?>



              </div>						



			   <?php endwhile;

             wp_reset_postdata();?>	

              <?php endif; ?> 

                            

                        

                           

                           

                           

                           

                           

                            </div>

                          </div>

                        

                        </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--banner ends here......-->

  

<div class="main-content">

	<div class="container">

    	<div class="row">

        	<div class="col-md-12 top-50">

                    <div class="right-content">

                    

                      <?php

				// Start the loop.

				while ( have_posts() ) : the_post();

				?>

                          <?php the_content(); ?>

                               <?php

	// End the loop.

	endwhile;

	?>  

                      </div>

                  </div>

                  <div class="row">

                  	<div class="container">

                                <div class="col-md-4 image-contain">

                                	<img src="<?php echo of_get_option('hi1','no entry');?>" class="img-responsive shadow " alt="<?php echo of_get_option('ht1','no entry');?>">

                                    <div class="textbox">

                                    <p class="text"><?php echo of_get_option('ht1','no entry');?></p><br/>

                                    <a href="<?php echo of_get_option('hl1','no entry');?>">View More [+]</a>

                                    </div>

                                    <p class="bottom"><a href="<?php echo of_get_option('hl1','no entry');?>"><?php echo of_get_option('ht1','no entry');?></a></p>

                                </div>

                                <div class="col-md-4 image-contain">

                                	<img src="<?php echo of_get_option('hi2','no entry');?>" class="img-responsive shadow " alt="<?php echo of_get_option('ht2','no entry');?>">

                                    <div class="textbox textbox2">

                                    <p class="text"><?php echo of_get_option('ht2','no entry');?></p><br/>

                                    <a href="<?php echo of_get_option('hl2','no entry');?>">View More [+]</a>

                                    </div>

                                    <p class="bottom"><a href="<?php echo of_get_option('hl2','no entry');?>"><?php echo of_get_option('ht2','no entry');?></a></p>

                                </div>

                                <div class="col-md-4 image-contain">

                                	<img src="<?php echo of_get_option('hi3','no entry');?>" class="img-responsive shadow " alt="">

                                    <div class="textbox textbox2">

                                    <p class="text"><?php echo of_get_option('ht3','no entry');?></p><br/>

                                    <a href="<?php echo of_get_option('hl3','no entry');?>">View More [+]</a>

                                    </div>

                                    <p class="bottom"><a href="<?php echo of_get_option('hl3','no entry');?>"><?php echo of_get_option('ht3','no entry');?></a></p>

                                </div>

                                

                                </div>

                                </div>

            

        </div>

    </div>

</div>

</div><?php */?>

<?php get_footer(); ?>