// Hide header links
function header_menu_if_is_grater_equal()
{
	if ( is_user_logged_in() )
	{
		echo '<style type="text/css">header nav ul li#menu-item-4471 {display: none;}</style>';
	}

	if ( is_user_logged_in() )
	{

	    $number_of_orders = 1;

	    $customer_orders = get_posts( apply_filters( 'woocommerce_my_account_my_orders_query', array(
	        'numberposts' => $number_of_orders,
	        'meta_key'    => '_customer_user',
	        'meta_value'  => get_current_user_id(),
	        'post_type'   => wc_get_order_types( 'view-orders' ),
	        'post_status' => array_keys( wc_get_order_statuses() )
	    ) ) );

	    if ( $customer_orders && count( $customer_orders > $number_of_orders ) )
	    {
	        echo '<style type="text/css">header nav ul li#menu-item-4728 {display: inline-block;}</style>';
	    } else {
	    	echo '<style type="text/css">header nav ul li#menu-item-4728 {display: none;}</style>';
	    }
	}

	if ( !is_user_logged_in() )
	{
		echo '<style type="text/css">header nav ul li#menu-item-4728 {display: none;}</style>';
	}
}
