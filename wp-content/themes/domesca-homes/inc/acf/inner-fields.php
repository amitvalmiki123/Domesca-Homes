<?php
/**
 * ACF field builders for the Domesca Inner Page template.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Page type selector for the inner page template.
 */
function dsc_inner_page_type_fields() {
	return array(
		'key'           => 'field_dsc_inner_page_type',
		'name'          => 'page_type',
		'label'         => __( 'Page type / defaults', 'domesca-homes' ),
		'instructions'  => __( 'Select which converted HTML page this page should look like by default. The sections below override it when filled in.', 'domesca-homes' ),
		'type'          => 'select',
		'choices'       => array(
			'about'                  => __( 'About Us', 'domesca-homes' ),
			'services'               => __( 'Services', 'domesca-homes' ),
			'our-plans'              => __( 'Our Plans', 'domesca-homes' ),
			'new-builds'             => __( 'New Builds', 'domesca-homes' ),
			'townhouse-developments' => __( 'Townhouse Developments', 'domesca-homes' ),
			'multi-unit-projects'    => __( 'Multi-Unit Projects', 'domesca-homes' ),
			'extensions'             => __( 'Extensions', 'domesca-homes' ),
			'renovations'            => __( 'Renovations', 'domesca-homes' ),
			'portfolio'              => __( 'Portfolio', 'domesca-homes' ),
			'contact'                => __( 'Contact', 'domesca-homes' ),
			'location-hillside'      => __( 'Location / Hillside', 'domesca-homes' ),
			'privacy-policy'         => __( 'Privacy Policy', 'domesca-homes' ),
			'plain'                  => __( 'Plain / Custom', 'domesca-homes' ),
		),
		'default_value' => 'about',
		'return_format' => 'value',
	);
}

/**
 * Page banner fields.
 */
