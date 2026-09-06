<?php
/**
 * Per-page-type inner page field groups.
 *
 * Each page type has a dedicated template file (template-about.php,
 * template-services.php, ...) and its own ACF field group with a `page_sections`
 * flexible content field. Editing one page never changes another, and the
 * shared sections (credentials, reviews, portfolio) are managed globally under
 * Domesca Options → Shared Sections.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Common `show` / `order` fields plus a notice that content is shared.
 *
 * Used for the shared credentials / Google reviews / portfolio layouts so the
 * editor can still place and order these sections on a page, but the content
 * itself is edited in one place (Domesca Options).
 */
function dsc_shared_section_fields( $prefix = 'shared' ) {
	return array_merge(
		dsc_section_common_fields( $prefix ),
		array(
			array(
				'key'      => 'field_' . $prefix . '_note',
				'name'     => 'shared_note',
				'label'    => '',
				'type'     => 'message',
				'message'  => __( 'This is a shared section. Its content is managed once in Domesca Options → Shared Sections, so every page that uses it updates together.', 'domesca-homes' ),
			),
		)
	);
}

/**
 * Layouts available in the inner page `page_sections` field.
 *
 * Shared layouts (creds / projects / testimonials) only expose show + order
 * here because their content lives in the global shared sections.
 */
function dsc_inner_layouts() {
	return array(
		'banner'       => array( 'label' => 'Page banner', 'name' => 'banner', 'sub_fields' => dsc_page_banner_fields() ),
		'creds'        => array( 'label' => 'Credentials strip (shared)', 'name' => 'creds', 'sub_fields' => dsc_shared_section_fields( 'pg_sh_creds' ) ),
		'splits'       => array( 'label' => 'Splits', 'name' => 'splits', 'sub_fields' => dsc_page_splits_fields() ),
		'contact'      => array( 'label' => 'Contact split + form', 'name' => 'contact', 'sub_fields' => dsc_page_contact_fields() ),
		'services'     => array( 'label' => 'Services grid', 'name' => 'services', 'sub_fields' => dsc_home_services_fields() ),
		'plans'        => array( 'label' => 'Your plans, or ours', 'name' => 'plans', 'sub_fields' => dsc_page_plans_fields() ),
		'why'          => array( 'label' => 'Why / dark grid', 'name' => 'why', 'sub_fields' => dsc_page_why_fields() ),
		'process'      => array( 'label' => 'Process', 'name' => 'process', 'sub_fields' => dsc_landing_process_fields() ),
		'projects'     => array( 'label' => 'Portfolio / projects (shared)', 'name' => 'projects', 'sub_fields' => dsc_shared_section_fields( 'pg_sh_proj' ) ),
		'developers'   => array( 'label' => 'Developers / investors', 'name' => 'developers', 'sub_fields' => dsc_home_developers_fields() ),
		'testimonials' => array( 'label' => 'Google reviews (shared)', 'name' => 'testimonials', 'sub_fields' => dsc_shared_section_fields( 'pg_sh_tm' ) ),
		'areas'        => array( 'label' => 'Areas we build', 'name' => 'areas', 'sub_fields' => dsc_landing_areas_fields() ),
		'faq'          => array( 'label' => 'FAQ tabs', 'name' => 'faq', 'sub_fields' => dsc_home_faq_fields() ),
		'cta'          => array( 'label' => 'Final CTA / contact', 'name' => 'cta', 'sub_fields' => dsc_landing_cta_fields() ),
		'contact_map'  => array( 'label' => 'Full-width map', 'name' => 'contact_map', 'sub_fields' => dsc_page_contact_map_fields() ),
		'prose'        => array( 'label' => 'Document / prose', 'name' => 'prose', 'sub_fields' => dsc_page_prose_fields() ),
	);
}

