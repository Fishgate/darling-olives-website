<?php
/**
 * Customer Reset Password email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading ); ?>

<p><?php _e( 'Hi there,', 'woocommerce' ); ?></p>

<p><?php _e( 'We have received a request to reset the password for the following Darling Olives account:', 'woocommerce' ); ?></p>
<p><?php printf( __( 'Username: <strong>%s</strong>', 'woocommerce' ), $user_login ); ?></p>
<p>
	<?php _e( 'If this was a mistake, simply ignore this email and nothing will happen.', 'woocommerce' ); ?><br />
	<?php _e( 'Otherwise, click on the button below to reset your password.', 'woocommerce' ); ?>
</p>

<div>
<!--[if mso]>
  <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://www.EXAMPLE.com/" style="height:40px;v-text-anchor:middle;width:300px;" arcsize="10%" stroke="f" fillcolor="#d62828">
    <w:anchorlock/>
    <center style="color:#ffffff;font-family:sans-serif;font-size:16px;font-weight:bold;">
      Button Text Here!
    </center>
  </v:roundrect>
  <![endif]-->
  <![if !mso]>
  <table cellspacing="0" cellpadding="0"> 
  <tr> 
  <td align="center" width="300" height="40" bgcolor="#ad8b57" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; color: #ffffff; display: block;">
    <a href="<?php echo esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => rawurlencode( $user_login ) ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ); ?>" style="font-size:16px; font-weight: bold; font-family:sans-serif; text-decoration: none; line-height:40px; width:100%; display:inline-block">
    <span style="color: #ffffff;">
      RESET PASSWORD
    </span>
    </a>
  </td> 
  </tr> 
  </table> 
  <![endif]>
</div>

<p>
  <?php _e( "Kind regards,", 'woocommerce' ); ?><br />
  <?php _e( "Darling Olives", 'woocommerce' ); ?>
</p>

<?php do_action( 'woocommerce_email_footer' ); ?>
