<?php
if ( !class_exists('ExtendedNews_Dashboard_Notice') ):

    class ExtendedNews_Dashboard_Notice
    {
        function __construct()
        {	
            global $pagenow;

        	if( $this->extendednews_show_hide_notice() ){

	            if( is_multisite() ){

                  add_action( 'network_admin_notices',array( $this,'extendednews_admin_notice' ) );

                } else {

                  add_action( 'admin_notices',array( $this,'extendednews_admin_notice' ) );
                }
	        }
	        add_action( 'wp_ajax_extendednews_notice_dismiss', array( $this, 'extendednews_notice_dismiss' ) );
			add_action( 'switch_theme', array( $this, 'extendednews_notice_clear_cache' ) );
        
            if( isset( $_GET['page'] ) && $_GET['page'] == 'extendednews-about' ){

                add_action('in_admin_header', array( $this,'extendednews_hide_all_admin_notice' ),1000 );

            }
        }

        public function extendednews_hide_all_admin_notice(){

            remove_all_actions('admin_notices');
            remove_all_actions('all_admin_notices');

        }
        
        public static function extendednews_show_hide_notice( $status = false ){

            if( $status ){

                if( (class_exists( 'Booster_Extension_Class' ) ) || get_option('extendednews_admin_notice') ){

                    return false;

                }else{

                    return true;

                }

            }

            // Check If current Page 
            if ( isset( $_GET['page'] ) && $_GET['page'] == 'extendednews-about'  ) {
                return false;
            }

        	// Hide if dismiss notice
        	if( get_option('extendednews_admin_notice') ){
				return false;
			}
        	// Hide if all plugin active
        	if ( class_exists( 'Booster_Extension_Class' ) && class_exists( 'Demo_Import_Kit_Class' ) && class_exists( 'Themeinwp_Import_Companion' ) ) {
				return false;
			}
			// Hide On TGMPA pages
			if ( ! empty( $_GET['tgmpa-nonce'] ) ) {
				return false;
			}
			// Hide if user can't access
        	if ( current_user_can( 'manage_options' ) ) {
				return true;
			}
			
        }

        // Define Global Value
        public static function extendednews_admin_notice(){

            $theme_info      = wp_get_theme();
            $theme_name            = $theme_info->__get( 'Name' );
            ?>
           <div class="updated notice is-dismissible twp-extendednews-notice">

               <p class="notice-text">
                   <?php
                   $current_user = wp_get_current_user();

                   printf(
                   /* Translators: %1$s current user display name., %2$s this theme name., %3$s discount coupon code., %4$s discount percentage. */
                       esc_html__(
                           'Howdy, %1$s! Welcome to your new WordPress site! Thank you for activating the %2$s theme. We hope you enjoy using it to create a beautiful and functional website. If you would like to access additional premium features, you can upgrade to the pro version. Your current content and settings will remain unchanged after upgrading. As a special offer, you can use the coupon code %3$s to receive a %4$s discount on the purchase price (offer valid for a limited time). Thank you for choosing %2$s! ',
                           'extendednews'
                       ),
                       '<strong>' . esc_html( $current_user->display_name ) . '</strong>',
                       '<strong>' . esc_html( $theme_name ) . '</strong>',
                       '<code class="coupon-code">ONBOARDINGDISCOUNT</code>',
                       '25%'
                   );

                   ?>
               </p>

               <p>
                   <a target="_blank" class="button button-primary button-primary-upgrade" href="<?php echo esc_url( 'https://www.themeinwp.com/theme/extendednews-pro/' ); ?>">
                       <span class="dashicons dashicons-thumbs-up"></span>
                       <span><?php esc_html_e('Upgrade to Pro','extendednews'); ?></span>
                   </a>

                   <a class="button button-primary twp-install-active" href="javascript:void(0)">
                       <span class="dashicons dashicons-admin-plugins"></span>
                       <span><?php esc_html_e('Install and activate recommended plugins','extendednews'); ?></span>
                   </a>
                    <span class="quick-loader-wrapper"><span class="quick-loader"></span></span>

                    <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://preview.themeinwp.com/extendednews/' ); ?>">
                        <span class="dashicons dashicons-welcome-view-site"></span>
                        <span><?php esc_html_e('View Demo', 'extendednews'); ?></span>
                    </a>

                   <a target="_blank" class="button button-primary" href="<?php echo esc_url('https://wordpress.org/support/theme/extendednews/reviews/?filter=5'); ?>">
                       <span class="dashicons dashicons-star-filled"></span>
                       <span class="dashicons dashicons-star-filled"></span>
                       <span class="dashicons dashicons-star-filled"></span>
                       <span class="dashicons dashicons-star-filled"></span>
                       <span class="dashicons dashicons-star-filled"></span>
                       <span><?php esc_html_e('Leave a review', 'extendednews'); ?></span>
                   </a>

                    <a class="btn-dismiss twp-custom-setup" href="javascript:void(0)"><?php esc_html_e('Dismiss this notice.','extendednews'); ?></a>

                </p>

            </div>

        <?php
        }

        public function extendednews_notice_dismiss(){

        	if ( isset( $_POST[ '_wpnonce' ] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST[ '_wpnonce' ] ) ), 'extendednews_ajax_nonce' ) ) {

	        	update_option('extendednews_admin_notice','hide');

	        }

            die();

        }

        public function extendednews_notice_clear_cache(){

        	update_option('extendednews_admin_notice','');

        }

    }
    new ExtendedNews_Dashboard_Notice();
endif;