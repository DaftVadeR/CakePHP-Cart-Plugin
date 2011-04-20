<?php
/* Product Test cases generated on: 2011-04-09 09:55:27 : 1302342927*/
App::import('Model', 'Product');

class ProductTestCase extends CakeTestCase {
	var $fixtures = array('app.product', 'app.cart_item', 'app.cart', 'app.user');

	function startTest() {
		$this->Product =& ClassRegistry::init('Product');
	}

	function endTest() {
		unset($this->Product);
		ClassRegistry::flush();
	}

}
?>