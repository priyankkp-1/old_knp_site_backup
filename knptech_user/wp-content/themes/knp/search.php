<?php get_header(); ?>
	<section class="bg-default section-lg">
		<div class="container">
			<div class="row row-70">
				<div class="col-lg-7 col-xl-8 section-divided__main">
					<div class="row">
						<div class="col-lg-12"><?php get_search_form(); ?></div>
					</div>
					
					<?php if ( have_posts() ) : ?>
						<div class="row">
							<div class="col-lg-12">
								<?php printf( esc_html__( 'Search Results for: %s', knp ), '<span>' . get_search_query() . '</span>' ); ?>
							</div>
						</div>
					
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="section-md">
							<article class="post-classic">
								<div class="post-classic-title">
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								</div>
								
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<?php endif; ?>
								
								<div class="post-classic-body">
									<?php the_excerpt(); ?>
								</div>
								
								<div class="post-classic-footer">
									<ul class="list-inline-sm"></ul>
									<a class="button button-link" href="<?php the_permalink(); ?>">Read more</a>
								</div>
							</article>
						</div>
					<?php endwhile; ?>
					<?php my_pagination(); ?>
					<?php endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>