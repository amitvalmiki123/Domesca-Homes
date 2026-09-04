<?php
/**
 * ACF Pro integration.
 *
 * Registers an Options page plus local field groups for the landing page
 * (flexible content) and the "Home" template. The same plugins used by
 * ACF Pro (repeater, flexible content, WYSIWYG, image, link...) are defined
 * here so the theme works before `acf-json` is synced too.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register the customer-facing global options page.
 */
function dsc_register_acf() {
	if ( ! function_exists( 'acf_add_options_page' ) ) {
		return;
	}

	acf_add_options_page( array(
		'page_title' => __( 'Domesca Global Options', 'domesca-homes' ),
		'menu_title' => __( 'Domesca Options', 'domesca-homes' ),
		'menu_slug'  => 'dsc-theme-options',
		'capability' => 'manage_options',
		'redirect'   => false,
	) );
}
add_action( 'acf/init', 'dsc_register_acf' );

/**
 * Register local field groups.
 */
function dsc_register_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	/* ---------------------------------------------------------------
	 * Global / Theme Options
	 * --------------------------------------------------------------- */
	acf_add_local_field_group( array(
		'key'      => 'group_dsc_options',
		'title'    => __( 'Domesca Global Options', 'domesca-homes' ),
		'fields'   => array(
			array( 'key' => 'field_dsc_opt_tab_brand', 'name' => 'tab_brand', 'label' => 'Contact & Branding', 'type' => 'tab' ),
			array(
				'key'           => 'field_dsc_opt_tagline',
				'name'          => 'tagline',
				'label'         => 'Tagline',
				'type'          => 'text',
				'default_value' => 'Lifting Properties, Elevating Standards',
			),
			array(
				'key'           => 'field_dsc_opt_phone',
				'name'          => 'phone',
				'label'         => 'Phone (full tel link)',
				'instructions'  => 'Example: +61411526251',
				'type'          => 'text',
				'default_value' => '+61411526251',
			),
			array(
				'key'           => 'field_dsc_opt_phone_display',
				'name'          => 'phone_display',
				'label'         => 'Phone (displayed)',
				'instructions'  => 'Appears on screen. Example: 0411 526 251',
				'type'          => 'text',
				'default_value' => '0411 526 251',
			),
			array(
				'key'           => 'field_dsc_opt_email',
				'name'          => 'email',
				'label'         => 'Email',
				'type'          => 'text',
				'default_value' => 'Info@Domescahomes.com.au',
			),
			array(
				'key'           => 'field_dsc_opt_address',
				'name'          => 'address',
				'label'         => 'Address / service area',
				'type'          => 'textarea',
				'rows'          => 2,
				'default_value' => "Hillside, Victoria 3037\nServicing Melbourne's north & west",
				'instructions'  => 'Use a new line for each line of the address.',
			),
			array(
				'key'           => 'field_dsc_opt_address_url',
				'name'          => 'address_url',
				'label'         => 'Address / location link',
				'instructions'  => 'Leave empty to show the address as plain text. Example: https://maps.google.com/?q=Hillside+VIC+3037',
				'type'          => 'url',
				'default_value' => 'https://www.google.com/maps?q=Hillside+VIC+3037+Australia&z=11&output=embed',
			),
			array(
				'key'           => 'field_dsc_opt_facebook',
				'name'          => 'facebook_url',
				'label'         => 'Facebook URL',
				'type'          => 'url',
				'default_value' => 'https://www.facebook.com/domescahomes/',
			),
			array( 'key' => 'field_dsc_opt_tab_footer', 'name' => 'tab_footer', 'label' => 'Footer', 'type' => 'tab' ),
			array(
				'key'           => 'field_dsc_opt_footer_about',
				'name'          => 'footer_about',
				'label'         => 'Footer about text',
				'instructions'  => 'Use paragraph tags (<p>) if you want to style individual paragraphs.',
				'type'          => 'wysiwyg',
				'toolbar'       => 'basic',
				'default_value' => 'Lifting Properties, Elevating Standards. A Melbourne-based building company delivering custom homes, renovations, knockdown rebuilds and multi-unit developments across Melbourne&rsquo;s north and west since 2013.',
			),
			array(
				'key'           => 'field_dsc_opt_footer_touch',
				'name'          => 'footer_get_in_touch_title',
				'label'         => 'Footer "Get In Touch" column title',
				'type'          => 'text',
				'default_value' => 'Get In Touch',
			),
			array(
				'key'           => 'field_dsc_opt_footer_cta',
				'name'          => 'footer_request_quote_text',
				'label'         => 'Footer "Request a Quote" button text',
				'type'          => 'text',
				'default_value' => 'Request a Quote',
			),
			array(
				'key'           => 'field_dsc_opt_copyright',
				'name'          => 'copyright',
				'label'         => 'Copyright line',
				'instructions'  => 'Use {year} for the current year and {site} for the WordPress site name. Example: ©{year} {site}. All rights reserved.',
				'type'          => 'text',
				'default_value' => '&copy;{year} {site}. All rights reserved.',
			),
			array( 'key' => 'field_dsc_opt_tab_forms', 'name' => 'tab_forms', 'label' => 'Forms', 'type' => 'tab' ),
			array(
				'key'           => 'field_dsc_opt_hero_form',
				'name'          => 'hero_form_shortcode',
				'label'         => 'Hero / banner form shortcode',
				'instructions'  => 'Paste the Contact Form 7 shortcode here (example: [contact-form-7 id="123" title="Hero Enquiry"]). Leave empty to use the built-in form.',
				'type'          => 'text',
				'default_value' => '',
			),
			array(
				'key'           => 'field_dsc_opt_contact_form',
				'name'          => 'contact_form_shortcode',
				'label'         => 'Final CTA / contact form shortcode',
				'instructions'  => 'Paste the Contact Form 7 shortcode for the last "Contact / Get In Touch" form here. Leave empty to use the built-in form.',
				'type'          => 'text',
				'default_value' => '',
			),
			array(
				'key'           => 'field_dsc_opt_notify',
				'name'          => 'enquiry_notify_email',
				'label'         => 'Enquiry recipient email (built-in form only)',
				'type'          => 'email',
				'default_value' => 'Info@Domescahomes.com.au',
			),
		'location' => array(
			array(
				array( 'param' => 'options_page', 'operator' => '==', 'value' => 'dsc-theme-options' ),
			),
		),
		'menu_order' => 0,
		'show_in_rest' => true,
	) ) );

	/* ---------------------------------------------------------------
	 * Front / Landing page (ads.html as front page)
	 * Flexible content lets you reorder everything from the edit screen.
	 * --------------------------------------------------------------- */
	acf_add_local_field_group( array(
		'key'      => 'group_dsc_landing_page',
		'title'    => __( 'Landing Page Sections', 'domesca-homes' ),
		'fields'   => array(
			array(
				'key'           => 'field_dsc_landing_sections',
				'name'          => 'landing_sections',
				'label'         => 'Landing page sections',
				'type'          => 'flexible_content',
				'button_label'  => 'Add section',
				'layouts'       => array(
					'hero' => array(
						'label' => 'Hero',
						'name'  => 'hero',
						'sub_fields' => dsc_landing_hero_fields(),
					),
					'creds' => array(
						'label' => 'Credentials strip',
						'name'  => 'creds',
						'sub_fields' => dsc_landing_creds_fields(),
					),
					'about' => array(
						'label' => 'Value proposition',
						'name'  => 'about',
						'sub_fields' => dsc_landing_about_fields(),
					),
					'why' => array(
						'label' => 'What you get',
						'name'  => 'why',
						'sub_fields' => dsc_landing_why_fields(),
					),
					'assure' => array(
						'label' => 'Assurance strip',
						'name'  => 'assure',
						'sub_fields' => dsc_landing_assure_fields(),
					),
					'process' => array(
						'label' => 'Process',
						'name'  => 'process',
						'sub_fields' => dsc_landing_process_fields(),
					),
					'projects' => array(
						'label' => 'Projects',
						'name'  => 'projects',
						'sub_fields' => dsc_landing_projects_fields(),
					),
					'testimonials' => array(
						'label' => 'Testimonials',
						'name'  => 'testimonials',
						'sub_fields' => dsc_landing_testimonials_fields(),
					),
					'areas' => array(
						'label' => 'Areas We Build',
						'name'  => 'areas',
						'sub_fields' => dsc_landing_areas_fields(),
					),
					'faq' => array(
						'label' => 'FAQ',
						'name'  => 'faq',
						'sub_fields' => dsc_landing_faq_fields(),
					),
					'cta' => array(
						'label' => 'Final CTA / Contact',
						'name'  => 'cta',
						'sub_fields' => dsc_landing_cta_fields(),
					),
				),
				'instructions' => 'If empty the theme renders the original Domesca landing page sections in order.',
			),
		),
		'location' => array(
			array(
				array( 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ),
			),
			array(
				array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-landing.php' ),
			),
		),
		'menu_order' => 1,
		'show_in_rest' => true,
	) );

	/* ---------------------------------------------------------------
	 * Home page template (index.html content, optional future use)
	 * --------------------------------------------------------------- */
	acf_add_local_field_group( array(
		'key'      => 'group_dsc_home_page',
		'title'    => __( 'Home Page Sections', 'domesca-homes' ),
		'fields'   => array(
			array(
				'key'           => 'field_dsc_home_sections',
				'name'          => 'home_sections',
				'label'         => 'Home page sections',
				'type'          => 'flexible_content',
				'button_label'  => 'Add section',
				'layouts'       => array(
					'hero' => array(
						'label' => 'Hero',
						'name'  => 'hero',
						'sub_fields' => dsc_landing_hero_fields(),
					),
					'creds' => array(
						'label' => 'Credentials',
						'name'  => 'creds',
						'sub_fields' => dsc_landing_creds_fields(),
					),
					'about' => array(
						'label' => 'About',
						'name'  => 'about',
						'sub_fields' => dsc_landing_about_fields(),
					),
					'services' => array(
						'label' => 'Services',
						'name'  => 'services',
						'sub_fields' => dsc_home_services_fields(),
					),
					'why' => array(
						'label' => 'Why choose us',
						'name'  => 'why',
						'sub_fields' => dsc_landing_why_fields(),
					),
					'process' => array(
						'label' => 'Process',
						'name'  => 'process',
						'sub_fields' => dsc_landing_process_fields(),
					),
					'projects' => array(
						'label' => 'Projects',
						'name'  => 'projects',
						'sub_fields' => dsc_home_projects_fields(),
					),
					'developers' => array(
						'label' => 'Developers / investors',
						'name'  => 'developers',
						'sub_fields' => dsc_home_developers_fields(),
					),
					'testimonials' => array(
						'label' => 'Testimonials',
						'name'  => 'testimonials',
						'sub_fields' => dsc_landing_testimonials_fields(),
					),
					'areas' => array(
						'label' => 'Areas',
						'name'  => 'areas',
						'sub_fields' => dsc_landing_areas_fields(),
					),
					'faq' => array(
						'label' => 'FAQ tabs',
						'name'  => 'faq',
						'sub_fields' => dsc_home_faq_fields(),
					),
					'cta' => array(
						'label' => 'Final CTA / contact',
						'name'  => 'cta',
						'sub_fields' => dsc_landing_cta_fields(),
					),
				),
			),
		),
		'location' => array(
			array(
				array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-home.php' ),
			),
		),
		'menu_order' => 2,
		'show_in_rest' => true,
	) );
}
add_action( 'acf/init', 'dsc_register_fields' );

