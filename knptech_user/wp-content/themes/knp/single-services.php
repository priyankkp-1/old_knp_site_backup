<?php get_header(); ?>
<?php //if (has_post_thumbnail( $post->ID ) ): ?>
<!-- <section class="text-center">
        
        
  <?php //$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

        <div class="parallax-container bg-image parallax-header rd-parallax-light" data-parallax-img="<?php //echo $image[0]; ?>"><div class="material-parallax parallax"><img src="<?php //echo $image[0]; ?>" alt="" style="transform: translate3d(-50%, 146px, 0px); display: block;"></div>
          <div class="parallax-content">
            <div class="parallax-header__inner">
              <div class="parallax-header__content">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-xl-8">
                      <h2><?php //the_title(); ?></h2>
                      <p><?php //the_excerpt(); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section> -->
    <?php //endif; ?>
    <section class="section-lg bg-default" id="singleservicect">
        <div class="container">
            <div class="row row-50 justify-content-sm-center">
                <div class="col-md-10">
                    <h1 class="pageheading"><span><?php the_title(); ?></span></h1>
                </div>
            </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <section class="section-lg bg-default rajnikinquir container" >
        <h5 class="text-center">Request for Proposal</h5>
        <?php echo do_shortcode( '[contact-form-7 id="611" title="Request for Proposal"]' ); ?>
    </section>

<?php get_footer(); ?>