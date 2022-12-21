<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<div class="text-center">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<img src="<?php echo $image[0]; ?>" alt="" style=" display: block;width: 100%;">
    </div>
<?php endif; ?>
	<section class="section-xs bg-default">
		<div class="container">
			<h1 class="pageheading"><span><?php the_title(); ?></span></h1>
			<div class="row row-50 contactinfo">
				<div class="col-md-6 col-lg-6">
					<h3>Contact Details</h3>
					<ul class="list-xs contact-info">
						<li>
							<dl class="list-terms-minimal">
								<dt><b><i class="fa fa-map-marker" aria-hidden="true"></i></b></dt>
								<dd style="color: #43aeda;">A-803, Shapath Hexa, Near Ganesh Meridian, Sola,
								<br/>S.G. Highway, Ahmedabad - 380060, Gujarat, INDIA.</dd>
							</dl>
						</li>
						<li>
							<dl class="list-terms-minimal">
								<dt><b><i class="fa fa-phone" aria-hidden="true"></i> </b></dt>
								<dd>
									<ul>
										<li><a href="tel:+919825841085">+91 982 584 1085</a></li>
										<li>/<a href="tel:+919376995116">+91 937 699 5116</a></li>
									</ul>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="list-terms-minimal">
								<dt><b><i class="fa fa-envelope" aria-hidden="true"></i> </b></dt>
								<dd><a href="mailto:info@knp-tech.com">info@knp-tech.com</a></dd>
							</dl>
						</li>
					</ul>
					<div class="socialicn">
						<div class="list-terms-minimal socilaicnhidee sochidden">
							<ul class="list-inline-xxs">
								<li><a class="icon icon-sm icon-primary fa fa-linkedin" href="https://www.linkedin.com/company/knp-technologies-pvt-ltd/" target="_blank"></a></li>
								<li><a class="icon icon-sm icon-primary fa fa-facebook" href="https://www.facebook.com/knptechnologies/" target="_blank"></a></li>
								<li><a class="icon icon-sm icon-primary fa fa-twitter" href="https://twitter.com/KNP_tech" target="_blank"></a></li>
								<li><a class="icon icon-sm icon-primary fa fa-instagram" href="https://www.instagram.com/knptechnologies/" target="_blank"></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-5 offset-md-1 col-lg-5 offset-lg-1">
					<h3>Let's Get in Touch</h3>
					<?php echo do_shortcode( '[contact-form-7 id="108" title="contact"]' ); ?>
				</div>
			</div>
		</div>
	</section>
	<div class="mapouter">
		<div class="gmap_canvas">
			<iframe style="width:100%" height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5980421149848!2d72.52350001535456!3d23.075193620149083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e838f531529eb%3A0x1e93862564cb5870!2sKNP+Technologies+Private+Limited!5e0!3m2!1sen!2sin!4v1562675429826!5m2!1sen!2sin"></iframe>
		</div>
	</div>
<?php get_footer(); ?>