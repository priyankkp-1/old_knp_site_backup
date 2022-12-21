<?php /* Template Name: About */ ?>
<?php get_header(); ?>
	<section class="section-lg bg-default">
		<div class="container">
			<h1 class="pageheading"><span><?php the_title(); ?></span></h1>
			<div class="row row-50">
				<div class="col-md-5">
					<h3><?php if( have_rows('about_first_section') ): while ( have_rows('about_first_section') ) : the_row(); the_sub_field('left_section_title'); endwhile; else :endif; ?></h3>
					<p><?php if( have_rows('about_first_section') ): while ( have_rows('about_first_section') ) : the_row(); the_sub_field('left_section_content'); endwhile; else :endif; ?></p>
				</div>
				<div class="col-md-5 offset-md-1">
					<h3><?php if( have_rows('about_first_section') ): while ( have_rows('about_first_section') ) : the_row(); the_sub_field('right_section_title'); endwhile; else :endif; ?></h3>
					<p><?php if( have_rows('about_first_section') ): while ( have_rows('about_first_section') ) : the_row(); the_sub_field('right_section_content'); endwhile; else :endif; ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="section-lg bg-accent" id="why_to_choose_Us">
        <div class="container">
			<h3><?php if( have_rows('why_to_choose_us') ): while ( have_rows('why_to_choose_us') ) : the_row(); the_sub_field('title'); endwhile; else :endif; ?></h3>
			<div class="row row-50">
				<div class="col-md-12">
					<?php if( have_rows('why_to_choose_us') ): while ( have_rows('why_to_choose_us') ) : the_row(); the_sub_field('description'); endwhile; else :endif; ?>
                </div>
			</div>
		</div>
	</section>
	<section class=" bg-default" id="agile_project_management">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-5 col-lg-5 section-xl">
					<h3><?php if( have_rows('about_second_section') ): while ( have_rows('about_second_section') ) : the_row(); the_sub_field('about_second_section_title'); endwhile; else :endif; ?></h3>
					<?php if( have_rows('about_second_section') ): while ( have_rows('about_second_section') ) : the_row(); the_sub_field('about_second_section_content'); endwhile; else :endif; ?>
				</div>
				<div class="col-md-7 col-lg-7  section-xl">
					<img src="<?php if( have_rows('about_second_section') ): while ( have_rows('about_second_section') ) : the_row(); the_sub_field('about_second_section_content_first_image'); endwhile; else :endif; ?>" alt="" >
					<p class="staticasssc">Agile Management divides the responsibilities among three Agile roles:</p>
					<ul class="assc staticasssc">
						<li><strong>Product Owner</strong> manages to set project goals, adapting change requirements and setting the priorities for the Product Features.</li>
						<li><strong>Scrum Master</strong> mentors the Team to prioritize their tasks and eliminates the obstacles into handing their tasks.</li>
						<li><strong>Team Members</strong> manage the tasks assignments, daily progress reporting and quality control for the Product.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="section-xl bg-accent text-center">
		<div class="container">
			<h3 class="text-center">Our Achievements</h3>
			<div class="row justify-content-sm-center row-60">
				<div class="col-md-3 col-xl-3">
					<?php $upload_dir = wp_upload_dir(); ?>
					<div class="progressicn firsticnn">
						<img src="<?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('first_progress_bar_percentage'); endwhile; else :endif; ?>" alt="Satisfied Clients" class="img-fluid">
					</div>
					<div class="progress-bar-circle-value"><?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('first_progress_bar_value'); endwhile; else :endif; ?></div>
					<div class="progress-bar-title"><?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('first_progress_bar_title'); endwhile; else :endif; ?></div>
				</div>
				<div class="col-md-3 col-xl-3">
					<div class="progressicn">
						<img src="<?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('second_progress_bar_percentage'); endwhile; else :endif; ?>" alt="Projects Delivered" class="img-fluid">
					</div>
					<div class="progress-bar-circle-value"><?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('second_progress_bar_value'); endwhile; else :endif; ?></div>
					<div class="progress-bar-title"><?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('second_progress_bar_title'); endwhile; else :endif; ?></div>
				</div>
				<div class="col-md-3 col-xl-3">
					<div class="progressicn">
						<img src="<?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('third_progress_bar_percentage'); endwhile; else :endif; ?>" alt="Countries Served" class="img-fluid">
					</div>
					<div class="progress-bar-circle-value"><?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('third_progress_bar_value'); endwhile; else :endif; ?></div>
					<div class="progress-bar-title"><?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('third_progress_bar_title'); endwhile; else :endif; ?></div>
				</div>
				<div class="col-md-3 col-xl-3">
					<div class="progressicn">
						<img src="<?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('fourth_progress_bar_percentage'); endwhile; else :endif; ?>" alt="Team Strength" class="img-fluid">
					</div>
					<div class="progress-bar-circle-value"><?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('fourth_progress_bar_value'); endwhile; else :endif; ?></div>
					<div class="progress-bar-title"><?php if( have_rows('progress_bar') ): while ( have_rows('progress_bar') ) : the_row(); the_sub_field('fourth_progress_bar_title'); endwhile; else :endif; ?></div>
				</div>
			</div>
        </div>
	</section>
	<section class="section-lg bg-default text-center" style="display: none;">
		<div class="container">
			<h3>
				<?php
					if( have_rows('team_info') ): 
						while ( have_rows('team_info') ) : 
							the_row(); 
							the_sub_field('team_title'); 
						endwhile; 
						endif;
				?>
			</h3>
			<p class="text-center"><?php if( have_rows('team_info') ): while ( have_rows('team_info') ) : the_row(); the_sub_field('team_description'); endwhile; else :endif; ?></p>
			<div class="row row-50 justify-content-sm-center">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts(array( 'post_type'      => 'team',
									'paged'          => $paged,
									'posts_per_page' => 8 ));
				
				$args = array( 'post_type' => 'team', 'posts_per_page' => 8 );
				$the_query = new WP_Query( $args );
				if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-4 col-lg-3">
							<div class="thumb thumb-corporate">
								<div class="thumb-corporate__main"><img src="<?php if( have_rows('team') ): while ( have_rows('team') ) : the_row(); the_sub_field('team_member_main_image'); endwhile; else :endif; ?>" alt="" width="480" height="362">
									<div class="thumb-corporate__overlay">
										<img src="<?php if( have_rows('team') ): while ( have_rows('team') ) : the_row(); the_sub_field('team_member_hover_image'); endwhile; else :endif; ?>" alt="" width="418" height="315">
									</div>
				                </div>
				                <div class="thumb-corporate__caption">
									<p class="thumb__title text-center"><a href="#"><?php the_title(); ?></a></p>
									<p class="thumb__subtitle text-center"><?php $category = get_the_terms( get_the_ID(), 'team_categories' );foreach ( $category as $cat){echo $cat->name;}?></p>
				                </div>
							</div>
						</div>
					<?php endwhile; ?>
					<?php else : ?>
						<div <?php post_class(); ?> id="team-<?php the_ID(); ?>">
							<h1>Not Found</h1>
						</div>
					<?php endif;wp_reset_postdata(); wp_reset_query();?>
          	</div>
        </div>
	</section>
<?php get_footer(); ?>