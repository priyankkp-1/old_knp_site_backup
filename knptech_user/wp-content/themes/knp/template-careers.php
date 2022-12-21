<?php /* Template Name: Careers */ ?>
<?php get_header(); ?>
	
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<div class="text-center">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<img src="<?php echo $image[0]; ?>" alt="" style=" display: block;width: 100%;">
		</div>
	<?php endif; ?>
		
		<section class="section-xs bg-default text-center">
			<div class="container">
				<h1 class="pageheading"><span><?php the_title(); ?></span></h1>
				<div class="row">
					<div class="col-lg-6">
						<div class="text-left" id="accordion" role="tablist">
						<h4 style="margin-top: 30px;">Vacant Positions</h4>
							<?php 
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								query_posts(array( 'post_type'      => 'vacancies',
													'paged'          => $paged ));
								
								$args = array( 'post_type' => 'vacancies');
								$the_query = new WP_Query( $args ); 
								
								if ( have_posts() ) : ?>
									<?php while ( have_posts() ) : the_post(); ?>
									<div class="panel panel-custom">
										<div class="panel-custom-heading" id="<?php echo the_ID().'Heading'; ?>" role="tab">
											<h6 class="panel-custom-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo the_ID().'Collapse'; ?>" aria-controls="<?php echo the_ID().'Collapse'; ?>"><?php the_title();?></a>
											</h6>
										</div>
										<div class="panel-custom-collapse collapse" id="<?php echo the_ID().'Collapse'; ?>" role="tabpanel" aria-labelledby="<?php echo the_ID().'Heading'; ?>">
											<div class="panel-custom-body"><?php the_content();?></div>
										</div>
									</div>
								<?php endwhile;
								else : ?>
									<div <?php post_class(); ?> id="vacancies-<?php the_ID(); ?>"><h1>Not Found</h1></div>
									<?php endif;
									wp_reset_postdata();
									wp_reset_query();?>
							<section> 
								<h4 style="margin-top: 30px;">Why to join us</h4>
								<ul class="list-marked">
									<li>Awesome work culture</li>
									<li>Excellent opportunities for faster career growth</li>
									<li>People engagement activities</li>
									<li>Monthly celebrations</li>
									<li>Alternate Saturday holidays</li>
									<li>Optimal leave and holiday policies</li>
								</ul>
							</section>
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<?php echo do_shortcode( '[contact-form-7 id="109" title="careers"]' ); ?>
					</div>
				</div>
				<div class="row row-50">
					<div class="col-md-12" style="padding: 40px 0px;"><h3>Happenings at KNP Tech</h3></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php echo do_shortcode('[modula id="855"]'); ?>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>