/* -----------------------------------------------------------------
 * Landing layout field definitions
 * ----------------------------------------------------------------- */


/**
 * Common fields for every flexible-content section layout.
 *
 * Rule 4: each section can be shown/hidden and reordered. The `show`
 * toggle is default true and `order` uses 10/20/30... so the layout order
 * can be overridden from the edit screen.
 */
function dsc_section_common_fields( $prefix = 'sec' ) {
	return array(
		array(
			'key'           => 'field_' . $prefix . '_show',
			'name'          => 'show',
			'label'         => 'Show this section?',
			'type'          => 'true_false',
			'ui'            => 1,
			'default_value' => 1,
		),
		array(
			'key'           => 'field_' . $prefix . '_order',
			'name'          => 'order',
			'label'         => 'Order (lower number appears first)',
			'type'          => 'number',
			'default_value' => 10,
		),
	);
}

function dsc_landing_hero_fields() {
	return array_merge(dsc_section_common_fields('ld_hero'), array(
		array( 'key' => 'field_dsc_l_hero_image', 'name' => 'image', 'label' => 'Hero image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium', 'default_value' => '' ),
		array( 'key' => 'field_dsc_l_hero_alt', 'name' => 'alt', 'label' => 'Image alt text', 'type' => 'text' ),
		array(
			'key'          => 'field_dsc_l_hero_badges',
			'name'         => 'badges',
			'label'        => 'Badges',
			'type'         => 'repeater',
			'button_label' => 'Add badge',
			'sub_fields'   => array( array( 'key' => 'field_dsc_l_hero_badge_label', 'name' => 'label', 'label' => 'Badge text', 'type' => 'text' ) ),
		),
		array( 'key' => 'field_dsc_l_hero_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_hero_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_l_hero_sub', 'name' => 'sub', 'label' => 'Subtitle', 'type' => 'textarea', 'rows' => 4 ),
		array( 'key' => 'field_dsc_l_hero_btn1', 'name' => 'btn1_label', 'label' => 'Primary button label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_hero_btn1_url', 'name' => 'btn1_url', 'label' => 'Primary button URL', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_hero_btn2', 'name' => 'btn2_label', 'label' => 'Secondary button label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_hero_btn2_url', 'name' => 'btn2_url', 'label' => 'Secondary button URL', 'type' => 'text' ),
	));
}

function dsc_landing_creds_fields() {
	return array_merge(dsc_section_common_fields('ld_creds'), array(
		array(
			'key'          => 'field_dsc_l_creds_items',
			'name'         => 'items',
			'label'        => 'Credentials',
			'type'         => 'repeater',
			'button_label' => 'Add credential',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_l_creds_value', 'name' => 'value', 'label' => 'Value', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_creds_label', 'name' => 'label', 'label' => 'Label', 'type' => 'text' ),
			),
		),
	));
}

