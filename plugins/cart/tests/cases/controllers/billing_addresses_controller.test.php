<?php
/* BillingAddresses Test cases generated on: 2011-04-14 13:17:16 : 1302787036*/
App::import('Controller', 'BillingAddresses');

class TestBillingAddressesController extends BillingAddressesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BillingAddressesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.billing_address', 'app.title', 'app.country', 'app.user', 'plugin.cart.cart', 'plugin.cart.cart_item', 'app.product', 'app.cart_cart_item', 'app.cart_billing_address');

	function startTest() {
		$this->BillingAddresses =& new TestBillingAddressesController();
		$this->BillingAddresses->constructClasses();
	}

	function endTest() {
		unset($this->BillingAddresses);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>