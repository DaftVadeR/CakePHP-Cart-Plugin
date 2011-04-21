<?php
/* Titles Test cases generated on: 2011-04-14 13:17:25 : 1302787045*/
App::import('Controller', 'Titles');

class TestTitlesController extends TitlesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TitlesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.title', 'app.billing_address', 'app.country', 'app.user', 'plugin.cart.cart', 'plugin.cart.cart_item', 'app.product', 'app.cart_cart_item', 'app.cart_billing_address', 'app.cart_title');

	function startTest() {
		$this->Titles =& new TestTitlesController();
		$this->Titles->constructClasses();
	}

	function endTest() {
		unset($this->Titles);
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