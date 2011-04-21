<?php
/* Users Test cases generated on: 2011-04-09 16:36:00 : 1302366960*/
App::import('Controller', 'Users');
App::import('Model', 'User');

class TestUsersController extends UsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'plugin.cart.cart', 'plugin.cart.cart_item', 'app.product', 'app.cart_cart_item', 'plugin.cart.title', 'plugin.cart.country', 'plugin.cart.billing_address');
    
    function assert404() {
		$this->assertError(true, 'error404');
	}
    
    function assertRedirect($url = '') {
		if (!empty($url)) {
			$this->assertError(new PatternExpectation('/^redirect:' .
				str_replace('/', '\/', Router::url($url, true)) . '$/i'
			));
		} else {
			$this->assertError(new PatternExpectation('/redirect:/i'));
		}
	}
    
	function startTest() {
		$this->Users =& new TestUsersController();
		$this->Users->constructClasses();
	}

	function endTest() {
		unset($this->Users);
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
        echo 'Test Delete: ';
        
        $this->Users->Session->destroy();
        $this->Users->Session->write('Auth.User', array(
            'id' => 1,
            'email' => 'garth@brooks.com',
            'first_name'=>'Garth',
            'last_name'=>'Brooks'
        ));
        
        $this->assertEqual(1, ClassRegistry::init('User')->find('count', array('conditions'=>array('User.id'=>1))));
        $this->testAction('users/delete');
        $this->assertRedirect();
        $this->assertEqual(0, ClassRegistry::init('User')->find('count', array('conditions'=>array('User.id'=>1))));
        
        echo ' Done.<br/><br/>';
	}

}
?>