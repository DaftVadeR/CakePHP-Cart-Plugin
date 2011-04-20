<?php
/* Title Test cases generated on: 2011-04-14 13:17:24 : 1302787044*/
App::import('Model', 'Title');

class TitleTestCase extends CakeTestCase {
	var $fixtures = array('app.title', 'app.billing_address', 'app.country', 'app.user', 'plugin.cart.cart', 'plugin.cart.cart_item', 'app.product', 'app.cart_cart_item', 'app.cart_billing_address', 'app.cart_title');

	function startTest() {
		$this->Title =& ClassRegistry::init('Title');
	}

	function endTest() {
		unset($this->Title);
		ClassRegistry::flush();
	}

}
?>