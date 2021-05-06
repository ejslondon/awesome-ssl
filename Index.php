<?php
/*
Plugin Name: Awesome SSL
Plugin URI: 
Description: The easiest way to add SSL to your website!
Author: EJS London
Author URI: https://www.ejslondon.com
Version: 1.6.8
*/
function awesome_ssl_plugin_update_message( $data, $response ) {
	if( isset( $data['upgrade_notice'] ) ) {
		printf(
			'<div class="update-message">%s</div>',
			wpautop( $data['upgrade_notice'] )
		);
	}
}
add_action( 'in_plugin_update_message-awesome-ssl/Index.php', 'awesome_ssl_plugin_update_message', 10, 2 );
function awesome_ssl_ms_plugin_update_message( $file, $plugin ) {
	if( is_multisite() && version_compare( $plugin['Version'], $plugin['new_version'], '<') ) {
		$wp_list_table = _get_list_table( 'WP_Plugins_List_Table' );
		printf(
			'<tr class="plugin-update-tr"><td colspan="%s" class="plugin-update update-message notice inline notice-warning notice-alt"><div class="update-message"><h4 style="margin: 0; font-size: 14px;">%s</h4>%s</div></td></tr>',
			$wp_list_table->get_column_count(),
			$plugin['Name'],
			wpautop( $plugin['upgrade_notice'] )
		);
	}
}
add_action( 'after_plugin_row_wp-awesome-ssl/Index.php', 'awesome_ssl_ms_plugin_update_message', 10, 2 );
if ( ! function_exists( 'awesome_ssl' ) ) {
    // Create a helper function for easy SDK access.
    function awesome_ssl() {
        global $awesome_ssl;

        if ( ! isset( $awesome_ssl ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $awesome_ssl = fs_dynamic_init( array(
                'id'                  => '8294',
                'slug'                => 'awesome-ssl',
                'type'                => 'plugin',
                'public_key'          => 'pk_df909e1a166678129264e7686a35c',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => false,
                'menu'                => array(
                    'slug'           => 'awesome-ssl',
                    'support'        => false,
                ),
            ) );
        }

        return $awesome_ssl;
    }

    // Init Freemius.
    awesome_ssl();
    // Signal that SDK was initiated.
    do_action( 'awesome_ssl_loaded' );
}
/* Register activation hook. */
register_activation_hook( __FILE__, 'awesome_ssl_activation' );
 
/**
 * Runs only when the plugin is activated.
 * @since 0.1.0
 */
function awesome_ssl_activation() {
    /* Add admin notice */
    add_action( 'admin_notices', 'awesome_ssl_activation_notice' );
}
/**
 * Admin Notice on Activation.
 * @since 0.1.0
 */
function awesome_ssl_activation_notice(){
    ?>
    <div class="updated notice is-dismissible">
        <p>SSL Activated!</p>
    </div>
    <?php
}
class awesome_SSL {
	private $ssl_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'ssl_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'ssl_page_init' ) );
	}

	public function ssl_add_plugin_page() {
		add_menu_page(
			'Awesome SSL', // page_title
			'Awesome SSL', // menu_title
			'manage_options', // capability
			'awesome-ssl', // menu_slug
			array( $this, 'ssl_create_admin_page' ), // function
			'dashicons-lock', // icon_url
			2 // position
		);
	}

	public function ssl_create_admin_page() {
		$this->ssl_options = get_option( 'ssl_option_name' ); ?>
		/* Register activation hook. */
register_activation_hook( __FILE__, 'awesome_ssl_activation' );
 
/**
 * Runs only when the plugin is activated.
 * @since 0.1.0
 */
function awesome_ssl_activation() {
    /* Add admin notice */
    add_action( 'admin_notices', 'awesome_ssl_activation_notice' );
	add_action( 'admin_notices', 'awesome_ssl_certificate_notice' );
}
 
/**
 * Admin Notice on Activation.
 * @since 0.1.0
 */
		<style>
		    .nocertnotice {
		        float: right;
		        background-color: lightblue;
		    }
			.child-checkbox {
				display: none;
			}
			.checkSSL {
				background-color: orange;
				float: right;
				display: none;
			}
			.checkSSLvalid {
				background-color: lightgreen;
				
				display: block;
			}
			.checkSSLinvalid {
				background-color: red;
				float: right;
				display: none;
			}
		</style>
		<script>
		let myURL = window.location.href
 if ( myURL.indexOf('https') <= 0 ){
} else {
}
</script>

document.getElementById('url').innerHTML = window.location.href;
		
		function awesome_ssl_certificate_notice() {
			<div class="notice notice-warning is-dismissible">
			<p>Please make sure that you have an SSL Certificate issued to this website, the plugin will not work without a valid certificate. If you don't have an SSL Certificate contact your hosting company and ask for one (Awesome SSL recommend using Lets' Encrypt SSL where available as it's <strong>free of charge</strong>. Learn More <a href="https://letsencrypt.org">Here</a>.</p>
			</div>
		}
		<div class="wrap">
		    function awesome_ssl_activation_notice(){
    ?>
    <div class="updated notice is-dismissible">
        <p>SSL Activated!</p>
    </div>
	<?php settings_errors(); ?>
			<h1>Awesome SSL Settings</h1>
			<p>Configure SSL For This Website</p>
			<table>
  <tr>
    <th><form method="post" action="options.php">
				<?php
					settings_fields( 'ssl_option_group' );
					do_settings_sections( 'ssl-admin-1' );
				?>
				</th>
    <th></th>
    <th><div class="nocertnotice">
		    <h1><strong>Don't Have An SSL Certificate?</strong></h1>
		    <p>In Order For Our Plugin To Work You Need To Have A Valid SSL Certificate, <br/> Awesome SSL Recommends Lets' Encrypt For Certificates. And, The Best Part, Lets' Encrypt Certificates Are <strong>FREE</strong>. Just Phone Your Hosting Company To Get Started.<br/> <a href="https://letsencrypt.org">Visit Lets' Encrypt's Website.</a></p>
			</div></th>
  </tr>
  <tr>
    <td>
				<?php
					settings_fields( 'ssl_option_group' );
					do_settings_sections( 'ssl-admin-2' );
				?></td>
    <td></td>
    <td><div class="checkSSL">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<h1><strong>Checking...</strong></h1>
			<p>Our servers are checking that you have a valid SSL Certificate on your site.</p>
			<i class="fa fa-refresh fa-spin" style="font-size:24px"></i>
			</div>
			<div class="checkSSLvalid">
			<h1><strong>WooHoo!</strong></h1>
			<p>You have a valid SSL Certificate on this website.</p>
			<p>Domain:</p><h3 id="url">
<script type="text/javascript">
document.write(window.location.hostname);
</script>
</h3>
			</div>
			<div class="checkSSLinvalid">
			<h1><strong>Oops</strong></h1>
			<p>You don't have a valid SSL Certificate on this website. Get one to get started.</p>
			</div></td>
  </tr>
  <tr>
    <td>			<?php
					settings_fields( 'ssl_option_group' );
					do_settings_sections( 'ssl-admin-3' );
				?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>			<?php
					settings_fields( 'ssl_option_group' );
					do_settings_sections( 'ssl-admin-4' );
				?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>			<?php
					settings_fields( 'ssl_option_group' );
					do_settings_sections( 'ssl-admin-5' );
				?></td>
    <td></td>
    <td></td>
  </tr>
</table>
<?php submit_button(); ?>
				<input type="button" id="checkConnectionbtn" value="Check SSL" onclick="alert('Your Site Is Connected To HTTPS, SSL Is Now <strong>Enabled</strong>')">
			</form>
			</div>
		</div>
	<?php }

	public function ssl_page_init() {
		register_setting(
			'ssl_option_group', // option_group
			'ssl_option_name', // option_name
			array( $this, 'ssl_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'ssl_setting_section', // id
			'', // title
			array( $this, 'ssl_section_info' ), // callback
			'ssl-admin-1' // page
		);
		add_settings_section(
		'ssl_setting_section_tools', // id
		'', // title
		array( $this, 'ssl_section_info' ), // callback
		'ssl-admin-2' // page
		);
				add_settings_section(
			'ssl_setting_section', // id
			'', // title
			array( $this, 'ssl_section_info' ), // callback
			'ssl-admin-3' // page
		);
						add_settings_section(
			'ssl_setting_section', // id
			'', // title
			array( $this, 'ssl_section_info' ), // callback
			'ssl-admin-4' // page
		);
								add_settings_section(
			'ssl_setting_section', // id
			'', // title
			array( $this, 'ssl_section_info' ), // callback
			'ssl-admin-5' // page
		);
		add_settings_field(
			'enable_ssl_on_this_website_0', // id
			'Enable SSL On This Website', // title
			array( $this, 'enable_ssl_on_this_website_0_callback' ), // callback
			'ssl-admin-1', // page
			'ssl_setting_section' // section
		);
		
		add_settings_field(
			'update_http_links_3', // id
			'Update HTTP Links To HTTPS', // title
			array( $this, 'update_http_links_3_callback' ), // callback
			'ssl-admin-2', // page
			'ssl_setting_section' // section
		);
		add_settings_field(
			'redirect_http_to_https_5', // id
			'Redirect HTTP To HTTPS', // title
			array( $this, 'redirect_http_to_https_5_callback' ), // callback
			'ssl-admin-3', // page
			'ssl_setting_section' // section
		);

		add_settings_field(
			'enable_secure_connection_by_default_1', // id
			'Enable Secure Connection By Default', // title
			array( $this, 'enable_secure_connection_by_default_1_callback' ), // callback
			'ssl-admin-4', // page
			'ssl_setting_section' // section
		);

		add_settings_field(
			'force_site_to_run_through_https_on_all_pages_2', // id
			'Force Site To Run Through HTTPS On ALL Pages', // title
			array( $this, 'force_site_to_run_through_https_on_all_pages_2_callback' ), // callback
			'ssl-admin-5', // page
			'ssl_setting_section' // section
		);
	}

	public function ssl_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['enable_ssl_on_this_website_0'] ) ) {
			$sanitary_values['enable_ssl_on_this_website_0'] = $input['enable_ssl_on_this_website_0'];
		}

		if ( isset( $input['enable_secure_connection_by_default_1'] ) ) {
			$sanitary_values['enable_secure_connection_by_default_1'] = $input['enable_secure_connection_by_default_1'];
		}

		if ( isset( $input['force_site_to_run_through_https_on_all_pages_2'] ) ) {
			$sanitary_values['force_site_to_run_through_https_on_all_pages_2'] = $input['force_site_to_run_through_https_on_all_pages_2'];
		}
		if ( isset( $input['slow_site_for_extra_security_4'] ) ) {
			$sanitary_values['slow_site_for_extra_security_4'] = $input['slow_site_for_extra_security_4'];
		}
		if ( isset( $input['redirect_http_to_https_5'] ) ) {
			$sanitary_values['redirect_http_to_https_5'] = $input['redirect_http_to_https_5'];
		}
		
				if ( isset( $input['update_http_links_3'] ) ) {
			$sanitary_values['update_http_links_3'] = $input['update_http_links_3'];
		}

		return $sanitary_values;
	}

	public function ssl_section_info() {
		
	}

	public function enable_ssl_on_this_website_0_callback() {
		printf(
			'<input type="checkbox" name="ssl_option_name[enable_ssl_on_this_website_0]" id="enable_ssl_on_this_website_0" value="enable_ssl_on_this_website_0"disabled checked%s> <label for"enable_ssl_on_this_website_0">SSL is <strong>Enabled</strong> On This Site</label> <checked>',
			( isset( $this->ssl_options['enable_ssl_on_this_website_0'] ) && $this->ssl_options['enable_ssl_on_this_website_0'] === 'enable_ssl_on_this_website_0' ) ? 'checked': ''
		);
	}
	public function redirect_http_to_https_5_callback() {
		printf(
			'<input type="checkbox" name="ssl_option_name[redirect_http_to_https_5]" id="redirect_http_to_https_5" value="redirect_http_to_https_5"disabled checked%s> <label for"redirect_http_to_https_5">Redirect Has Been <strong>Enabled</strong> On This Site</label> <checked>',
			( isset( $this->ssl_options['redirect_http_to_https_5'] ) && $this->ssl_options['redirect_http_to_https_5'] === 'redirect_http_to_https_5' ) ? 'checked': ''
		);
	}
		public function slow_site_for_extra_security_4_callback() {
		printf(
			'<div class="child-checkbox"><input type="checkbox" name="ssl_option_name[slow_site_for_extra_security_4]" id="slow_site_for_extra_security_4" value="slow_site_for_extra_security_4"disabled%s> <label for"slow_site_for_extra_security_4"><strong>Beta</strong><br/><span style="color:red;"><strong>Not Recommended<br/>May Slow Down Your Website.</strong></span><br/>Function Temporarily Disabled</label> <checked></div>',
			( isset( $this->ssl_options['slow_site_for_extra_security_4'] ) && $this->ssl_options['slow_site_for_extra_security_4'] === 'slow_site_for_extra_security_4' ) ? 'checked': ''
		);
	}
	
	public function update_http_links_3_callback() {
		printf(
			'<input type="checkbox" name="ssl_option_name[update_http_links_3]" id="update_http_links_3" value="update_http_links_3" onChange="set_check(this)"checked%s> <label for"update_http_links_3"><strong>BETA</strong><br/>If You Enable This Feature And Find Issues On Your Site, Disable Feature and Contact Support. </label>',
			( isset( $this->ssl_options['update_http_links_3'] ) && $this->ssl_options['update_http_links_3'] === 'update_http_links_3' ) ? 'checked' : ''
		);
	}

	public function enable_secure_connection_by_default_1_callback() {
		printf(
			'<input type="checkbox" name="ssl_option_name[enable_secure_connection_by_default_1]" id="enable_secure_connection_by_default_1" value="enable_secure_connection_by_default_1"%s>',
			( isset( $this->ssl_options['enable_secure_connection_by_default_1'] ) && $this->ssl_options['enable_secure_connection_by_default_1'] === 'enable_secure_connection_by_default_1' ) ? 'checked' : ''
		);
	}

	public function force_site_to_run_through_https_on_all_pages_2_callback() {
		printf(
			'<div class="parent-checkbox"><input type="checkbox" name="ssl_option_name[force_site_to_run_through_https_on_all_pages_2]" id="force_site_to_run_through_https_on_all_pages_2" value="force_site_to_run_through_https_on_all_pages_2"%s></div>',
			( isset( $this->ssl_options['force_site_to_run_through_https_on_all_pages_2'] ) && $this->ssl_options['force_site_to_run_through_https_on_all_pages_2'] === 'force_site_to_run_through_https_on_all_pages_2' ) ? 'checked' : ''
		);
	}

}
if ( is_admin() )
	$ssl = new awesome_ssl();
/* 
 * Retrieve this value with:
 * $ssl_options = get_option( 'ssl_option_name' ); // Array of All Options
 * $enable_ssl_on_this_website_0 = $ssl_options['enable_ssl_on_this_website_0']; // Enable SSL On This Website
 * $enable_secure_connection_by_default_1 = $ssl_options['enable_secure_connection_by_default_1']; // Enable Secure Connection By Default
 * $force_site_to_run_through_https_on_all_pages_2 = $ssl_options['force_site_to_run_through_https_on_all_pages_2']; // Force Site To Run Through HTTPS On ALL Pages
 */