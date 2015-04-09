<?php
/**
 * Customer new account email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails/Plain
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

echo "= " . $email_heading . " =\n\n";

echo __( "Hi there,", 'woocommerce' ) . "\n\n";

echo sprintf( __( "Thank you for creating an account with %s. Below please find your account details:", 'woocommerce' ), $blogname ) . "\n\n";

echo sprintf( __( "Your username is <strong>%s</strong>.", 'woocommerce' ), $user_login ) . "\n\n";

if ( get_option( 'woocommerce_registration_generate_password' ) === 'yes' && $password_generated ) {
	echo sprintf( __( "Your password is <strong>%s</strong>.", 'woocommerce' ), $user_pass ) . "\n\n";
}

echo sprintf( __( 'To manage your account, simply click the following link: %s. Here you can view orders, change your password or other personal details, etc.', 'woocommerce' ), wc_get_page_permalink( 'myaccount' ) ) . "\n\n";

echo __( "We look forward to providing you with quality olive products – straight from our farm. So why not head over to our website now and place your first order?", 'woocommerce' ) . "\n\n";

echo __("Kind regards,", 'woocommerce') . "\n\n";
echo __("Darling Olives,", 'woocommerce') . "\n\n";

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );
