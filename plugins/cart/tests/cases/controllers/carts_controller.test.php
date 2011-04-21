<?php
/* Carts Test cases generated on: 2011-04-09 09:55:09 : 1302342909*/
App::import('Controller', 'Cart.Carts');
App::import('Model', array('Cart.Cart', 'User'));

class TestCartsController extends CartsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {        
		$this->redirectUrl = $url;        
	}
}

class CartsControllerTestCase extends CakeTestCase {
	var $fixtures = array('plugin.cart.cart', 'app.user', 'plugin.cart.cart_item', 'app.product', 'plugin.cart.title', 'plugin.cart.country', 'plugin.cart.country', 'plugin.cart.billing_address');
    
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
		$this->Carts =& new TestCartsController();
		$this->Carts->constructClasses();
	}

	function endTest() {
		unset($this->Carts);
		ClassRegistry::flush();
	}

	/*function testIndex() {
        
	}*/

	function testView() {
        echo 'Test View: ';
        
        $this->Carts->Session->destroy();
        $this->Carts->Session->id('vvfd10es4beatu89dpl4gr74c0');
        
        $result = $this->testAction('carts/view');       
        $this->assertEqual($result, ClassRegistry::init('Cart')->find('first', array('contain'=>array('CartItem'=>array('Item')), 'conditions'=>array('Cart.session_id'=>'vvfd10es4beatu89dpl4gr74c0'))));
        
        $this->Carts->Session->destroy();
        $this->Carts->Session->write('Auth.User', array(
            'id' => 1,
            'email' => 'garth@brooks.com',
            'first_name'=>'Garth',
            'last_name'=>'Brooks'
        ));
        
        $result = $this->testAction('carts/view');        
        $this->assertEqual($result, ClassRegistry::init('Cart')->find('first', array('contain'=>array('CartItem'=>array('Item')), 'conditions'=>array('Cart.user_id'=>$this->Carts->Session->read('Auth.User.id')))));
        
        echo ' Done<br/><br/>';
	}

	/*function testAdd() {

	}

	function testEdit() {

	}*/

	function testDelete() {
        echo 'Test Delete: ';
        
        /* Test with deleting of cart whilst not logged in */
        
        $this->Carts->Session->destroy();
        $this->Carts->Session->id('vvfd10es4beatu89dpl4gr74c0');
        
        $cart = ClassRegistry::init('Cart')->getCart(null, 'vvfd10es4beatu89dpl4gr74c0', false);
        $this->assertTrue(!empty($cart));
        
        $result = $this->testAction('carts/delete');
        $this->assertRedirect();        
        
        $cart = ClassRegistry::init('Cart')->getCart(null, 'vvfd10es4beatu89dpl4gr74c0', false);
        $this->assertTrue(empty($cart));
        
        /* Test with deleting of cart whilst logged in */
        
        $this->Carts->Session->destroy();
        $this->Carts->Session->write('Auth.User', array(
            'id' => 1,
            'email' => 'garth@brooks.com',
            'first_name'=>'Garth',
            'last_name'=>'Brooks'
        ));
        
        $cart = ClassRegistry::init('Cart')->getCart($this->Carts->Session->read('Auth.User.id'), 'vvfd10es4beatu89dpl4gr74c0', false);
        $this->assertTrue(!empty($cart));
        
        $result = $this->testAction('carts/delete');
        $this->assertRedirect();
        
        $cart = ClassRegistry::init('Cart')->getCart($this->Carts->Session->read('Auth.User.id'), 'vvfd10es4beatu89dpl4gr74c0', false);
        $this->assertTrue(empty($cart));
        
        echo ' Done<br/><br/>';
	}
}
?>