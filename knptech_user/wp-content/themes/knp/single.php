<?php get_header(); ?>
<div class="bg-default section-lg">
	<div class="container">
		<div class="row row-60 justify-content-sm-center">
			<div class="col-lg-8 section-divided__main">
				<section class="section-md post-single-body">
					<h2 class="posts-title"><?php the_title(); ?></h2>
					<div class="post-meta">
						<div class="group"><span><?php echo get_the_date(); ?></span></div>
					</div>
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<?php endif; ?>
					<img src="<?php echo $image[0]; ?>" alt="<?php echo $image_title = get_the_title( $image->id ); ?>" class="mainfeatureimg">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
					<?php echo do_shortcode('[Sassy_Social_Share]') ?>
				</section>
				<?php /* 
				<section class="section-md">
					<h5>Latest Posts</h5>
					<div class="row row-60">
						<?php
						
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						
						query_posts(array(	'post_type'      => 'post', // You can add a custom post type if you like
											'paged'          => $paged,
											'posts_per_page' => 3 ));
						
						$args = array( 'post_type' => 'post', 'posts_per_page' => 8 );
						$the_query = new WP_Query( $args );
						
						if ( have_posts() ) : ?>
						
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-4">
							<article class="post-classic post-minimal">
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									<img src="<?php echo $image[0]; ?>" alt="" class="latestpostimgsingle">
								<?php endif; ?>
								<div class="post-classic-title">
									<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								</div>
							</article>
						</div>
						
						<?php endwhile; ?>
						<?php else : ?>
							<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
							<h1>Not Found</h1>
						</div>
						<?php endif; ?>
					</div>
				</section>
				*/?> 
            </div>
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
<?php get_footer(); ?>