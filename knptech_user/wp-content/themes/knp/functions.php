<?php


function custom_post_type_blog() {
    $labels = array(
        'name'                => _x( 'Blog', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Blog', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Blog', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Blog', 'twentythirteen' ),
        'all_items'           => __( 'All Blogs', 'twentythirteen' ),
        'view_item'           => __( 'View Blog', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Blog', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Blog', 'twentythirteen' ),
        'update_item'         => __( 'Update Blog', 'twentythirteen' ),
        'search_items'        => __( 'Search Blog', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
    $args = array(
        'label'               => __( 'Blog', 'twentythirteen' ),
        'description'         => __( 'Blog', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'blog', $args );
}
add_action( 'init', 'custom_post_type_blog', 1 );

function blog_categories_taxonomy() {  
    register_taxonomy(  
        'blog_categories',
        'blog',
        array(  
            'hierarchical' => true,  
            'label' => 'Categories',
            'query_var' => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite' => array(
                'slug' => 'blog_categories',
                'with_front' => false
            )
        )  
    );  
}  
add_action( 'init', 'blog_categories_taxonomy');


function custom_post_type_our_portfolio() {
    $labels = array(
        'name'                => _x( 'Portfolio', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Portfolio', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Portfolio', 'twentythirteen' ),
        'all_items'           => __( 'All Portfolio', 'twentythirteen' ),
        'view_item'           => __( 'View Portfolio', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Portfolio', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Portfolio', 'twentythirteen' ),
        'update_item'         => __( 'Update Portfolio', 'twentythirteen' ),
        'search_items'        => __( 'Search Portfolio', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
    $args = array(
        'label'               => __( 'Portfolio', 'twentythirteen' ),
        'description'         => __( 'Portfolio', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'our_portfolio', $args );
}
add_action( 'init', 'custom_post_type_our_portfolio', 1 );

function portfolio_categories_taxonomy() {  
    register_taxonomy(  
        'portfolio_categories',
        'our_portfolio',
        array(  
            'hierarchical' => true,  
            'label' => 'Categories',
            'query_var' => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite' => array(
                'slug' => 'portfolio_categories',
                'with_front' => false
            )
        )  
    );  
}  
add_action( 'init', 'portfolio_categories_taxonomy');


function custom_post_type() {
    $labels = array(
        'name'                => _x( 'Services', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Services', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Service', 'twentythirteen' ),
        'all_items'           => __( 'All Services', 'twentythirteen' ),
        'view_item'           => __( 'View Service', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Service', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Service', 'twentythirteen' ),
        'update_item'         => __( 'Update Service', 'twentythirteen' ),
        'search_items'        => __( 'Search Service', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
    $args = array(
        'label'               => __( 'services', 'twentythirteen' ),
        'description'         => __( 'Service news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'services', $args );
}
add_action( 'init', 'custom_post_type', 0 );

function custom_post_type_positions() {
    $labels = array(
        'name'                => _x( 'Vacancies', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Vacancy', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Vacancies', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Vacancy', 'twentythirteen' ),
        'all_items'           => __( 'All Vacancies', 'twentythirteen' ),
        'view_item'           => __( 'View Vacancy', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Vacancy', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Vacancy', 'twentythirteen' ),
        'update_item'         => __( 'Update Vacancy', 'twentythirteen' ),
        'search_items'        => __( 'Search Vacancy', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
    $args = array(
        'label'               => __( 'Vacancies', 'twentythirteen' ),
        'description'         => __( 'Vacancy news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ), 
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'Vacancies', $args );
}
add_action( 'init', 'custom_post_type_positions', 0 );

function custom_post_type_team() {
    $labels = array(
        'name'                => _x( 'Team', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Team', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Team', 'twentythirteen' ),
        'all_items'           => __( 'All Team', 'twentythirteen' ),
        'view_item'           => __( 'View Team', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Team', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Team', 'twentythirteen' ),
        'update_item'         => __( 'Update Team', 'twentythirteen' ),
        'search_items'        => __( 'Search Team', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
    $args = array(
        'label'               => __( 'Team', 'twentythirteen' ),
        'description'         => __( 'Team news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'Team', $args );
}


add_action( 'init', 'custom_post_type_team', 1 );
function team_taxonomy() {  
    register_taxonomy(  
        'team_categories',
        'team',
        array(  
            'hierarchical' => true,  
            'label' => 'Categories',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'team_categories',
                'with_front' => false
            )
        )  
    );  
}  
add_action( 'init', 'team_taxonomy');
add_theme_support('post-thumbnails');
if ( ! function_exists( 'my_pagination' ) ) :
    function my_pagination() {
        global $wp_query;
        $big = 999999999;
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    }
endif;
    
	function register_my_menus() {
		register_nav_menus(
		array(	'header-menu' => __( 'Header Menu' ),
				'footer-menu' => __( 'footer Menu' ),
				'footer-menu-service1' => __( 'Footer Menu Service Firstpart' ),
				'footer-menu-service2' => __( 'Footer Menu Service Secondpart' ) ) );
	}
	add_action( 'init', 'register_my_menus' );

function blog_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'blogsidebar', 'knp' ),
            'id' => 'blog-side-bar',
            'description' => __( 'Blog Sidebar', 'knp' ),
            'before_widget' => '<section class="section-md"><div class="widget-content">',
            'after_widget' => "</div></section>",
            'before_title' => '<h5 class="widget-title">',
            'after_title' => '</h5>',
        )
    );
}
add_action( 'widgets_init', 'blog_sidebar' );
if ( !function_exists( 'wpex_pagination' ) ) {
    function wpex_pagination() {
        $prev_arrow = is_rtl() ? '→' : '←';
        $next_arrow = is_rtl() ? '←' : '→';
        global $wp_query;
        $total = $wp_query->max_num_pages;
        $big = 999999999;
        if( $total > 1 )  {
             if( !$current_page = get_query_var('paged') )
                 $current_page = 1;
             if( get_option('permalink_structure') ) {
                 $format = 'page/%#%/';
             } else {
                 $format = '&paged=%#%';
             }
            echo paginate_links(array(
                'base'          => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'        => $format,
                'current'       => max( 1, get_query_var('paged') ),
                'total'         => $total,
                'mid_size'      => 3,
                'type'          => 'list',
                'prev_text'     => $prev_arrow,
                'next_text'     => $next_arrow,
             ) );
        }
    }
}
function searchfilter($query) {
	if ($query->is_search && !is_admin() ) {
		$query->set('post_type',array('post'));
    }
	return $query;
}
add_filter('pre_get_posts','searchfilter');

Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
	
		function widget($args, $instance) {
			if ( ! isset( $args['widget_id'] ) ) {
				$args['widget_id'] = $this->id;
            }
			
            $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );
            $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
            $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
			
            if ( ! $number )
                $number = 5;
            $show_date	= isset( $instance['show_date'] ) ? $instance['show_date'] : false;
			$rajnik = new WP_Query( apply_filters( 'widget_posts_args', array(
                'posts_per_page'      => $number,
                'no_found_rows'       => true,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true
            ) ) );
            if ($rajnik->have_posts()) :
            ?>
            <?php echo $args['before_widget']; ?>
            <?php if ( $title ) {
                echo $args['before_title'] . $title . $args['after_title'];
            } ?>
            <ul>
            <?php while ( $rajnik->have_posts() ) : $rajnik->the_post(); ?>
                <li>
					<article class="unit flex-sm-row unit-spacing-sm" style="margin-bottom: 20px;">
						<div class="unit-left">
							<figure class="figure-inline text-center text-sm-left"><?php the_post_thumbnail('thumbnail'); ?></figure>
						</div>
						<div class="unit-body post-inline">
							<div class="post-inline__header">
								<span class="post-inline__time">
									<?php if ( $show_date ) : ?>
									<span class="post-date"><?php echo get_the_date(); ?></span>
									<?php endif; ?>
								</span>
							</div>
							<p class="post-inline__link"><a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a></p>
						</div>
					</article>
                </li>
            <?php endwhile; ?>
            </ul>
            <?php echo $args['after_widget']; ?>
            <?php
            wp_reset_postdata();
            endif;
        }
}

function my_recent_widget_registration() {
	unregister_widget('WP_Widget_Recent_Posts');
	register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');

function html5_search_form( $form ) { 
	$form = '<div class="search">
		<form role="search" method="get" id="search-form" class="rd-search rd-mailform-inline-flex text-center" action="' . home_url( '/' ) . '" >
			<div class="form-wrap form-wrap_icon linear-icon-magnifier">
				<label class="form-label rd-input-label" for="rd-search-form-input">' . __('',  'knp') . '</label>
				<input class="form-input" id="rd-search-form-input" type="search" value="' . get_search_query() . '" name="s"/></div>
				<button type="submit" class="button button-primary" >'.esc_attr__('Go', 'knp').'</button>
		</form>
		</div>';
     return $form;
}
add_filter( 'get_search_form', 'html5_search_form' );
add_action('pre_get_posts', 'blog_pagination', 1, 1);
function blog_pagination($query)
{
    if (! is_admin() && is_post_type_archive('blog') && $query->is_main_query()) {
        $query->set('posts_per_page', 3); //set query arg ( key, value )
    }
}

?>

