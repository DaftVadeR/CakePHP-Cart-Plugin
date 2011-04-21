<?php
/* User Fixture generated on: 2011-04-20 10:06:05 : 1303293965 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';
	//var $import = array('model' => 'User', 'records' => true);    

    var $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 5),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tel' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 125, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_ip_address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    
    var $records = array(
        array(
            'id'=>1,
            'email'=>'garth@brooks.com',
            'tel'=>'012 123 1234',
            'first_name'=>'Garth',
            'last_name'=>'Brooks',
            'last_ip_address'=>'192.156.242.42',
            'password'=>'1ecb2051dd8e25a10ee10d2e1c4a9e664ae5fc8a',
            'created'=>'2010-09-25 23:32:34',
            'created'=>'2010-09-25 23:32:34',
        ),
    );
}
?>