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

  // SPLASH
  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Splash', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'splash_title',
    'type'    => 'title',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Splash title', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'splash_title_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
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

  // BELOW THE FOLD
  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Below the fold', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'btf_title',
    'type'    => 'title',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'First title', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "Play with the power of nature"', 'cmb2' ),
    'id'      => 'btf_title_text',
    'type'    => 'text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'First text', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "Enter formOS, an entertainment system inspired by the modular qualities of Nature…"', 'cmb2' ),
    'id'      => 'btf_first_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  // WHAT EXACTLY IS FORMOS
  $front_page_options->add_field( array(
    'name'    => esc_html__( 'What\'s formOS', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'what_is_title',
    'type'    => 'title',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'First title', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "But what exactly is formOS?"', 'cmb2' ),
    'id'      => 'what_is_title_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'First text', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "formOS is a modular gaming system that integrates physical and digital…"', 'cmb2' ),
    'id'      => 'what_is_first_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Video text', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "See formOS in action:"', 'cmb2' ),
    'id'      => 'what_is_video_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
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

  // COUNTDOWN
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

  // HOW FORMOS WORK
  $front_page_options->add_field( array(
    'name'    => esc_html__( 'How formOS works', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'how_works_title',
    'type'    => 'title',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Title', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "How formOS works"', 'cmb2' ),
    'id'      => 'how_works_title_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'First title', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "formOS game/app library"', 'cmb2' ),
    'id'      => 'how_works_first_title',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );


   // How it works
  $front_page_options->add_field( array(
    'name'    => esc_html__( 'First text', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "App Store and Google Play – games published by formOS and third party publishers"', 'cmb2' ),
    'id'      => 'how_works_first_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Second title', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "Your own device"', 'cmb2' ),
    'id'      => 'how_works_second_title',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Second text', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "iOS, Apple TV*, Android and Google Play*"', 'cmb2' ),
    'id'      => 'how_works_second_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Third title', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "formOS units"', 'cmb2' ),
    'id'      => 'how_works_third_title',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Third text', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "4 units + charger in the Ignite Kit"', 'cmb2' ),
    'id'      => 'how_works_third_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Six-sides title', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "A formOS unit has 6 connecting sides"', 'cmb2' ),
    'id'      => 'how_works_six_sides_title',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Six-sides video', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'six_sides_video',
    'type'    => 'file',
    'query_args' => array(
      'type' => 'video/mp4',
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Six-sides text', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "formOS can be connected in an infinite amount of ways"', 'cmb2' ),
    'id'      => 'how_works_six_sides_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( '"More" text', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "And many more..."', 'cmb2' ),
    'id'      => 'how_works_six_sides_more_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  // Modules
  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Ignite Kit', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'modules_title',
    'type'    => 'title',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Title', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "THE formOS Ignite Kit: 4 modules to start with"', 'cmb2' ),
    'id'      => 'modules_title_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $central_module_group = $front_page_options->add_field( array(
    'name'    => esc_html__( 'Central Module', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'central_module',
    'type'    => 'group',
    'repeatable' => false
  ) );

  $front_page_options->add_group_field($central_module_group, array(
    'name'    => esc_html__( 'Name', 'cmb2' ),
    'id'      => 'module_name',
    'type'    => 'text',
  ) );

  $front_page_options->add_group_field($central_module_group, array(
    'name'    => esc_html__( 'Description', 'cmb2' ),
    'id'      => 'module_desc',
    'type'    => 'textarea_small',
  ) );

  $front_page_options->add_group_field($central_module_group, array(
    'name'    => esc_html__( 'Specs', 'cmb2' ),
    'id'      => 'module_specs',
    'type'    => 'wysiwyg',
    'options' => array(
      'media_buttons' => false, // show insert/upload button(s)
      'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
    ),
  ) );

  $front_page_options->add_group_field($central_module_group, array(
    'name'    => esc_html__( 'Image', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'module_image',
    'type'    => 'file',
    'preview_size' => 'medium'
  ) );

  $modules_group = $front_page_options->add_field( array(
    'name'    => esc_html__( 'System Modules', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'modules',
    'type'    => 'group',
    'options' => array(
      'group_title'   => __( 'Module {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
      'add_button'    => __( 'Add Another Module', 'cmb2' ),
      'remove_button' => __( 'Remove Module', 'cmb2' ),
      'sortable'      => true, // beta
    ),
  ) );

  $front_page_options->add_group_field($modules_group, array(
    'name'    => esc_html__( 'Name', 'cmb2' ),
    'id'      => 'module_name',
    'type'    => 'text',
  ) );

  $front_page_options->add_group_field($modules_group, array(
    'name'    => esc_html__( 'Description', 'cmb2' ),
    'id'      => 'module_desc',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 5,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_group_field($modules_group, array(
    'name'    => esc_html__( 'Specs', 'cmb2' ),
    'id'      => 'module_specs',
    'type'    => 'wysiwyg',
    'options' => array(
      'media_buttons' => false, // show insert/upload button(s)
      'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_group_field($modules_group, array(
    'name'    => esc_html__( 'Image', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'module_image',
    'type'    => 'file',
    'preview_size' => 'medium'
  ) );

  // DEMOS
  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Demos', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'demos_title',
    'type'    => 'title',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Title', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "The formOS demos and beyond…"', 'cmb2' ),
    'id'      => 'demos_title_text',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Description', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "We developed a suite of demos to test the different ways in which you can play and create with formOS"', 'cmb2' ),
    'id'      => 'demos_desc',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );


  // SIGNUP
  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Signup', 'cmb2' ),
    'desc'    => esc_html__( '', 'cmb2' ),
    'id'      => 'signup_title',
    'type'    => 'title',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Call to action text', 'cmb2' ),
    'desc'    => esc_html__( 'Ex. "formOS is coming soon, stay updated:"', 'cmb2' ),
    'id'      => 'signup_calltoaction',
    'type'    => 'wysiwyg',
    'options' => array(
      'textarea_rows' => 3,
      'media_buttons' => false,
      'teeny' => true,
    ),
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Mailchimp signup form url', 'cmb2' ),
    'desc'    => esc_html__( 'just the action url from the Mailchimp form embed code. e.g. //xyz.us16.list-manage.com/subscribe/post?u=4aa0481cce7bb6784bccdb155&id=d87ge1ad9e', 'cmb2' ),
    'id'      => 'signup_form_action',
    'type'    => 'text',
  ) );

  $front_page_options->add_field( array(
    'name'    => esc_html__( 'Mailchimp signup form validation code', 'cmb2' ),
    'desc'    => esc_html__( 'just the value of the name attribute of the hidden input before the submit button', 'cmb2' ),
    'id'      => 'signup_form_validation',
    'type'    => 'text',
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
