<?php
/**
 * Customer Reset Password email
 *
 * @author  WooThemes
 * @package WooCommerce/Templates/Emails/Plain
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

echo "= " . $email_heading . " =\n\n";

echo __( 'Hi there,', 'woocommerce' ) . "\r\n\r\n";

echo __( 'We have received a request to reset the password for the following Darling Olives account:', 'woocommerce' ) . "\r\n\r\n";
echo esc_url( network_home_url( '/' ) ) . "\r\n\r\n";
echo sprintf( __( 'Username: %s', 'woocommerce' ), $user_login ) . "\r\n\r\n";
echo __( 'If this was a mistake, simply ignore this email and nothing will happen. Otherwise, click on the link below to reset your password.', 'woocommerce' ) . "\r\n\r\n";

echo esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => $user_login ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ) . "\r\n";

echo __("Kind regards,", 'woocommerce') . "\n\n";
echo __("Darling Olives,", 'woocommerce') . "\n\n";

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );
