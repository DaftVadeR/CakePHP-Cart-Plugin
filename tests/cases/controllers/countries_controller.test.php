<?php
/* Countries Test cases generated on: 2011-04-14 13:21:03 : 1302787263*/
App::import('Controller', 'Countries');

class TestCountriesController extends CountriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CountriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.country', 'app.billing_address', 'app.title', 'app.cart_billing_address', 'app.cart', 'app.cart_title', 'app.user', 'app.cart_country');

	function startTest() {
		$this->Countries =& new TestCountriesController();
		$this->Countries->constructClasses();
	}

	function endTest() {
		unset($this->Countries);
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