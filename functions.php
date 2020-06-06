<?php
/**
 * 
 */

if ( ! function_exists( 'launcer_setup' ) ) :
	function launcer_setup() {
		load_theme_textdomain( 'launcer', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
	}
endif;
add_action( 'after_setup_theme', 'launcer_setup' );

/*    */

function twentynineteen_scripts() {
	
	if(is_page()){
	$launcer_template = basename( get_page_template() );
	if(	$launcer_template = 'launcer.php' ){
		wp_enqueue_style('launcer-', '//fonts.googleapis.com/css?family=Open+Sans:400,700,800');
		wp_enqueue_style('launcer-animate', get_template_directory_uri().'/css/animate.css');
		wp_enqueue_style('launcer-icomoon', get_template_directory_uri().'/css/icomoon.css');
		wp_enqueue_style('launcer-bootstrap', get_template_directory_uri().'/css/bootstrap.css');
		wp_enqueue_style('launcer-main', get_template_directory_uri().'/css/style.css');
		wp_enqueue_style( 'launcer-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
		
		
		wp_enqueue_script('launcer-modernizr', get_template_directory_uri().'/js/modernizr-2.6.2.min.js' ,array('jquery'), time(), true);
		wp_enqueue_script('launcer-easing', get_template_directory_uri().'/js/jquery.easing.1.3.js' ,array('jquery'), time(), true);
		wp_enqueue_script('launcer-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js' ,array('jquery'), time(), true);
		wp_enqueue_script('launcer-waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js' ,array('jquery'), time(), true);
		wp_enqueue_script('launcer-simplyCountdown', get_template_directory_uri().'/js/simplyCountdown.js' ,array('jquery'), time(), true);
		wp_enqueue_script('launcer-main', get_template_directory_uri().'/js/main.js' ,array('jquery'), time(), true);	
		
		
		$launcer_year =	 get_post_meta( get_the_ID() , "year" , true);
		$launcer_month = get_post_meta( get_the_ID() , "month" , true);
		$launcer_day = get_post_meta( get_the_ID() , "day" , true);
		
		/*the following function need an (handler, then id ,then array or object) this funtion used for send data from php to javascript */
		wp_localize_script('launcer-main','datedata', array(
			'year' 	=> 	$launcer_year,
			'month' => 	$launcer_month,
			'day' 	=> 	$launcer_day
		));  
			
		} else{
		wp_enqueue_style('launcer-bootstrap', get_template_directory_uri().'/css/bootstrap.css');	
		wp_enqueue_style('launcer-main', get_template_directory_uri().'/css/style.css');
		wp_enqueue_style( 'launcer-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );	
		}
	}

}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/*    */
function additional_css(){
	if(is_page()){
		$thumbnail = get_the_post_thumbnail_url(	null, 'large'	);
		?>
		<style>
			.home-side{
				background: url(<?php echo $thumbnail; 	?>);
			}
			#fh5co-logo {
			margin-top:20px;
			}
			#fh5co-logo a{
				font-size:50px;
				color:blue !important;
			}
		
		</style>
			
	
		<?php
	}
}
add_filter('wp_head', 'additional_css');

/*    */
function launcer_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'copyright', 'launcer' ),
			'id'            => 'copyright-sidebar',
			'description'   => __( 'Add widgets here to appear in your footer.', 'launcer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'launcer_widgets_init' );

















