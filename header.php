<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Dynasty3
 * @since Dynasty3 1.0
 */
?>

<!doctype html>
<html lang="en-US">
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="utf-8">
<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico">
<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />
<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />
<!-- Menu CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css" media="all" />
<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />
<?php wp_head(); ?>
</head>

<body>

	<!--header starts-->
	<header>
    	<div class="row">
        	<div class="container">
            	<div class="col-md-3">
                	<div class="logo_area">
                    	<a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>">
                        	<img src="<?php echo of_get_option('logos','no entry');?>" alt="<?php echo of_get_option('sitename','no entry');?>">
                        </a>
                    </div>
                    <!--logo_area ends....-->
                </div>
            	<div class="col-md-9">
                	<div class="menu_area">
                    	<div class="nav dnt3-menu">
                        	<?php
							  $url=get_post_permalink();
								 $pageid = url_to_postid( $url );
							?>
                            <ul class="dropdown clear">
                                <li><a href="<?php bloginfo('url'); ?>" <?php echo $pageid== '5'?'class="active"':'';?>>Home</a></li>
                                <li><a href="<?php bloginfo('url');?>/latest-offers/" <?php echo $pageid== '15'?'class="active"':'';?>>Latest Offers</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/book-retailer/" <?php echo $pageid== '9'?'class="active"':'';?>>Book Retailers</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/competition/" <?php echo $pageid== '12'?'class="active"':'';?>>Competitions</a></li>
                            </ul>
     				 	</div>
                    </div>
                    <!--menu_area ends....-->
                </div>
            </div>
            <!--container ends.....-->
        </div>
        <!--row ends.....-->
    </header>
    <!--header ends-->
    
    
	<?php /*?><header> 
    	<div class="container">
        	<div class="logo">
            	 <a href="<?php bloginfo('url'); ?>"  title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logos','no entry');?>" alt="<?php echo of_get_option('sitename','no entry');?>"></a>
            </div>
        	<div class="social-bookmarks">
            	<div class="bottom">
                   <a href="<?php echo of_get_option('fb','no entry');?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fb.png" alt="fb"></a>
                </div>
            </div>
        </div>
    </header>
    
    <div class="nav dnt3-menu">
    
        <div class="container">
        <?php wp_nav_menu(array( 'menu' => 'Main-menu', 'container' => false, 'menu_class' => 'dropdown clear')); ?>
                
          </div>
      </div><?php */?>