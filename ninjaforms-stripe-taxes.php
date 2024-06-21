<?php

/**
 * Plugin Name:     Ninja Forms - Stripe Taxes
 * Plugin URI:      https://adamwills.dev
 * Description:     Adds support for taxes in Ninja Forms Stripe add-on.
 * Author:          Adam Wills
 * Author URI:      https://adamwills.dev
 * Text Domain:     ninjaforms-stripe-taxes
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Ninjaforms_Stripe_Taxes
 */

// Your code starts here.

add_filter('ninja_forms_stripe_checkout_session_create_params', function ($params) {
	$params['automatic_tax'] = ['enabled' => true];
	unset($params['payment_intent_data']['shipping']);
	return $params;
});
