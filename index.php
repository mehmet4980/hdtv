<?php $options = get_option('portal'); ?>
<?php get_header(); ?>
<div id="page">
	<div class="content">
 
				
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Ana-Sayfa-Reklam') ) : ?><?php endif; ?>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Ana-Sayfa-Popular') ) : ?><?php endif; ?>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Ana-Sayfa-Popular2') ) : ?><?php endif; ?>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Ana-Sayfa-Popular3') ) : ?><?php endif; ?>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Ana-Sayfa-Popular4') ) : ?><?php endif; ?>
			
				
		<article class="article2">

		
		<div id="content_box" class="home_page">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post excerpt <?php echo (++$j % 5 == 0) ? 'last' : ''; ?>">
					 
		
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="featured-thumbnail">
							<?php if ( has_post_thumbnail() ) { ?> 
								<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail('featured',array('title' => '')); echo '</div>'; ?>
							<?php } ?>
						</a>
						  				<header>
							<h1 class="title">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h1>
						 
						</header><!--.header-->
						
					</div><!--.post excerpt-->
					
					
					
				<?php endwhile; else: ?>
				
							<p><strong><?php _e('İçerik Bulunamadı', 'mythemeshop'); ?></strong></p>
					 
				 
					
				<?php endif; ?>
				<?php if ($options['mts_pagenavigation'] == '1') { ?>
					<?php pagination($additional_loop->max_num_pages);?>
				<?php } else { ?>
					 
				<?php } ?>		
			</div>
		
		
		</article>

 
<?php get_footer(); ?>