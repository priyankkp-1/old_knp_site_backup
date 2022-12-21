<?php get_header(); ?>
<section class="bg-default section-lg">
	<div class="container">
		<div class="row row-70">
			<div class="col-lg-7 col-xl-8 section-divided__main">
				<?php
				
				if ( have_posts() ) {
					
					while ( have_posts() ) {
						the_post();
						
						?>
						<div class="section-md">
							<article class="post-classic">
								<div class="post-classic-title">
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								</div>
								<?php if ( has_post_thumbnail( $post->ID ) ) {
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									/* <!-- <img src="<?php //echo $image[0]; ?>" alt="" width="886" height="668"> --> */
								} ?>
								<div class="post-classic-body">
									<?php the_excerpt(); ?>
								</div>
								<div class="post-meta">
									<div class="group">
										<a href="#"><span><?php echo get_the_date( 'Y-m-d' ); ?></span></a>
									</div>
								</div>
								<div class="post-classic-footer">
									<?php echo do_shortcode('[Sassy_Social_Share]') ?>
									<a class="button button-link" href="<?php the_permalink(); ?>">Read more</a>
								</div>
							</article>
						</div>
					<?php
					}
					my_pagination(); 
					
				} else { ?>
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1>Not Found</h1>
					</div>
				<?php
				} ?>
			</div>
            <?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>