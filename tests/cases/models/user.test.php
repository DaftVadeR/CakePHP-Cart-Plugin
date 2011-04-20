<?php
/* User Test cases generated on: 2011-04-09 09:55:33 : 1302342933*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.cart', 'app.cart_item', 'app.product');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>