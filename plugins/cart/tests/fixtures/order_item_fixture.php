<?php
/* Product Fixture generated on: 2011-04-09 09:55:27 : 1302342927 */
class OrderItemFixture extends CakeTestFixture {
	var $name = 'OrderItem';
    var $table = 'cart_order_items';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
        'order_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'price' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '8,2'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
            'order_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',            
            'price' => '40000.52',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2011-04-01 13:45:03',
			'modified' => '2011-04-02 15:55:41'
		),
        array(
			'id' => 2,
            'order_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',            
            'price' => '3000.00',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2011-04-04 09:55:27',
			'modified' => '2011-04-04 09:55:27'
		),
        array(
			'id' => 3,
            'order_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',            
            'price' => '1000.00',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2011-03-09 11:45:12',
			'modified' => '2011-03-10 10:46:35'
		),
        array(
			'id' => 4,
            'order_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',            
            'price' => '1244.00',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2011-04-16 18:50:29',
			'modified' => '2011-04-16 18:52:21'
		),
        array(
			'id' => 5,
            'order_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',            
            'price' => '1265.39',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2011-04-17 10:28:01',
			'modified' => '2011-04-17 10:28:01'
		),       
        array(
			'id' => 6,
            'order_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',            
            'price' => '200.99',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2011-04-19 21:48:52',
			'modified' => '2011-04-19 21:48:52'
		),
        array(
			'id' => 7,
            'order_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',            
            'price' => '454.00',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2011-04-19 22:15:01',
			'modified' => '2011-04-19 22:15:01'
		),
	);
}
?>