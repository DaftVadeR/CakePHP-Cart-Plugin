<?php
/* CartItems Test cases generated on: 2011-04-09 09:55:19 : 1302342919*/
App::import('Controller', 'CartItems');

class TestCartItemsController extends CartItemsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CartItemsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.cart_item', 'app.cart', 'app.user', 'app.product');

	function startTest() {
		$this->CartItems =& new TestCartItemsController();
		$this->CartItems->constructClasses();
	}

	function endTest() {
		unset($this->CartItems);
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