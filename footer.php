<!--footer starts -->

    <footer>

    	<div class="row">

        	<div class="container">

            	<div class="col-md-4">

                	<div class="footer-content">

                    	<div class="footer_heading">

                        	<p>About Us</p>

                        </div>

                    	<p><?php echo of_get_option('copyright_ctext','no entry');?></p>

                        <div class="copyright">

            				<p><?php echo of_get_option('copyright_ftext','no entry');?></p>

    					</div>

                    </div>

                </div>

                <div class="col-md-4">

                	<div class="footer_heading">

                        	<p>Get In Touch</p>

                    </div>

                	<div class="social_bookmarks">

                    	<p><a href="<?php echo of_get_option('twit','no entry');?>"><i class="fa fa-twitter"></i>&nbsp;&nbsp;<?php echo of_get_option('twit-text','no entry');?></a></p>

                        <p><a href="<?php echo of_get_option('cont-link','no entry');?>"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Contact Us:&nbsp;&nbsp;<?php echo of_get_option('cont-text','no entry');?></a></p>

                    </div>

                </div>

                <div class="col-md-4">

                	<div class="form_area_bottom">

                            <h2>Keep informed of all the latest offers.</h2>

                           <?php echo do_shortcode('[mc4wp_form]'); ?>

                        </div>

                </div>

            </div>

        </div>

    </footer>

    <!--footer ends -->



<!-- **** JS(Java Script) FILES****** --> 

<!-- Lib -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>

<!-- BOOTSTRAP js -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>

<!-- Menu JS -->

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu-responsive.js"></script>



<?php wp_footer(); ?>

</body>

</html>