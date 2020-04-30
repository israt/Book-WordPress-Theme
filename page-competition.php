<?php



/************



Template Name: Competition





 ***********/



get_header(); ?>



  <!--inner-page starts=================================-->

    <section class="inner-head">

    	<div class="row">

        	<div class="container">

            	<div class="col-md-12">

                	<div class="inner-heading">

                    	<h1>Competition</h1>

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

            	<div class="competition">

                	<div class="col-md-4  col-sm-4 ">

                    	<div class="competion-img">

                        	<h2><?php echo of_get_option('hi','no entry');?></h2>

                        	<img src="<?php echo of_get_option('ci','no entry');?>" alt="competition" class="img-responsive">

                            <p><?php echo of_get_option('fi','no entry');?></p>

                        </div>

                    </div>

                	<div class="col-md-8 col-sm-8">

                    	<div class="competion-content">

                        	<h2><span class="bold">Question:</span><span class="red">&nbsp;&nbsp;<?php echo of_get_option('ques','no entry');?></span></h2>

                            <h2><span class="bold">Competition Ends:</span><span class="red">&nbsp;&nbsp;<?php echo of_get_option('ends','no entry');?></span></h2>

                            <p><?php echo of_get_option('ann','no entry');?></p>

                        </div>

                        <div class="competion-form">

                            <p class="bold">Entry is <span class="blue">FREE</span></p>
  							<?php echo do_shortcode('[mc4wp_form]'); ?>
                          

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--inner-body ends.....-->

    <!--inner-page ends=====

    ==-->

	

	<?php get_footer(); ?>