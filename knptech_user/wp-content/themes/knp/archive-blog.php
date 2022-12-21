<?php get_header(); ?>
	<section class="bg-default section-lg">
		<div class="container">
			<div class="row row-70">
			<div class="col-lg-7 col-xl-8 section-divided__main">
				<h1 class="pageheading"><span>Blog<?php //the_title(); ?></span></h1>
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				//query_posts(array(	'post_type'      => 'blog', // You can add a custom post type if you like
				//					'paged'          => $paged,
				//					'posts_per_page' => 3 ));
				//
				$args = array( 'post_type' => 'blog', 'posts_per_page' => 3, 'paged'       => $paged);
				
				$the_query = query_posts( $args );
				
				if ( have_posts() ) : ?>
				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="section-md" style="border: none">
						<article class="post-classic">
							<div class="post-classic-title">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							</div>
							
							<?php /* if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<img src="<?php echo $image[0]; ?>" width="886" height="668">
							<?php endif; */ ?>
							
							<div class="post-classic-body"><?php the_excerpt(); ?></div>
							<div class="post-meta"><span><?php echo get_the_date(); ?></span></div>
							<div class="post-classic-footer">
								<?php echo do_shortcode('[Sassy_Social_Share]') ?>
								<a class="button button-link" href="<?php the_permalink(); ?>">Read more</a>
							</div>
						</article>
					</div>
				<?php endwhile;
					my_pagination(); 
					  wp_reset_postdata(); ?>
				<?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
