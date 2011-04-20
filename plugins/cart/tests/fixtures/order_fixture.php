<?php
/* Cart Fixture generated on: 2011-04-09 09:55:08 : 1302342908 */
class OrderFixture extends CakeTestFixture {
	var $name = 'Order';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'total' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'items' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'status' => array('type' => 'string', 'null' => true, 'default' => 'Awaiting payment', 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
            'total'=>'45244.52',
            'items'=>4,
            'status'=>'Awaiting Payment',
			'created' => '2011-04-09 09:55:08',
			'modified' => '2011-04-09 09:59:08'
		),
        array(
			'id' => 2,
			'user_id' => 1,
            'total'=>'1265.39',
            'items'=>1,
            'status'=>'In Process',
			'created' => '2011-03-11 13:48:13',
			'modified' => '2011-04-15 11:12:11'
		),
        array(
			'id'=>3,
			'user_id'=>2,
            'total'=>'654.99',
            'items'=>2,
            'status'=>'Completed',
			'created' => '2011-04-13 12:35:21',
			'modified' => '2011-04-14 14:59:08'
		),
	);
}
?>