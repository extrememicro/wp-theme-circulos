<?php
/**
 * Template Name: Blog 
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section id="main_content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<div class="container">
			<section id="detail">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article class="post" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
					<h2 itemprop="headline"><?php the_title(); ?></h2>
					<aside class="post_author clearfix" itemscope itemtype="http://data-vocabulary.org/Person">
						<?php if ( get_the_author_meta( 'twitter' ) ) : ?>
						<figure itemprop="photo"><?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?></figure>
						<h4 rel="author"><a target="_blank" title="Google Plus de <?php echo get_the_author() ; ?>" href="<?php the_author_meta( 'google_plus' ); ?>?rel=author" itemprop="contact"> de <span itemprop="name"><?php echo get_the_author() ; ?></span></a></h4>
						<?php endif; ?>
						<time datetime="<?php the_time( 'Y/m/d g:i:s A' ); ?>" pubdate><?php the_date( 'j \d\e F Y'); ?></time>
					</aside>
					<div class="post_text" itemprop="description">
						<?php the_content(); ?>
					</div>
					<?php comments_template( '', true ); ?>
				</article>
				<?php endwhile; ?>
				<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar') ); ?>		
			</section>
		</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>