function dsc_landing_about_fields() {
	return array_merge(dsc_section_common_fields('ld_about'), array(
		array( 'key' => 'field_dsc_l_about_img_a', 'name' => 'image_a', 'label' => 'Image A', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
		array( 'key' => 'field_dsc_l_about_img_b', 'name' => 'image_b', 'label' => 'Image B', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
		array( 'key' => 'field_dsc_l_about_stamp', 'name' => 'stamp', 'label' => 'Est. stamp', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_about_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_about_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_l_about_lead', 'name' => 'lead', 'label' => 'Intro / visible paragraphs (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0 ),
		array( 'key' => 'field_dsc_l_about_more', 'name' => 'more', 'label' => 'Read-more paragraphs (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0, 'instructions' => 'These paragraphs sit behind the "Read more" toggle.' ),
		array(
			'key'          => 'field_dsc_l_about_points',
			'name'         => 'points',
			'label'        => 'Points',
			'type'         => 'repeater',
			'button_label' => 'Add point',
			'sub_fields'   => array( array( 'key' => 'field_dsc_l_about_point', 'name' => 'label', 'label' => 'Point', 'type' => 'text' ) ),
		),
	));
}

function dsc_landing_why_fields() {
	return array_merge(dsc_section_common_fields('ld_why'), array(
		array( 'key' => 'field_dsc_l_why_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_why_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array(
			'key'          => 'field_dsc_l_why_items',
			'name'         => 'items',
			'label'        => 'Included items',
			'type'         => 'repeater',
			'button_label' => 'Add item',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_l_why_icon', 'name' => 'icon', 'label' => 'Icon', 'type' => 'select', 'choices' => array( 'price' => 'Pricing', 'chat' => 'Chat', 'cart' => 'Cart', 'build' => 'Build', 'check' => 'Check', 'shield' => 'Shield' ), 'default_value' => 'check', 'return_format' => 'value' ),
				array( 'key' => 'field_dsc_l_why_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_why_text', 'name' => 'text', 'label' => 'Description', 'type' => 'textarea', 'rows' => 3 ),
			),
		),
	));
}

function dsc_landing_assure_fields() {
	return array_merge(dsc_section_common_fields('ld_assure'), array(
		array( 'key' => 'field_dsc_l_assure_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'field_dsc_l_assure_text', 'name' => 'text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 3 ),
		array( 'key' => 'field_dsc_l_assure_btn', 'name' => 'button', 'label' => 'Button label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_assure_url', 'name' => 'url', 'label' => 'Button URL', 'type' => 'text' ),
	));
}

function dsc_landing_process_fields() {
	return array_merge(dsc_section_common_fields('ld_proc'), array(
		array( 'key' => 'field_dsc_l_proc_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_proc_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_l_proc_lead', 'name' => 'lead', 'label' => 'Intro (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
		array(
			'key'          => 'field_dsc_l_proc_steps',
			'name'         => 'steps',
			'label'        => 'Steps',
			'type'         => 'repeater',
			'button_label' => 'Add step',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_l_proc_label', 'name' => 'label', 'label' => 'Step label', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_proc_title', 'name' => 'title', 'label' => 'Step title', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_proc_text', 'name' => 'text', 'label' => 'Description', 'type' => 'textarea', 'rows' => 3 ),
			),
		),
		array( 'key' => 'field_dsc_l_proc_note', 'name' => 'note', 'label' => 'Note (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
		array( 'key' => 'field_dsc_l_proc_btn', 'name' => 'button', 'label' => 'Button label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_proc_url', 'name' => 'url', 'label' => 'Button URL', 'type' => 'text' ),
	));
}

function dsc_landing_projects_fields() {
	return array_merge(dsc_section_common_fields('ld_proj'), array(
		array( 'key' => 'field_dsc_l_proj_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_proj_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_l_proj_lead', 'name' => 'lead', 'label' => 'Intro', 'type' => 'textarea', 'rows' => 2 ),
		array(
			'key'          => 'field_dsc_l_proj_items',
			'name'         => 'items',
			'label'        => 'Project tiles',
			'type'         => 'repeater',
			'button_label' => 'Add tile',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_l_proj_image', 'name' => 'image', 'label' => 'Image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
				array( 'key' => 'field_dsc_l_proj_alt', 'name' => 'alt', 'label' => 'Alt text', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_proj_cat', 'name' => 'category', 'label' => 'Category label', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_proj_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_proj_class', 'name' => 'class', 'label' => 'Tile width', 'type' => 'select', 'choices' => array( '' => 'Default', 'is-wide' => 'Wide (2 cols)', 'is-half' => 'Half (1 col)' ), 'default_value' => '', 'return_format' => 'value' ),
			),
		),
	));
}

function dsc_landing_testimonials_fields() {
	return array_merge(dsc_section_common_fields('ld_tm'), array(
		array( 'key' => 'field_dsc_l_tm_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_tm_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_l_tm_lead', 'name' => 'lead', 'label' => 'Intro', 'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'field_dsc_l_tm_foot', 'name' => 'foot', 'label' => 'Footer text', 'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'field_dsc_l_tm_foot_btn', 'name' => 'foot_button', 'label' => 'Footer button label', 'type' => 'text' ),
		array(
			'key'          => 'field_dsc_l_tm_items',
			'name'         => 'items',
			'label'        => 'Reviews',
			'type'         => 'repeater',
			'button_label' => 'Add review',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_l_tm_quote', 'name' => 'quote', 'label' => 'Quote (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
				array( 'key' => 'field_dsc_l_tm_more', 'name' => 'more', 'label' => 'Continue quote (WYSIWYG, optional)', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
				array( 'key' => 'field_dsc_l_tm_initials', 'name' => 'initials', 'label' => 'Initials', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_tm_name', 'name' => 'name', 'label' => 'Name', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_tm_role', 'name' => 'role', 'label' => 'Role / project', 'type' => 'text' ),
			),
		),
	));
}

function dsc_landing_areas_fields() {
	return array_merge(dsc_section_common_fields('ld_areas'), array(
		array( 'key' => 'field_dsc_l_areas_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_areas_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_l_areas_prose', 'name' => 'prose', 'label' => 'Description (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0 ),
		array(
			'key'          => 'field_dsc_l_areas_list',
			'name'         => 'list',
			'label'        => 'Areas list',
			'type'         => 'repeater',
			'button_label' => 'Add area',
			'sub_fields'   => array( array( 'key' => 'field_dsc_l_areas_item', 'name' => 'label', 'label' => 'Area', 'type' => 'text' ) ),
		),
		array( 'key' => 'field_dsc_l_areas_box', 'name' => 'box', 'label' => 'Notice box', 'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'field_dsc_l_areas_btn1', 'name' => 'button1', 'label' => 'Button 1 label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_areas_url1', 'name' => 'url1', 'label' => 'Button 1 URL', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_areas_btn2', 'name' => 'button2', 'label' => 'Button 2 label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_areas_url2', 'name' => 'url2', 'label' => 'Button 2 URL', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_areas_map', 'name' => 'map', 'label' => 'Map embed URL', 'type' => 'url' ),
	));
}

function dsc_landing_faq_fields() {
	return array_merge(dsc_section_common_fields('ld_faq'), array(
		array( 'key' => 'field_dsc_l_faq_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_faq_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_l_faq_aside_title', 'name' => 'aside_title', 'label' => 'Aside title', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_faq_aside_text', 'name' => 'aside_text', 'label' => 'Aside text', 'type' => 'textarea', 'rows' => 3 ),
		array(
			'key'          => 'field_dsc_l_faq_items',
			'name'         => 'items',
			'label'        => 'Questions',
			'type'         => 'repeater',
			'button_label' => 'Add question',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_l_faq_q', 'name' => 'question', 'label' => 'Question', 'type' => 'text' ),
				array( 'key' => 'field_dsc_l_faq_a', 'name' => 'answer', 'label' => 'Answer (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0, 'instructions' => 'Use paragraphs so you can add custom styling per paragraph.' ),
			),
		),
	));
}

function dsc_landing_cta_fields() {
	return array_merge(dsc_section_common_fields('ld_cta'), array(
		array( 'key' => 'field_dsc_l_cta_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_cta_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_l_cta_sub', 'name' => 'sub', 'label' => 'Subtitle', 'type' => 'textarea', 'rows' => 3 ),
		array( 'key' => 'field_dsc_l_cta_image', 'name' => 'image', 'label' => 'Background image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
		array( 'key' => 'field_dsc_l_cta_form_eyebrow', 'name' => 'form_eyebrow', 'label' => 'Form eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_cta_form_title', 'name' => 'form_title', 'label' => 'Form title', 'type' => 'text' ),
		array( 'key' => 'field_dsc_l_cta_form_text', 'name' => 'form_text', 'label' => 'Form text', 'type' => 'textarea', 'rows' => 3 ),
	));
}

/* -----------------------------------------------------------------
 * Home layout field helpers (index.html)
 * ----------------------------------------------------------------- */

function dsc_home_services_fields() {
	return array_merge(dsc_section_common_fields('hm_services'), array(
		array( 'key' => 'field_dsc_h_svc_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_h_svc_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_h_svc_lead', 'name' => 'lead', 'label' => 'Intro', 'type' => 'textarea', 'rows' => 3 ),
		array( 'key' => 'field_dsc_h_svc_btn', 'name' => 'button', 'label' => 'Top button label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_h_svc_url', 'name' => 'url', 'label' => 'Top button URL', 'type' => 'text' ),
		array(
			'key'          => 'field_dsc_h_svc_items',
			'name'         => 'items',
			'label'        => 'Services',
			'type'         => 'repeater',
			'button_label' => 'Add service',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_h_svc_image', 'name' => 'image', 'label' => 'Image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
				array( 'key' => 'field_dsc_h_svc_no', 'name' => 'number', 'label' => 'Number / eyebrow', 'type' => 'text' ),
				array( 'key' => 'field_dsc_h_svc_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
				array( 'key' => 'field_dsc_h_svc_text', 'name' => 'text', 'label' => 'Short description', 'type' => 'textarea', 'rows' => 3 ),
				array( 'key' => 'field_dsc_h_svc_more', 'name' => 'more', 'label' => 'Read more (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0 ),
				array(
					'key'          => 'field_dsc_h_svc_tags',
					'name'         => 'tags',
					'label'        => 'Tags',
					'type'         => 'repeater',
					'button_label' => 'Add tag',
					'sub_fields'   => array( array( 'key' => 'field_dsc_h_svc_tag', 'name' => 'label', 'label' => 'Tag', 'type' => 'text' ) ),
				),
			),
		),
	));
}

function dsc_home_projects_fields() {
	return array_merge(dsc_section_common_fields('hm_projects'), array(
		array( 'key' => 'field_dsc_h_proj_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_h_proj_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_h_proj_lead', 'name' => 'lead', 'label' => 'Intro', 'type' => 'textarea', 'rows' => 2 ),
		array(
			'key'          => 'field_dsc_h_proj_filters',
			'name'         => 'filters',
			'label'        => 'Filter chips',
			'type'         => 'repeater',
			'button_label' => 'Add filter',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_h_proj_filter_key', 'name' => 'key', 'label' => 'Filter key', 'type' => 'text' ),
				array( 'key' => 'field_dsc_h_proj_filter_label', 'name' => 'label', 'label' => 'Filter label', 'type' => 'text' ),
			),
		),
		array(
			'key'          => 'field_dsc_h_proj_items',
			'name'         => 'items',
			'label'        => 'Project tiles',
			'type'         => 'repeater',
			'button_label' => 'Add tile',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_h_proj_image', 'name' => 'image', 'label' => 'Image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
				array( 'key' => 'field_dsc_h_proj_alt', 'name' => 'alt', 'label' => 'Alt', 'type' => 'text' ),
				array( 'key' => 'field_dsc_h_proj_cat', 'name' => 'category', 'label' => 'Category', 'type' => 'text' ),
				array( 'key' => 'field_dsc_h_proj_filter', 'name' => 'filters', 'label' => 'Filter keys (space separated)', 'type' => 'text' ),
				array( 'key' => 'field_dsc_h_proj_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
				array( 'key' => 'field_dsc_h_proj_class', 'name' => 'class', 'label' => 'Width', 'type' => 'select', 'choices' => array( '' => 'Default', 'is-wide' => 'Wide', 'is-half' => 'Half' ), 'default_value' => '' ),
			),
		),
	));
}

function dsc_home_developers_fields() {
	return array_merge(dsc_section_common_fields('hm_developers'), array(
		array( 'key' => 'field_dsc_h_dev_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_h_dev_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_h_dev_prose', 'name' => 'prose', 'label' => 'Description (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0 ),
		array(
			'key'          => 'field_dsc_h_dev_list',
			'name'         => 'list',
			'label'        => 'Assist list',
			'type'         => 'repeater',
			'button_label' => 'Add item',
			'sub_fields'   => array( array( 'key' => 'field_dsc_h_dev_list_item', 'name' => 'label', 'label' => 'Item', 'type' => 'text' ) ),
		),
		array( 'key' => 'field_dsc_h_dev_image', 'name' => 'image', 'label' => 'Image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
		array( 'key' => 'field_dsc_h_dev_badge', 'name' => 'badge_title', 'label' => 'Badge title', 'type' => 'text' ),
		array( 'key' => 'field_dsc_h_dev_badge_sub', 'name' => 'badge_text', 'label' => 'Badge text', 'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'field_dsc_h_dev_btn', 'name' => 'button', 'label' => 'Button label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_h_dev_url', 'name' => 'url', 'label' => 'Button URL', 'type' => 'text' ),
	));
}

function dsc_home_faq_fields() {
	return array_merge(dsc_section_common_fields('hm_faq'), array(
		array( 'key' => 'field_dsc_h_faq_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_h_faq_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array(
			'key'          => 'field_dsc_h_faq_tabs',
			'name'         => 'tabs',
			'label'        => 'FAQ categories',
			'type'         => 'repeater',
			'button_label' => 'Add category',
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_h_faq_tab_label', 'name' => 'label', 'label' => 'Tab label', 'type' => 'text' ),
				array( 'key' => 'field_dsc_h_faq_tab_id', 'name' => 'id', 'label' => 'Tab id (keep lower-case)', 'type' => 'text' ),
				array(
					'key'          => 'field_dsc_h_faq_tab_items',
					'name'         => 'items',
					'label'        => 'Questions',
					'type'         => 'repeater',
					'button_label' => 'Add question',
					'sub_fields'   => array(
						array( 'key' => 'field_dsc_h_faq_q', 'name' => 'question', 'label' => 'Question', 'type' => 'text' ),
						array( 'key' => 'field_dsc_h_faq_a', 'name' => 'answer', 'label' => 'Answer (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0 ),
					),
				),
			),
		),
		array( 'key' => 'field_dsc_h_faq_aside_title', 'name' => 'aside_title', 'label' => 'Aside title', 'type' => 'text' ),
		array( 'key' => 'field_dsc_h_faq_aside_text', 'name' => 'aside_text', 'label' => 'Aside text', 'type' => 'textarea', 'rows' => 4 )));
}
