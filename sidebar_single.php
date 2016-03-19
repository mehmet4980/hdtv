<aside class="sidebar c-4-12">
	<div id="sidebars" class="g">
		<div class="sidebar">
			<ul class="sidebar_list">
				
			 
					
				
		<div id="bb_benzer">
		<div class="bb_kbaslik">Benzer Kanallar</div>	
						<!--.post-content box mark-links-->
						<?php if($options['mts_related_posts'] == '1') { ?>	
							<?php $categories = get_the_category($post->ID); if ($categories) { $category_ids = array(); foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id; $args=array( 'category__in' => $category_ids, 'post__not_in' => array($post->ID), 'showposts'=>4, 'orderby' => rand, 'caller_get_posts'=>1 );
								$my_query = new wp_query( $args );
								if( $my_query->have_posts() ) {
								echo '<div class="related-posts"><ul>';
								while( $my_query->have_posts() ) { ++$counter; if($counter == 4) { $postclass = 'last'; $counter = 0; } else { $postclass = ''; } $my_query->the_post(); ?>
								<li class="<?php echo $postclass; ?>">
									<a rel="nofollow" class="relatedthumb" href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
                                    	<span class="rthumb">
											<?php if(has_post_thumbnail()): ?>
												<?php the_post_thumbnail('homepage', 'title='); ?>
											<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" alt="<?php the_title(); ?>"  width='200' height='130' class="wp-post-image" />										
											<?php endif; ?>
										</span>
										<span class="rthumb_text"><?php the_title(); ?></span>
                                    </a>
								</li>
								<?php } echo '</ul></div>'; } } wp_reset_query(); ?>
							<!-- .related-posts -->
                        <?php }?> 
						</div>
					
					
					<?php if ( ! dynamic_sidebar( 'Sidebar Single' )) : ?>
									<?php endif; ?>
			</ul>
			
			
		 
		</div>
	</div><!--sidebars-->
</aside>


