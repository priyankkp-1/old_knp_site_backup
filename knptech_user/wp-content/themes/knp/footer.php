	<section class="pre-footer-corporate">
		<div class="container">
			<div class="row row-30 row-md-60">
				<div class="col-sm-10 col-md-3 col-lg-2 col-xl-2">
					<h6>Quick Links</h6>
					<?php
						wp_nav_menu( array( 'menu'            => '' , 
											'container'       => 'div',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'list-xxs',
											'menu_id'         => '',
											'echo'            => true,
											'fallback_cb'     => 'wp_page_menu',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'item_spacing'    => 'preserve',
											'depth'           => 2,
											'walker'          =>'',
											'theme_location'  => 'footer-menu' ) ); 
					?>
				</div>
				<div class="col-sm-10 col-md-3 col-lg-2 col-xl-2 servicebtm0">
					<h6>Services</h6>
					<?php
						wp_nav_menu( array(	'menu'            => '',
											'container'       => 'div',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'list-xxs',
											'menu_id'         => '',
											'echo'            => true,
											'fallback_cb'     => 'wp_page_menu',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'item_spacing'    => 'preserve',
											'depth'           => 2,
											'walker'          =>'',
											'theme_location'  => 'footer-menu-service1' ) ); 
					?>
				</div>
				<div class="col-sm-10 col-md-3 col-lg-2 col-xl-2">
					<h6 class="hiidenh6">&nbsp;</h6>
					<?php wp_nav_menu( array(	'menu'            => '',
												'container'       => 'div',
												'container_class' => '',
												'container_id'    => '',
												'menu_class'      => 'list-xxs',
												'menu_id'         => '',
												'echo'            => true,
												'fallback_cb'     => 'wp_page_menu',
												'before'          => '',
												'after'           => '',
												'link_before'     => '',
												'link_after'      => '',
												'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												'item_spacing'    => 'preserve',
												'depth'           => 2,
												'walker'          =>'',
												'theme_location'  => 'footer-menu-service2' ) ); 
					?>
				</div>
				<div class="col-sm-10 col-md-6 col-lg-3 col-xl-3 footercontactus">
					<h6>Contact Us</h6>
					<ul class="list-xs">
						<li>
							<dl class="list-terms-minimal">
								<dt><b><i class="fa fa-map-marker" aria-hidden="true"></i> </b></dt>
								<dd style="color: #43aeda;">A-803, Shapath Hexa, Near Ganesh Meridian, Sola, S.G. Highway, Ahmedabad - 380060, Gujarat, INDIA.</dd>
							</dl>
						</li>
						<li>
							<dl class="list-terms-minimal">
								<dt><b><i class="fa fa-phone" aria-hidden="true"></i> </b></dt>
								<dd>
									<ul class="telephon">
										<li><a href="tel:+919825841085">+91 982 584 1085</a> / <a href="tel:+919376995116">+91 937 699 5116</a></li>
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
				</div>
				<div class="col-sm-10 col-md-6 col-lg-3 col-xl-3 footermap">
					<h6>Follow Us</h6>
					<div class="socialicn">
						<div class="list-terms-minimal socilaicnhidee">
							<ul class="list-inline-xxs">
								<li><a class="icon icon-xxs icon-primary fa fa-linkedin" href="https://www.linkedin.com/company/knp-technologies-pvt-ltd/" target="_blank"></a></li>
								<li><a class="icon icon-xxs icon-primary fa fa-facebook" href="https://www.facebook.com/knptechnologies/" target="_blank"></a></li>
								<li><a class="icon icon-xxs icon-primary fa fa-twitter" href="https://twitter.com/KNP_tech" target="_blank"></a></li>
								<li><a class="icon icon-xxs icon-primary fa fa-instagram" href="https://www.instagram.com/knptechnologies/" target="_blank"></a></li>
							</ul>
						</div>
					</div>
					<div class="row justify-content-lg-start row-30 row-md-60 folowusimh">
						<?php $uploads = wp_upload_dir(); ?>
						<div class="col-6">
							<a href="https://clutch.co/profile/knp-technologies-private" target="_blank"><img src="<?php echo  $uploads['baseurl'].'/spo-logo.png'?>" class="clutch2" alt="spo-logo"></a>
						</div>
					</div>
				</div>
            </div>
		</div>
	</section>

	<footer class="footer-corporate">
		<div class="container">
			<div class="footer-corporate__inner">
				<div class="rights">
					&copy;<span id="copyright-year"><?php echo date('Y')?></span>
					<a href="<?php echo site_url();?>">KNP Technologies Private Limited.</a> All Rights Reserved.
					<span class="footlink"><a href="<?php echo get_permalink(1017)?>">Privacy Policy</a></span>
				</div>
			</div>
		</div>
	</footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/core.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	<script>
	var CurrentPageURL = $(location).attr("href");
	$("a[href$='"+CurrentPageURL+"']").addClass('active');
	</script>
	<script type="application/ld+json">
	 {
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "url": "https://www.knp-tech.com/",
	  "logo": "https://www.knp-tech.com/wp-content/uploads/knp-tech.png"
	 }
	 </script>
	 <script type="application/ld+json">
	  {
	  "@context" : "http://schema.org",
	  "@type" : "Organization",
	  "name" : "KNP Technologies Private Limited",
	  "telephone" : "+91 937 699 5116",
	  "email" : "info@knp-tech.com",
	  "address" : {
	  "@type" : "PostalAddress",
	  "streetAddress" : "A-803, Shapath Hexa, Near Ganesh Meridian, Sola, S.G. Highway",
	  "addressLocality" : "Ahmedabad",
	  "addressCountry" : "India",
	  "postalCode" : "380060"
  
  
 
	  },
	"url" : "https://www.knp-tech.com/"
	        }
	 </script>
	 <script type="application/ld+json">
	 {
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "name": "KNP Technologies Private Limited",
	  "url": "https://www.knp-tech.com/",
	  "sameAs": [
	  "https://www.facebook.com/knptechnologies/",
	  "https://twitter.com/KNP_tech",
	  "https://www.linkedin.com/company/knp-technologies-pvt-ltd/",
	  "https://www.instagram.com/knptechnologies/"
  
	  ]
	 }
	 </script>
	 <script type="application/ld+json">
	 {
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "url": "https://www.knp-tech.com/",
	  "contactPoint": [
	  { "@type": "ContactPoint",
	  "telephone": "+91 937 699 5116",
	  "contactType": "customer service"
	  }
	  ]
	 }
	 </script>
	 <script type="application/ld+json">
	 {
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "name": "KNP Technologies Private Limited",
	  "alternateName": "Enterprise Web and Mobile Apps Development",
	  "url": "https://www.knp-tech.com/"
	 }
	 </script>
    <?php wp_footer();?>
</body>
</html>