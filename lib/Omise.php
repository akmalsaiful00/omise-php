<?php
require_once dirname(__FILE__).'/omise/OmiseAccount.php';
require_once dirname(__FILE__).'/omise/OmiseBalance.php';
require_once dirname(__FILE__).'/omise/OmiseTokens.php';
require_once dirname(__FILE__).'/omise/OmiseCharges.php';


// $object = OmiseTokens::create(array(
// 		'card[name]' => 'Somchai Prasert',
// 		'card[number]' => '4242424242424242',
// 		'card[expiration_month]' => 10,
// 		'card[expiration_year]' => 2018,
// 		'card[city]' => 'Bangkok',
// 		'card[postal_code]' => '10320',
// 		'card[security_code]' => 123

// ));
// $object = OmiseTokens::create(array('card' => array(
// 		'name' => 'Somchai Prasert',
// 		'number' => '4242424242424242',
// 		'expiration_month' => 10,
// 		'expiration_year' => 2018,
// 		'city' => 'Bangkok',
// 		'postal_code' => '10320',
// 		'security_code' => 123
// )));
// $object = OmiseTokens::retrive('tokn_test_4yfpjbu99utp0m6xpp0');
// var_dump($object);

// $object = OmiseCharges::retrive();
// $object = OmiseCharges::create(array(
//   'return_uri' => 'https://example.co.th/orders/384/complete',
//   'amount' => 100000,
//   'currency' => 'thb',
//   'description' => 'Order-384',
//   'ip' => '127.0.0.1',
//   'card' => 'tokn_test_4yfpjbu99utp0m6xpp0'
// ));
// var_dump($object);