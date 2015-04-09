<?php
/**
 * Customer invoice email (plain text)
 *
 * @author		WooThemes
 * @package		WooCommerce/Templates/Emails/Plain
 * @version		2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

echo "= " . $email_heading . " =\n\n";

echo __("Hi there,", 'woocommerce' ) . "\n";

if ( $order->has_status( 'pending' ) ) {
	//echo sprintf( __( 'An order has been created for you on %s. To pay for this order please use the following link: %s', 'woocommerce' ), get_bloginfo( 'name', 'display' ), $order->get_checkout_payment_url() ) . "\n\n";
	echo __( "Below please find the invoice for your order from Darling Olives:,", 'woocommerce' );
}

echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

do_action( 'woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text );

echo strtoupper( sprintf( __( 'Order number: %s', 'woocommerce' ), $order->get_order_number() ) ) . "\n";
echo date_i18n( __( 'jS F Y', 'woocommerce' ), strtotime( $order->order_date ) ) . "\n";

do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text );

echo "\n";

switch ( $order->get_status() ) {
	case "completed" :
		echo $order->email_order_items_table( $order->is_download_permitted(), false, true, '', '', true );
	break;
	case "processing" :
		echo $order->email_order_items_table( $order->is_download_permitted(), true, true, '', '', true );
	break;
	default :
		echo $order->email_order_items_table( $order->is_download_permitted(), true, false, '', '', true );
	break;
}

echo "==========\n\n";

if ( $totals = $order->get_order_item_totals() ) {
	foreach ( $totals as $total ) {
		echo $total['label'] . "\t " . $total['value'] . "\n";
	}
}

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

do_action( 'woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text );

if ( $order->has_status( 'pending' ) ) {
	echo __( "Paying for your order", 'woocommerce' ) . "\n";
	echo __( "Payments can be made through EFT or direct deposit into the following bank account:", 'woocommerce' ) . "\n\n";

	echo __( "Account Name:", 'woocommerce' ) . "\n";
	echo __( "Account Number:", 'woocommerce' ) . "\n";
	echo __( "Bank:", 'woocommerce' ) . "\n";
	echo __( "Branch:", 'woocommerce' ) . "\n";
	echo __( "Branch Code:", 'woocommerce' ) . "\n";
	echo __( "Reference: Please use your Order Number and Name as reference.", 'woocommerce' ) . "\n\n";

	echo __( "Once payment has been received, we will dispatch your package as soon as possible.", 'woocommerce' ) . "\n\n";
}

echo __("Kind regards,", 'woocommerce') . "\n\n";
echo __("Darling Olives,", 'woocommerce') . "\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );
