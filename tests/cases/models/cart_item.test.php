<?php
/* CartItem Test cases generated on: 2011-04-09 09:55:19 : 1302342919*/
App::import('Model', 'CartItem');

class CartItemTestCase extends CakeTestCase {
	var $fixtures = array('app.cart_item', 'app.cart', 'app.user', 'app.product');

	function startTest() {
		$this->CartItem =& ClassRegistry::init('CartItem');
	}

	function endTest() {
		unset($this->CartItem);
		ClassRegistry::flush();
	}

}
?>