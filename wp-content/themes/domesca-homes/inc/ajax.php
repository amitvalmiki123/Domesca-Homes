<?php
/**
 * AJAX enquiry submission.
 *
 * The theme ships a lightweight handler so the forms have a working HTTP path
 * out of the box. If you use Gravity Forms / WPForms / Fluent Forms instead,
 * simply use their shortcode and ignore this handler.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enquire handler for logged-in and logged-out requests.
 */
function dsc_handle_enquiry() {
	check_ajax_referer( 'dsc_enquiry', 'nonce' );

	// Basic honeypot.
	if ( ! empty( $_POST['website'] ) ) {
		wp_send_json_error( array( 'message' => __( 'Submission blocked.', 'domesca-homes' ) ) );
	}

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$type    = isset( $_POST['project_type'] ) ? sanitize_text_field( wp_unslash( $_POST['project_type'] ) ) : '';
	$suburb  = isset( $_POST['suburb'] ) ? sanitize_text_field( wp_unslash( $_POST['suburb'] ) ) : '';
	$stage   = isset( $_POST['stage'] ) ? sanitize_text_field( wp_unslash( $_POST['stage'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( ! $name || ! $phone || ! $email ) {
		wp_send_json_error( array(
			'message' => __( 'Please complete your name, phone and email so we can get back to you.', 'domesca-homes' ),
		) );
	}

	$to      = dsc_opt( 'enquiry_notify_email', dsc_email( 'Info@Domescahomes.com.au' ) );
	$subject = sprintf( 'New Domesca enquiry — %s', $name );
	$body    = '';
	$body   .= "Name: {$name}\n";
	$body   .= "Phone: {$phone}\n";
	$body   .= "Email: {$email}\n";
	$body   .= "Project type: {$type}\n";
	$body   .= "Suburb: {$suburb}\n";
	$body   .= "Stage: {$stage}\n";
	$body   .= "Message: {$message}\n";
	$body   .= "\n" . home_url( '/' ) . "\n";

	$headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array(
			'message' => __( 'Thank you — your enquiry has been sent. We will be in touch shortly.', 'domesca-homes' ),
		) );
	}

	wp_send_json_error( array(
		'message' => __( 'We could not send your message. Please try again or call the team directly.', 'domesca-homes' ),
	) );
}
add_action( 'wp_ajax_dsc_enquiry', 'dsc_handle_enquiry' );
add_action( 'wp_ajax_nopriv_dsc_enquiry', 'dsc_handle_enquiry' );
