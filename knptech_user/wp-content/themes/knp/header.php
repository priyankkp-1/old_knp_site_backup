<!DOCTYPE html>
<html class="wide wow-animation desktop landscape rd-navbar-static-linked" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>KNP Technologies</title>
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script async="" src="<?php echo get_template_directory_uri(); ?>/js/ec.js"></script>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicone_32x32.png" type="image/x-icon">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet"/> 
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146720729-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-146720729-1');
	</script> 

	<?php wp_head();?>
</head>

<body class=" rd-navbar-default-linked" >
    
    <div class="page">
        <div id="page-loader" style="display:none;">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
        </div>
        <header class="page-header">
            <div class="rd-navbar-wrap" style="height: 100px;">
                <nav class="rd-navbar rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-md-stick-up-offset="69px" data-lg-stick-up-offset="1px" data-body-class="rd-navbar-default-linked">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <div class="rd-navbar-brand">
								<a class="brand-name" href="<?php echo get_site_url();?>">
									<img src="<?php $uploads = wp_upload_dir(); ?><?php echo  $uploads['baseurl'].'/knp-tech.png'?>" alt="Logo" width="180" height="32">
								</a>
							</div>
                        </div>
                        <?php
                            wp_nav_menu(
                            array(
                                'menu'            => '',
                                'container'       => 'div',
                                'container_class' => 'rd-navbar-nav-wrap toggle-original-elements',
                                'container_id'    => '',
                                'menu_class'      => 'rd-navbar-nav',
                                'menu_id'         => 'menuhead',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'item_spacing'    => 'preserve',
                                'depth'           => 2,
                                'walker'          => new My_Walker_Nav_Menu(),
                                'theme_location'  => 'header-menu',
                            ) ); 

                            class My_Walker_Nav_Menu extends Walker_Nav_Menu {
                                //function start_lvl(&$output, $depth) {
								function start_lvl( &$output, $depth = 0, $args = array() ){
									$indent = str_repeat("\t", $depth);
									$output .= "\n$indent<ul class=\"rd-navbar-dropdown\">\n";
								}
							}
                        ?>
                    </div>
                </nav>
            </div>
        </header>