/**
 * Recursively make every field key unique by appending a suffix.
 *
 * ACF field keys must be unique across all field groups. The mutable layouts
 * are reused for each page type, so every group gets its own suffix.
 *
 * @param array  $fields Field definition array.
 * @param string $suffix Suffix to append (e.g. `_about`).
 * @return array
 */
function dsc_suffix_field_keys( $fields, $suffix ) {
	if ( ! is_array( $fields ) ) {
		return $fields;
	}

	$out = array();
	foreach ( $fields as $key => $value ) {
		if ( is_array( $value ) ) {
			if ( isset( $value['key'] ) ) {
				$value['key'] .= $suffix;
			}
			// Nested repeater/prose sub-fields are handled through `sub_fields`.
			if ( isset( $value['sub_fields'] ) ) {
				$value['sub_fields'] = dsc_suffix_field_keys( $value['sub_fields'], $suffix );
			}
		}
		$out[ $key ] = $value;
	}

	return $out;
}

/**
 * The inner page type slugs that have a dedicated template file.
 */
function dsc_inner_page_type_slugs() {
	return array(
		'about',
		'services',
		'our-plans',
		'new-builds',
		'townhouse-developments',
		'multi-unit-projects',
		'extensions',
		'renovations',
		'portfolio',
		'location-hillside',
		'contact',
		'privacy-policy',
		'plain',
	);
}

/**
 * Register one ACF field group for each dedicated inner page template.
 */
function dsc_register_inner_type_field_groups() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$labels = array(
		'about'                  => __( 'Domesca About Page Sections', 'domesca-homes' ),
		'services'               => __( 'Domesca Services Page Sections', 'domesca-homes' ),
		'our-plans'              => __( 'Domesca Our Plans Page Sections', 'domesca-homes' ),
		'new-builds'             => __( 'Domesca New Builds Page Sections', 'domesca-homes' ),
		'townhouse-developments' => __( 'Domesca Townhouse Developments Page Sections', 'domesca-homes' ),
		'multi-unit-projects'    => __( 'Domesca Multi-Unit Projects Page Sections', 'domesca-homes' ),
		'extensions'             => __( 'Domesca Extensions Page Sections', 'domesca-homes' ),
		'renovations'            => __( 'Domesca Renovations Page Sections', 'domesca-homes' ),
		'portfolio'              => __( 'Domesca Portfolio Page Sections', 'domesca-homes' ),
		'location-hillside'      => __( 'Domesca Location / Hillside Page Sections', 'domesca-homes' ),
		'contact'                => __( 'Domesca Contact Page Sections', 'domesca-homes' ),
		'privacy-policy'         => __( 'Domesca Privacy Policy Page Sections', 'domesca-homes' ),
		'plain'                  => __( 'Domesca Plain Page Sections', 'domesca-homes' ),
	);

	$layouts = dsc_inner_layouts();

	foreach ( dsc_inner_page_type_slugs() as $type ) {
		$suffix = '_' . $type;
		$fields = dsc_suffix_field_keys( $layouts, $suffix );

		// Flexible content field for this page type only.
		$flex = array(
			'key'           => 'field_dsc_inner_' . $type . '_sections',
			'name'          => 'page_sections',
			'label'         => __( 'Page sections', 'domesca-homes' ),
			'type'          => 'flexible_content',
			'button_label'  => __( 'Add section', 'domesca-homes' ),
			'layouts'       => $fields,
			'instructions'  => __( 'Leave empty to use the converted HTML defaults for this page. Add sections to build a custom layout for this page only.', 'domesca-homes' ),
		);

		acf_add_local_field_group( array(
			'key'      => 'group_dsc_inner_' . $type,
			'title'    => isset( $labels[ $type ] ) ? $labels[ $type ] : $type,
			'fields'   => array( $flex ),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-templates/template-' . $type . '.php',
					),
				),
			),
			'menu_order'   => 3,
			'show_in_rest' => true,
		) );
	}
}
add_action( 'acf/init', 'dsc_register_inner_type_field_groups' );
