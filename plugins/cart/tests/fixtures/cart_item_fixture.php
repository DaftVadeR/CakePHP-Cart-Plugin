<?php
/* CartItem Fixture generated on: 2011-04-09 09:55:19 : 1302342919 */
class CartItemFixture extends CakeTestFixture {
	var $name = 'CartItem';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'cart_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'cart_id' => 1,
			'product_id' => 1
		),
        array(
			'id' => 2,
			'cart_id' => 1,
			'product_id' => 2
		),
        array(
			'id' => 3,
			'cart_id' => 1,
			'product_id' => 3
		),
        array(
			'id' => 4,
			'cart_id' => 1,
			'product_id' => 4
		),
         array(
			'id' => 5,
			'cart_id' => 2,
			'product_id' => 5
		),
        array(
			'id' => 6,
			'cart_id' => 2,
			'product_id' => 6
		),
        
	);
}
?>