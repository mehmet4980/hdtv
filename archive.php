<?php $options = get_option('portal'); ?>
<?php get_header(); ?>
<div id="page">
	<div class="content">
		<article class="article2">
	<h1 class="page-title">Canlı TV İzle ~<?php
					printf( '<span>' . single_cat_title( '', false ) . '</span>' );
				?> Kategorisi</h1>
		<div id="content_box" class="home_page">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post excerpt <?php echo (++$j % 2 == 0) ? 'last' : ''; ?>">
					 
				
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
				
						<div class="no-results">
							<p><strong><?php _e('Kayıt Bulunamadı.', 'mythemeshop'); ?></strong></p>
							<p><?php _e('Aradığınız sayfada kayıt hiç eklememiş veya silinmiş.', 'mythemeshop'); ?></p>
				 
						</div><!--noResults-->
				
				<?php endif; ?>
				<?php if ($options['mts_pagenavigation'] == '1') { ?>
					<?php pagination($additional_loop->max_num_pages);?>
				<?php } else { ?>
					 
				<?php } ?>		
			</div>
		
		
		</article>

 
<?php get_footer(); ?>