<?php
add_action( 'cmb2_admin_init', 'igv_register_theme_options_metabox' );

function igv_register_theme_options_metabox() {
  $prefix = '_igv_';

  $front_page_options = new_cmb2_box( array(
    'id'           => $prefix . 'front_page_options',
    'title'        => esc_html__( 'Front Page Options', 'cmb2' ),
    'object_types' => array( 'options-page' ),
    /*
     * The following parameters are specific to the options-page box
     * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
     */
    'option_key'      => $prefix . 'front_page_options', // The option key and admin menu page slug.
    'icon_url'        => 'dashicons-layout', // Menu icon. Only applicable if 'parent_slug' is left empty.
    // 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
    // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
    'capability'      => 'manage_options', // Cap required to view options-page.
    // 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
    // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
    // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Videos', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'splash_video_title',
    'type'    => 'title',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Splash video (mp4)', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'splash_video_mp4',
    'type'    => 'file',
    'query_args' => array(
      'type' => 'video/mp4',
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Splash video reversed (mp4)', 'cmb2' ),
    'desc'    => esc_html__( 'for backwards play on scroll up', 'cmb2' ),
    'id'      => 'splash_video_reversed_mp4',
    'type'    => 'file',
    'query_args' => array(
      'type' => 'video/mp4',
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'See formOS in action video', 'cmb2' ),
    'desc'    => esc_html__( 'for what is section', 'cmb2' ),
    'id'      => 'what_is_video',
    'type'    => 'file',
    'query_args' => array(
      'type' => 'video/mp4',
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Countdown', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'countdown_title',
    'type'    => 'title',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'End time', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'countdown_end',
    'type'    => 'text_datetime_timestamp_timezone',
  ) );

  // Site options for general data

  $site_options = new_cmb2_box( array(
    'id'           => $prefix . 'site_options_page',
    'title'        => esc_html__( 'Site Options', 'cmb2' ),
    'object_types' => array( 'options-page' ),
    /*
     * The following parameters are specific to the options-page box
     * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
     */
    'option_key'      => $prefix . 'site_options', // The option key and admin menu page slug.
    // 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
    // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
    'capability'      => 'manage_options', // Cap required to view options-page.
    // 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
    // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
    // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
    // 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
  ) );

  // Social Media variables

  $site_options->add_field( array(
    'name'    => esc_html__( 'Social Media', 'cmb2' ),
    'desc'    => esc_html__( 'Urls and accounts for different social media platforms. For use in menus and metadata', 'cmb2' ),
    'id'      => $prefix . 'socialmedia_title',
    'type'    => 'title',
  ) );

  $site_options->add_field( array(
    'name'    => esc_html__( 'Facebook Page URL', 'cmb2' ),
    'id'      => 'socialmedia_facebook_url',
    'type'    => 'text',
  ) );

  $site_options->add_field( array(
    'name'    => esc_html__( 'Twitter Account Handle', 'cmb2' ),
    'id'      => 'socialmedia_twitter',
    'type'    => 'text',
  ) );

  $site_options->add_field( array(
    'name'    => esc_html__( 'Instagram Account Handle', 'cmb2' ),
    'id'      => 'socialmedia_instagram',
    'type'    => 'text',
  ) );

  // Metadata options

  $site_options->add_field( array(
    'name'    => esc_html__( 'Metadata options', 'cmb2' ),
    'desc'    => esc_html__( 'Settings relating to open graph, facebook and twitter sharing, and other social media metadata', 'cmb2' ),
    'id'      => $prefix . 'og_title',
    'type'    => 'title',
  ) );

  $site_options->add_field( array(
    'name'    => esc_html__( 'Open Graph default image', 'cmb2' ),
    'desc'    => esc_html__( 'primarily displayed on Facebook, but other locations as well', 'cmb2' ),
    'id'      => 'og_image',
    'type'    => 'file',
  ) );

  $site_options->add_field( array(
    'name'    => esc_html__( 'Logo for SEO results', 'cmb2' ),
    'desc'    => esc_html__( 'presentation logo for this site (optional)', 'cmb2' ),
    'id'      => 'metadata_logo',
    'type'    => 'file',
  ) );

  $site_options->add_field( array(
    'name'    => esc_html__( 'Facebook App ID', 'cmb2' ),
    'desc'    => esc_html__( '(optional)', 'cmb2' ),
    'id'      => 'og_fb_app_id',
    'type'    => 'text',
  ) );

  // Analytics

  $site_options->add_field( array(
    'name'    => esc_html__( 'Analytics', 'cmb2' ),
    'desc'    => esc_html__( 'Settings for analytics', 'cmb2' ),
    'id'      => $prefix . 'analytics_title',
    'type'    => 'title',
  ) );

  $site_options->add_field( array(
    'name'    => esc_html__( 'Google Analytics Tracking ID', 'cmb2' ),
    'desc'    => esc_html__( '(optional)', 'cmb2' ),
    'id'      => 'google_analytics_id',
    'type'    => 'text',
  ) );
}
