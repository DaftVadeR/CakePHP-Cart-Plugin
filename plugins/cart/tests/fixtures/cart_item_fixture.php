<?php
/* CartItem Fixture generated on: 2011-04-09 09:55:19 : 1302342919 */
class CartItemFixture extends CakeTestFixture {
	var $name = 'CartItem';
    var $table = 'cart_cart_items';    
    
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
			'item_id' => 1
		),
        array(
			'id' => 2,
			'cart_id' => 1,
			'item_id' => 2
		),
        array(
			'id' => 3,
			'cart_id' => 1,
			'item_id' => 3
		),
        array(
			'id' => 4,
			'cart_id' => 1,
			'item_id' => 4
		),
         array(
			'id' => 5,
			'cart_id' => 2,
			'item_id' => 5
		),
        array(
			'id' => 6,
			'cart_id' => 2,
			'item_id' => 6
		),
        
	);
}
?>