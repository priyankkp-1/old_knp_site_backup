<?php /* Template Name: Privacy Policy */ ?>
<?php get_header(); ?>
	<section class="section-lg bg-default">
		<div class="container">
			<h1 class="pageheading"><span><?php the_title(); ?></span></h1>
			<div class="row row-50">
				<div class="col-md-12">
					<?php
					
					$content_post = get_post( get_the_ID() );
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					echo $content = str_replace(']]>', ']]&gt;', $content);
					
					?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>