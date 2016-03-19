<?php get_header(); ?>
<?php $options = get_option('portal'); ?>
<div id="page" class="single">
	<div class="content">
	<?php include(TEMPLATEPATH."/sidebar_single.php");?>
		<article class="article">
		
		<div class="breadcrumb"><?php the_breadcrumb(); ?></div>
			<div id="content_box" >
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('g post'); ?>>
						<div class="single_post">
						
						
						
							<header>
								<h1 class="title single-title"><?php the_title(); ?></h1>
							
							</header><!--.headline_area-->
							<h2 class="single-title2"><?php the_subtitle(); ?></h2>
							<!--<div class="tumb8">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="featured-thumbnail2">
							<?php if ( has_post_thumbnail() ) { ?> 
								<?php echo '<div class="featured-thumbnail2">'; the_post_thumbnail('featured',array('title' => '')); echo '</div>'; ?>
							<?php } ?>
						</a>
						</div>-->			
 
						<div class="post-single-content box mark-links">
						<?php the_content(); ?>


<div itemprop="video" itemscope itemtype="http://schema.org/VideoObject" class="tv-video">
                    <p class="sub-title">
               Tv Video : <span itemprop="name"><?php the_title(); ?></span>
                    <meta itemprop="thumbnailUrl" content="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>" />
                    <meta itemprop="contentURL" content="http://www.canlitvizlex.org/videos/preview.flv?id=<?php echo rand(1, 996555); ?>" />
                    </p>
                    <video class="VideoPlayerV3" width="1" height="1" poster="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>">
      <source type="video/flv" src="http://www.canlitvizlex.org/videos/preview.flv?id=<?php the_ID(); ?>" />
</video>
                </div>

 
						<div class="alternatif"><?php wp_link_pages('before=<p>&after=</p>&pagelink=%.Alternatif Yayın'); ?></div>

						<ul class="like">
	<li><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><div class="g-plusone" data-size="tall" data-href="<?php bloginfo('url'); ?>"></div></li>
	<li><div class="fb-like" data-href="<?php bloginfo('url'); ?>" data-send="false" data-layout="box_count" data-width="200" data-show-faces="true"></div></li>
        <li><iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1360972506.html#_=1361617174096&amp;count=vertical&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=<?php the_permalink() ?>&amp;size=m&amp;text=<?php the_title(); ?>&amp;url=<?php the_permalink() ?>" class="twitter-share-button twitter-count-vertical" style="width: 59px; height: 62px;" title="Twitter Tweet Button" data-twttr-rendered="true"></iframe><li>
</ul>
 
								
								
							</div>
						</div>
						
						<div class="player_yani">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Player Yani') ) : ?><?php endif; ?>
					</div>
					</div>
					
	
	
<div class="bb_kbaslikFACE">İle Yorum Yap!</div>		
<div class="bb_face">
 	<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="844" data-num-posts="25"></div>

 </div>
	   <div style="display:none">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
  <a href="<?php bloginfo('url'); ?>" itemprop="url">
    <span itemprop="title">Canlı Tv</span>
  </a> ›
  <div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<?php $cats = get_the_category($post->ID);
foreach( $cats as $cat ) { ?>
    <a href="<?php echo get_category_link($cat->term_id); ?>" itemprop="url"><?php } ?>
      <span itemprop="title"><?php echo $cat->name; ?></span>
    </a>
  </div>
</div>
</div>	
				<?php endwhile; /* end loop */ ?>
			</div>
		</article>
		
<?php get_footer(); ?>