<aside class="sag">
	<div id="sidebars" class="g">
		<div class="sidebar">
			<ul class="sidebar_list">
				<?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>
				 
					<li id="sidebar-archives" class="widget">
						<h3><?php _e('Archives', 'mythemeshop') ?></h3>
						<ul>
							<?php wp_get_archives( 'type=monthly' ); ?>
						</ul>
					</li>
					<li id="sidebar-meta" class="widget">
						<h3><?php _e('Meta', 'mythemeshop') ?></h3>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div><!--sidebars-->
</aside>