function dsc_page_banner_fields() {
	return array_merge( dsc_section_common_fields( 'pg_banner' ), array(
		array( 'key' => 'field_dsc_pg_banner_plain', 'name' => 'plain', 'label' => 'Plain (no form column)', 'type' => 'true_false', 'default_value' => 0, 'ui' => 1 ),
		array( 'key' => 'field_dsc_pg_banner_image', 'name' => 'image', 'label' => 'Background image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
		array( 'key' => 'field_dsc_pg_banner_title', 'name' => 'title', 'label' => 'Title (H1)', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_pg_banner_sub', 'name' => 'sub', 'label' => 'Subtitle', 'type' => 'textarea', 'rows' => 3 ),
		array( 'key' => 'field_dsc_pg_banner_btn1', 'name' => 'btn1_label', 'label' => 'Primary button label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_banner_u1', 'name' => 'btn1_url', 'label' => 'Primary button URL', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_banner_btn2', 'name' => 'btn2_label', 'label' => 'Secondary button label', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_banner_u2', 'name' => 'btn2_url', 'label' => 'Secondary button URL', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_banner_form', 'name' => 'show_form', 'label' => 'Show enquiry form', 'type' => 'true_false', 'default_value' => 1, 'ui' => 1 ),
		array( 'key' => 'field_dsc_pg_banner_fe', 'name' => 'form_eyebrow', 'label' => 'Form eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_banner_ft', 'name' => 'form_title', 'label' => 'Form title', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_banner_fx', 'name' => 'form_text', 'label' => 'Form text', 'type' => 'textarea', 'rows' => 3 ),
	) );
}

/**
 * Split blocks fields.
 */
function dsc_page_splits_fields() {
	return array_merge( dsc_section_common_fields( 'pg_splits' ), array(
		array(
			'key'          => 'field_dsc_pg_splits_items',
			'name'         => 'items',
			'label'        => __( 'Split blocks', 'domesca-homes' ),
			'type'         => 'repeater',
			'button_label' => __( 'Add split', 'domesca-homes' ),
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_pg_splits_flip', 'name' => 'flip', 'label' => 'Flip (media left)', 'type' => 'true_false', 'default_value' => 0, 'ui' => 1 ),
				array( 'key' => 'field_dsc_pg_splits_tag', 'name' => 'heading_tag', 'label' => 'Heading level', 'type' => 'select', 'choices' => array( 'h2' => 'H2', 'h3' => 'H3' ), 'default_value' => 'h2' ),
				array( 'key' => 'field_dsc_pg_splits_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_splits_heading', 'name' => 'heading', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 2, 'new_lines' => '' ),
				array(
					'key'          => 'field_dsc_pg_splits_prose',
					'name'         => 'prose',
					'label'        => __( 'Paragraphs', 'domesca-homes' ),
					'type'         => 'repeater',
					'button_label' => __( 'Add paragraph', 'domesca-homes' ),
					'sub_fields'   => array(
						array( 'key' => 'field_dsc_pg_splits_ptag', 'name' => 'tag', 'label' => 'Type', 'type' => 'select', 'choices' => array( 'p' => 'Paragraph', 'lead' => 'Lead paragraph' ), 'default_value' => 'p' ),
						array( 'key' => 'field_dsc_pg_splits_ph', 'name' => 'html', 'label' => 'Text / HTML', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
					),
				),
				array(
					'key'          => 'field_dsc_pg_splits_list',
					'name'         => 'list',
					'label'        => __( 'Check list', 'domesca-homes' ),
					'type'         => 'repeater',
					'button_label' => __( 'Add item', 'domesca-homes' ),
					'sub_fields'   => array(
						array( 'key' => 'field_dsc_pg_splits_li', 'name' => 'label', 'label' => 'Label', 'type' => 'textarea', 'rows' => 1 ),
						array( 'key' => 'field_dsc_pg_splits_lu', 'name' => 'url', 'label' => 'Link URL', 'type' => 'text' ),
					),
				),
				array(
					'key'          => 'field_dsc_pg_splits_actions',
					'name'         => 'actions',
					'label'        => __( 'Buttons', 'domesca-homes' ),
					'type'         => 'repeater',
					'button_label' => __( 'Add button', 'domesca-homes' ),
					'sub_fields'   => array(
						array( 'key' => 'field_dsc_pg_splits_al', 'name' => 'label', 'label' => 'Label', 'type' => 'text' ),
						array( 'key' => 'field_dsc_pg_splits_au', 'name' => 'url', 'label' => 'URL', 'type' => 'text' ),
						array( 'key' => 'field_dsc_pg_splits_as', 'name' => 'style', 'label' => 'Style', 'type' => 'select', 'choices' => array( '' => 'Primary', 'ghost' => 'Ghost' ) ),
					),
				),
				array( 'key' => 'field_dsc_pg_splits_image', 'name' => 'image', 'label' => 'Image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
				array( 'key' => 'field_dsc_pg_splits_alt', 'name' => 'alt', 'label' => 'Alt text', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_splits_tagtext', 'name' => 'tag', 'label' => 'Image tag', 'type' => 'text' ),
			),
		),
	) );
}

/**
 * "Your plans, or ours" fields.
 */
function dsc_page_plans_fields() {
	return array_merge( dsc_section_common_fields( 'pg_plans' ), array(
		array( 'key' => 'field_dsc_pg_plans_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_plans_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_pg_plans_lead', 'name' => 'lead', 'label' => 'Lead text (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0 ),
		array( 'key' => 'field_dsc_pg_plans_more', 'name' => 'more', 'label' => 'Read more (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0 ),
		array( 'key' => 'field_dsc_pg_plans_ml', 'name' => 'more_label', 'label' => 'Read more label', 'type' => 'text' ),
		array(
			'key'          => 'field_dsc_pg_plans_routes',
			'name'         => 'routes',
			'label'        => __( 'Plan routes', 'domesca-homes' ),
			'type'         => 'repeater',
			'button_label' => __( 'Add route', 'domesca-homes' ),
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_pg_plans_ric', 'name' => 'icon', 'label' => 'Icon', 'type' => 'select', 'choices' => array( 'plans' => 'Plans', 'pencil' => 'Pencil' ), 'default_value' => 'plans' ),
				array( 'key' => 'field_dsc_pg_plans_rt', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_plans_rx', 'name' => 'text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 2 ),
			),
		),
		array( 'key' => 'field_dsc_pg_plans_image', 'name' => 'image', 'label' => 'Image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
		array( 'key' => 'field_dsc_pg_plans_alt', 'name' => 'alt', 'label' => 'Alt text', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_plans_stamp', 'name' => 'stamp', 'label' => 'Stamp', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_plans_stx', 'name' => 'stamp_text', 'label' => 'Stamp text', 'type' => 'text' ),
	) );
}

/**
 * Dark why grid fields (reuses the landing inclusion pattern but with `why` styles).
 */
function dsc_page_why_fields() {
	return array_merge( dsc_section_common_fields( 'pg_why' ), array(
		array( 'key' => 'field_dsc_pg_why_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_why_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_pg_why_image', 'name' => 'image', 'label' => 'Background image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
		array(
			'key'          => 'field_dsc_pg_why_items',
			'name'         => 'items',
			'label'        => __( 'Grid cells', 'domesca-homes' ),
			'type'         => 'repeater',
			'button_label' => __( 'Add cell', 'domesca-homes' ),
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_pg_why_num', 'name' => 'number', 'label' => 'Number', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_why_t', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_why_x', 'name' => 'text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 3 ),
			),
		),
		array( 'key' => 'field_dsc_pg_why_b1', 'name' => 'btn1', 'label' => 'Primary button', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_why_u1', 'name' => 'btn1_url', 'label' => 'Primary button URL', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_why_b2', 'name' => 'btn2', 'label' => 'Secondary button', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_why_u2', 'name' => 'btn2_url', 'label' => 'Secondary button URL', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_why_note', 'name' => 'note', 'label' => 'Note', 'type' => 'text' ),
	) );
}

/**
 * Projects / portfolio fields with filter chips.
 */
function dsc_page_projects_fields() {
	return array_merge( dsc_section_common_fields( 'pg_projects' ), array(
		array( 'key' => 'field_dsc_pg_proj_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_proj_title', 'name' => 'title', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_pg_proj_lead', 'name' => 'lead', 'label' => 'Intro', 'type' => 'textarea', 'rows' => 2 ),
		array(
			'key'          => 'field_dsc_pg_proj_filters',
			'name'         => 'filters',
			'label'        => __( 'Filter chips', 'domesca-homes' ),
			'type'         => 'repeater',
			'button_label' => __( 'Add filter', 'domesca-homes' ),
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_pg_proj_fk', 'name' => 'key', 'label' => 'Key', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_proj_fl', 'name' => 'label', 'label' => 'Label', 'type' => 'text' ),
			),
		),
		array(
			'key'          => 'field_dsc_pg_proj_items',
			'name'         => 'items',
			'label'        => __( 'Project tiles', 'domesca-homes' ),
			'type'         => 'repeater',
			'button_label' => __( 'Add tile', 'domesca-homes' ),
			'sub_fields'   => array(
				array( 'key' => 'field_dsc_pg_proj_image', 'name' => 'image', 'label' => 'Image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
				array( 'key' => 'field_dsc_pg_proj_alt', 'name' => 'alt', 'label' => 'Alt', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_proj_cat', 'name' => 'category', 'label' => 'Category', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_proj_fil', 'name' => 'filters', 'label' => 'Filter keys (space separated)', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_proj_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
				array( 'key' => 'field_dsc_pg_proj_cls', 'name' => 'class', 'label' => 'Width', 'type' => 'select', 'choices' => array( '' => 'Default', 'is-wide' => 'Wide', 'is-half' => 'Half' ), 'default_value' => '' ),
			),
		),
	) );
}

/**
 * Contact split fields.
 */
function dsc_page_contact_fields() {
	return array_merge( dsc_section_common_fields( 'pg_contact' ), array(
		array( 'key' => 'field_dsc_pg_con_eyebrow', 'name' => 'eyebrow', 'label' => 'Eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_con_heading', 'name' => 'heading', 'label' => 'Heading', 'type' => 'textarea', 'rows' => 3, 'new_lines' => '' ),
		array( 'key' => 'field_dsc_pg_con_prose', 'name' => 'prose', 'label' => 'Description (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 0 ),
		array( 'key' => 'field_dsc_pg_con_fe', 'name' => 'form_eyebrow', 'label' => 'Form eyebrow', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_con_ft', 'name' => 'form_title', 'label' => 'Form title', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_con_fx', 'name' => 'form_text', 'label' => 'Form text', 'type' => 'textarea', 'rows' => 3 ),
	) );
}

/**
 * Full-width map fields.
 */
function dsc_page_contact_map_fields() {
	return array_merge( dsc_section_common_fields( 'pg_map' ), array(
		array( 'key' => 'field_dsc_pg_map_url', 'name' => 'map', 'label' => 'Map embed URL', 'type' => 'url' ),
	) );
}

/**
 * Prose / document fields.
 */
function dsc_page_prose_fields() {
	return array_merge( dsc_section_common_fields( 'pg_prose' ), array(
		array( 'key' => 'field_dsc_pg_prose_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_prose_meta', 'name' => 'meta', 'label' => 'Meta line', 'type' => 'text' ),
		array( 'key' => 'field_dsc_pg_prose_body', 'name' => 'prose', 'label' => 'Content (WYSIWYG)', 'type' => 'wysiwyg', 'toolbar' => 'full', 'media_upload' => 1 ),
	) );
}
