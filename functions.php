/*BillingAddressMessage*/

add_action( 'woocommerce_before_checkout_form', 'wnd_checkout_message', 10 );

function wnd_checkout_message( ) {
 echo '<div class="wnd-checkout-message"><h3>Your Message Here</h3>
</div>';
}
