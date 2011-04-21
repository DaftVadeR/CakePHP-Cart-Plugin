<?php
/* Cart Fixture generated on: 2011-04-09 09:55:08 : 1302342908 */
class CartFixture extends CakeTestFixture {
	var $name = 'Cart';
    var $table = 'cart_carts';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'session_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 80, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
            'session_id'=>null,
			'created' => '2011-04-09 09:55:08',
			'modified' => '2011-04-09 09:55:08'
		),
        array(
			'id' => 2,
            'user_id' => null,
            'session_id'=>'vvfd10es4beatu89dpl4gr74c0',			
			'created' => '2011-04-08 11:12:57',
			'modified' => '2011-04-08 11:12:57'
		),
	);
}
?>