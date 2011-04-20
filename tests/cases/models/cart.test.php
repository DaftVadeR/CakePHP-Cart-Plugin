<?php
/* Cart Test cases generated on: 2011-04-09 09:55:08 : 1302342908*/
App::import('Model', 'Cart');

class CartTestCase extends CakeTestCase {
	var $fixtures = array('app.cart', 'app.user', 'app.cart_item');

	function startTest() {
		$this->Cart =& ClassRegistry::init('Cart');
	}

	function endTest() {
		unset($this->Cart);
		ClassRegistry::flush();
	}

}
?>