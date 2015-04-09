<?php
/**
 * Customer new account email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading ); ?>

<p><?php _e( "Hi there,", 'woocommerce' ); ?></p>

<p><?php printf( __( "Thank you for creating an account with %s. Below please find your account details:", 'woocommerce' ), esc_html( $blogname ) ); ?></p>

<p>

	<?php printf( __( "Your username is <strong>%s</strong>.", 'woocommerce' ), esc_html( $user_login ) ); ?><br />

	<?php if ( get_option( 'woocommerce_registration_generate_password' ) == 'yes' && $password_generated ) : ?>

		<?php printf( __( "Your password is <strong>%s</strong>", 'woocommerce' ), esc_html( $user_pass ) ); ?>

	<?php endif; ?>

</p>

<?php $myaccount_url = wc_get_page_permalink( 'myaccount' ) ?>

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
    <a href="<?php echo $myaccount_url; ?>" style="font-size:16px; font-weight: bold; font-family:sans-serif; text-decoration: none; line-height:40px; width:100%; display:inline-block">
    <span style="color: #ffffff;">
      MANAGE ACCOUNT
    </span>
    </a>
  </td> 
  </tr> 
  </table> 
  <![endif]>
</div>

<p><?php _e( "To manage your account, simply click on the button above. Here you can view orders, change your password or other personal details, etc.", 'woocommerce' ); ?></p>

<p><?php _e( "We look forward to providing you with quality olive products – straight from our farm. So why not head over to our website now and place your first order?", 'woocommerce' ); ?></p>

<p>
	<?php _e( "Kind regards,", 'woocommerce' ); ?><br />
	<?php _e( "Darling Olives", 'woocommerce' ); ?>
</p>

<?php do_action( 'woocommerce_email_footer' ); ?>
