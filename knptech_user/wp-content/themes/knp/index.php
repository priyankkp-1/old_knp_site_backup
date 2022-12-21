<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" media="all" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" media="all" />
	<div class="knpslider deskslide">
		<div>
			<div class="slide-knp slideknp1">
				<img src="<?php if( have_rows('slider_1') ): while ( have_rows('slider_1') ) : the_row(); the_sub_field('slider_1_image'); endwhile; else :endif; ?>" alt="" title="">
				<div class="slidertxt1">
					<p class="firstslidep1">Smart Concepts need Expert Team that transforms <br/>the Concepts into Top-Quality Mobile Apps</p>
					<a title="" href="<?php echo get_site_url()."/services/mobile-apps/";?>" target="_blank" class="learmore1" tabindex="-1">Learn More</a>
				</div>
			</div>
		</div>
		<div>
			<div class="slide-knp slideknp3">
				<img src="<?php if( have_rows('slider_3') ): while ( have_rows('slider_3') ) : the_row(); the_sub_field('slider_3_image'); endwhile; else :endif; ?>" alt="" title="">
				<div class="slidertxt3">
					<h1 class="firstslidep1">Enterprise Business Solutions and Web Apps using the Cutting-Edge Technologies</h1>
					<a title="" href="<?php echo get_site_url()."/services/web-development/";?>" target="_blank" class="learmore3" tabindex="-1">Learn More</a>
				</div>
			</div>
		</div>
	</div>

    <div class="knpslider mobslide">
        <div>
            <div class="slide-knp">
                <a href="<?php if( have_rows('slider_1_mob') ): while ( have_rows('slider_1_mob') ) : the_row(); the_sub_field('slidermob_button_link'); endwhile; else :endif; ?>">
					<img src="<?php if( have_rows('slider_1_mob') ): while ( have_rows('slider_1_mob') ) : the_row(); the_sub_field('slider_mob_1_image'); endwhile; else :endif; ?>"  alt="" title="">
				</a>
            </div>
        </div>
        <div>
            <div class="slide-knp">
                <a href="<?php if( have_rows('slider_3_mob') ): while ( have_rows('slider_3_mob') ) : the_row(); the_sub_field('slidermob3_button_link'); endwhile; else :endif; ?>">
					<img src="<?php if( have_rows('slider_3_mob') ): while ( have_rows('slider_3_mob') ) : the_row(); the_sub_field('slider_mob_3_image'); endwhile; else :endif; ?>"  alt="" title="">
				</a>
            </div>
        </div>
    </div>
	
	<!-- Presentation -->
	<div class="section-xl bg-default text-center" id="section-see-features">
		<div class="container firstperegram">
			<div class="row justify-content-lg-center">
				<div class="col-lg-12 col-xl-12">
					<h3><span><?php if( have_rows('first_section') ): while ( have_rows('first_section') ) : the_row(); the_sub_field('section_title'); endwhile; else :endif; ?></span></h3>
					<div class="centerdiv">
						<?php if( have_rows('first_section') ): while ( have_rows('first_section') ) : the_row(); the_sub_field('section_content'); endwhile; else :endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<section class="bg-gray-lighter object-wrap">
		<div class="container" style="max-width: 100%">
			<div class="row align-items-lg-center align-items-md-center">
				<div class="col-md-6 col-lg-6 agileapproch">
					<h3><?php if( have_rows('second_section') ): while ( have_rows('second_section') ) : the_row(); the_sub_field('second_section_title'); endwhile; else :endif; ?></h3>
					<p><?php if( have_rows('second_section') ): while ( have_rows('second_section') ) : the_row(); the_sub_field('second_section_content'); endwhile; else :endif; ?></p>
					<a class="button button-link" href="<?php echo get_site_url()."/about#agile_project_management"?>">Read more</a>
				</div>
				<div class="col-md-6 col-lg-6" style="padding: 0;">
					<img src="<?php if( have_rows('second_section') ): while ( have_rows('second_section') ) : the_row(); the_sub_field('second_section_image'); endwhile; else :endif; ?>"  alt="" title="">
				</div>
			</div>
		</div>
	</section>
	
	<section class="bg-gray-lighter">
		<div class="container" style="max-width: 100%">
			<div class="row align-items-lg-center align-items-md-center">
				<div class="col-md-6 col-lg-6" style="padding: 0;">
					<img src="<?php if( have_rows('third_section') ): while ( have_rows('third_section') ) : the_row(); the_sub_field('third_section_image'); endwhile; else :endif; ?>" alt="" title="">
				</div>
				<div class="col-md-6 col-lg-6 agileapproch">
					<h3><?php if( have_rows('third_section') ): while ( have_rows('third_section') ) : the_row(); the_sub_field('third_section_title'); endwhile; else :endif; ?></h3>
					<p><?php if( have_rows('third_section') ): while ( have_rows('third_section') ) : the_row(); the_sub_field('third_section_content'); endwhile; else :endif; ?></p>
					<a class="button button-link" href="<?php echo get_site_url()."/about#why_to_choose_Us"?>">Read more</a>
				</div>
			</div>
		</div>
	</section>
	
	<div class="section-xl bg-default">
		<div class="container">
			<div class="row row-50 servicehomesection">
				<?php
				$args = array( 'post_type' => 'services', 'posts_per_page' => 8 );
				$the_query = new WP_Query( $args );
				?>
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-md-6 col-lg-3 mainservicediv">
					<div class="blurb blurb-minimal">
						<div class="unit flex-row unit-spacing-md">
							<div class="unit-left">
								<div class="blurb-minimal__icon">
									<span class="icon rajnikicon"><img src="<?php echo get_field('icon_class')?>" alt="<?php echo $image_title = get_the_title( $image->id ); ?>"></span>
								</div>
							</div>
							<div class="unit-body">
								<p class="blurb__title"><a class="servicetitle" href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
								<div class="servicesinglecontent"><?php the_excerpt(); ?></div>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile;?>
				<?php wp_reset_postdata(); wp_reset_query(); ?>
				<?php else:  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<section class="bg-gray-dark text-center careerchecknow">
		<!-- RD Parallax-->
		<div class="parallax-container bg-image rd-parallax-light" data-parallax-img="<?php if( have_rows('fourth_section') ): while ( have_rows('fourth_section') ) : the_row(); the_sub_field('fourth_section_image'); endwhile; else :endif; ?>">
			<div class="material-parallax parallax"><img src="<?php if( have_rows('fourth_section') ): while ( have_rows('fourth_section') ) : the_row(); the_sub_field('fourth_section_image'); endwhile; else :endif; ?>" alt="" style="display: block;"></div>
			<div class="parallax-content">
				<div class="container section-xxl">
					<h3><?php if( have_rows('fourth_section') ): while ( have_rows('fourth_section') ) : the_row(); the_sub_field('fourth_section_title'); endwhile; else :endif; ?></h3>
					<p class="text-center"><?php if( have_rows('fourth_section') ): while ( have_rows('fourth_section') ) : the_row(); the_sub_field('fourth_section_content'); endwhile; else :endif; ?></p><a class="button button-primary" href="<?php echo get_site_url()."/careers/"?>"><?php if( have_rows('fourth_section') ): while ( have_rows('fourth_section') ) : the_row(); the_sub_field('fourth_section_button_text'); endwhile; else :endif; ?></a>
				</div>
			</div>
		</div>
	</section>
	
	<div class="section-xl bg-default" data-lightgallery="group">
		<h3 class="text-center section-xl" style="padding-top: 0;">Our Recent Projects</h3>
		<div class="container-fluid">
			<div class="row row-10 row-horizontal-10">

				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts(array(
						'post_type'      => 'our_portfolio',
						'paged'          => $paged,
						'posts_per_page' => 8
					));
					$args = array( 'post_type' => 'our_portfolio', 'posts_per_page' => 8 );
					$the_query = new WP_Query( $args );
					if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div id="<?php the_ID().'port'; ?>" style="display:none" class="productdescriptionport">
					<p style="text-align: left;"><b>Project Name :- </b> <?php the_title(); ?></p>
				   <!--  <p><?php //the_content(); ?></p> -->
					 <p style="text-align: left;"><b>Technologies :- </b><?php if( have_rows('portfolio_content') ): while ( have_rows('portfolio_content') ) : the_row(); the_sub_field('portfolio_technologies'); endwhile; else :endif; ?></p>
				</div>
				<?php ?>
				<div class="col-md-4 col-xl-3"> <a class="thumb-modern" data-download-url="false"  data-sub-html="#<?php the_ID().'port'; ?>" data-lightgallery="item" href="<?php if( have_rows('portfolio_content') ): while ( have_rows('portfolio_content') ) : the_row(); the_sub_field('portfolio_main_image'); endwhile; else :endif; ?>">
						<figure><img src="<?php if( have_rows('portfolio_content') ): while ( have_rows('portfolio_content') ) : the_row(); the_sub_field('portfolio_sub_image'); endwhile; else :endif; ?>" alt="" width="472" height="355">
						</figure>
						<div class="thumb-modern__overlay linear-icon-magnifier"></div>
					</a></div>
										<?php endwhile; ?>
				<?php else : ?>
				<div <?php post_class(); ?> id="portfolio-<?php the_ID(); ?>">
					<h1>Not Found</h1>
				</div>
				<?php endif;wp_reset_postdata(); wp_reset_query();?>
			</div>
		</div>
	</div>
	
	<div class="section-xl bg-gray-lighter text-center">
		<div class="container">
			<h3>Latest Blogs</h3>
			<div class="row row-50">
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts(array(
						'post_type'      => 'blog',
						'paged'          => $paged,
						'posts_per_page' => 3
					));
					$args = array( 'post_type' => 'blog', 'posts_per_page' => 8 );
					$the_query = new WP_Query( $args );
					if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-6 col-xl-4">
					<article class="post-minimal">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<a href="<?php the_permalink(); ?>">
						<img src="<?php echo $image[0]; ?>" alt="" width="418" height="315"></a>
						<?php endif; ?>
						<div class="post-classic-title">
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						</div>
						<div class="post-classic-body">
							 <?php the_excerpt(); ?>
						</div>
						<div class="post-minimal-footer"><a class="button button-link" href="<?php the_permalink(); ?>">read more</a></div>
					</article>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1>Not Found</h1>
				</div>
				<?php endif;wp_reset_postdata(); wp_reset_query();?>
			</div>
			<div class="row text-center">
						<a class="button button-primary mx-auto blogbtn" href="<?php echo get_site_url().'/blog' ?>">View All!</a>
			</div>
		</div>
	</div>
                        
        <!-- Share Your Company Testimonials-->
        <section class="section-lg bg-default text-center">
            <div class="container">
                <h3><?php if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row(); the_sub_field('testimonials_title'); endwhile; else :endif; ?></h3>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-carousel-spacing-1 owl-loaded owl-drag" data-autoplay="true" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30" data-nav="true" style="">
                    <!-- Quote default-->
                    <div class="quote-default">
                        <svg class="quote-default__mark" version="1.1" baseProfile="tiny" x="0px" y="0px" width="30.234px" height="23.484px" viewBox="0 0 30.234 23.484">
                            <g>
                                <path d="M12.129,0v1.723c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959 c0,0.445,0.07,0.773,0.211,0.984c0.093,0.141,0.199,0.211,0.316,0.211c0.117,0,0.293-0.082,0.527-0.246 c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.519,0.545,3.551,1.635c1.031,1.09,1.547,2.385,1.547,3.885 c0,1.57-0.592,2.953-1.775,4.148c-1.184,1.195-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426 C0.715,19.441,0,17.274,0,14.555c0-3.164,0.972-6,2.918-8.508C4.863,3.539,7.933,1.524,12.129,0z M29.039,0v1.723 c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959c0,0.445,0.07,0.773,0.211,0.984 c0.094,0.141,0.199,0.211,0.316,0.211s0.293-0.082,0.527-0.246c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.52,0.545,3.551,1.635 s1.547,2.385,1.547,3.885c0,1.57-0.592,2.953-1.775,4.148s-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426 s-2.145-3.785-2.145-6.504c0-3.164,0.973-6,2.918-8.508C21.773,3.539,24.844,1.524,29.039,0z"></path>
                            </g>
                        </svg>
                        <div class="quote-default__text">
                            <p class="q"><?php if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row(); the_sub_field('first_testimonials_content'); endwhile; else :endif; ?></p>
                        </div>
                        <div class="quote-default__cite"><?php if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row(); the_sub_field('first_testimonials_cite'); endwhile; else :endif; ?></div>
                    </div>
                    <div class="quote-default">
                        <svg class="quote-default__mark" version="1.1" baseProfile="tiny" x="0px" y="0px" width="30.234px" height="23.484px" viewBox="0 0 30.234 23.484">
                            <g>
                                <path d="M12.129,0v1.723c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959 c0,0.445,0.07,0.773,0.211,0.984c0.093,0.141,0.199,0.211,0.316,0.211c0.117,0,0.293-0.082,0.527-0.246 c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.519,0.545,3.551,1.635c1.031,1.09,1.547,2.385,1.547,3.885 c0,1.57-0.592,2.953-1.775,4.148c-1.184,1.195-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426 C0.715,19.441,0,17.274,0,14.555c0-3.164,0.972-6,2.918-8.508C4.863,3.539,7.933,1.524,12.129,0z M29.039,0v1.723 c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959c0,0.445,0.07,0.773,0.211,0.984 c0.094,0.141,0.199,0.211,0.316,0.211s0.293-0.082,0.527-0.246c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.52,0.545,3.551,1.635 s1.547,2.385,1.547,3.885c0,1.57-0.592,2.953-1.775,4.148s-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426 s-2.145-3.785-2.145-6.504c0-3.164,0.973-6,2.918-8.508C21.773,3.539,24.844,1.524,29.039,0z"></path>
                            </g>
                        </svg>
                        <div class="quote-default__text">
                            <p class="q"><?php if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row(); the_sub_field('second_testimonials_content'); endwhile; else :endif; ?></p>
                        </div>
                        <div class="quote-default__cite"><?php if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row(); the_sub_field('second_testimonials_cite'); endwhile; else :endif; ?></div>
                    </div>
                    <div class="quote-default">
                        <svg class="quote-default__mark" version="1.1" baseProfile="tiny" x="0px" y="0px" width="30.234px" height="23.484px" viewBox="0 0 30.234 23.484">
                            <g>
                                <path d="M12.129,0v1.723c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959 c0,0.445,0.07,0.773,0.211,0.984c0.093,0.141,0.199,0.211,0.316,0.211c0.117,0,0.293-0.082,0.527-0.246 c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.519,0.545,3.551,1.635c1.031,1.09,1.547,2.385,1.547,3.885 c0,1.57-0.592,2.953-1.775,4.148c-1.184,1.195-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426 C0.715,19.441,0,17.274,0,14.555c0-3.164,0.972-6,2.918-8.508C4.863,3.539,7.933,1.524,12.129,0z M29.039,0v1.723 c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959c0,0.445,0.07,0.773,0.211,0.984 c0.094,0.141,0.199,0.211,0.316,0.211s0.293-0.082,0.527-0.246c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.52,0.545,3.551,1.635 s1.547,2.385,1.547,3.885c0,1.57-0.592,2.953-1.775,4.148s-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426 s-2.145-3.785-2.145-6.504c0-3.164,0.973-6,2.918-8.508C21.773,3.539,24.844,1.524,29.039,0z"></path>
                            </g>
                        </svg>
                         <div class="quote-default__text">
                            <p class="q"><?php if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row(); the_sub_field('third_testimonials_content'); endwhile; else :endif; ?></p>
                        </div>
                        <div class="quote-default__cite"><?php if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row(); the_sub_field('third_testimonials_cite'); endwhile; else :endif; ?></div>
                    </div>

                </div>

            </div>
        </section>
        <div class="bg-gray-lighter homerequest">
            <section class=" bg-gray-lighter rajnikinquir container" >
            <h3 class="text-center">Request for Proposal</h3>
            <?php echo do_shortcode( '[contact-form-7 id="611" title="Request for Proposal"]' ); ?>
            </section> 
        </div>
<?php get_footer(); ?>
