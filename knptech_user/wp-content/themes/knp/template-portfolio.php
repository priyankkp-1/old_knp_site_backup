<?php /* Template Name: Portfolio */ ?>
<?php get_header(); ?>
	
	<section class="section-lg bg-default text-center"  data-lightgallery="group">
		<div class="container">
			<h1 class="pageheading porfolioheading"><span><?php the_title(); ?></span></h1>
			<div class="isotope-wrap row row-70">
				<div class="col-sm-12">
					<ul class="list-nav isotope-filters isotope-filters-horizontal">
						<li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
						<?php 
						$terms = get_terms([ 	'taxonomy' => 'portfolio_categories',
												'hide_empty' => false,
												'orderby'    => 'ID' ]); 
						foreach ($terms as $term):
						?>
							<li>
								<a data-isotope-filter="<?php echo $term->name; ?>" data-isotope-group="gallery" href="#"><?php echo $term->name; ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
					<div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
					<?php
						
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						
						query_posts(array(
							'post_type'      => 'our_portfolio',
							'paged'          => $paged,
							'posts_per_page' => -1
						));
						
						$args = array( 'post_type' => 'our_portfolio', 'posts_per_page' => 8 );
						
						$the_query = new WP_Query( $args );
						
						if ( have_posts() ) : 
						
							while ( have_posts() ) : the_post(); ?>
							<div id="<?php the_ID().'port'; ?>" style="display:none" class="productdescriptionport">
								<p style="text-align: left;"><b>Project Name :- </b> <?php the_title(); ?></p>
								<p style="text-align: left;"><b>Technologies :- </b><?php if( have_rows('portfolio_content') ): while ( have_rows('portfolio_content') ) : the_row(); the_sub_field('portfolio_technologies'); endwhile; else :endif; ?></p>
							</div>
							<div class="col-12 col-md-6 col-lg-4 isotope-item portisoitm" data-filter="<?php $category = get_the_terms( get_the_ID(), 'portfolio_categories' );foreach ( $category as $cat){echo $cat->name;}?>">
								<a class="img-thumbnail-variant-3 thumb-modern" data-sub-html="#<?php the_ID().'port'; ?>" data-download-url="false" href="<?php if( have_rows('portfolio_content') ): while ( have_rows('portfolio_content') ) : the_row(); the_sub_field('portfolio_main_image'); endwhile; else :endif; ?>" data-lightgallery="item">
									<figure>
										<img src="<?php if( have_rows('portfolio_content') ): while ( have_rows('portfolio_content') ) : the_row(); the_sub_field('portfolio_sub_image'); endwhile; else :endif; ?>" alt="" width="472" height="355"/>
									</figure>
									<div class="caption">
										<span class="icon arrow-right linear-icon-magnifier thumb-modern__overlay"></span>
									</div>
								</a>
							</div>
							<?php endwhile; ?>
						<?php else : ?>
						<div <?php post_class(); ?> id="portfolio-<?php the_ID(); ?>">
							<h1>Not Found</h1>
						</div>
						<?php endif;wp_reset_postdata(); wp_reset_query();?>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- 	<style>
		@media (min-height: 800px) and (min-width: 1200px){
			.section-lg:first-of-type {
				padding-top: 0px;
			}
		}
	</style> -->
<?php get_footer(); ?>