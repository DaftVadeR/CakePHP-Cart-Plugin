<?php
/* CartItems Test cases generated on: 2011-04-09 09:55:19 : 1302342919*/
App::import('Controller', 'Cart.CartItems');
App::import('Model', 'Cart.CartItem');

class TestCartItemsController extends CartItemsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CartItemsControllerTestCase extends CakeTestCase {
	var $fixtures = array('plugin.cart.cart', 'plugin.cart.cart_item', 'app.user', 'app.product', 'plugin.cart.title', 'plugin.cart.billing_address', 'plugin.cart.country');
    
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
		$this->CartItems =& new TestCartItemsController();
		$this->CartItems->constructClasses();        
	}

	function endTest() {
		unset($this->CartItems);
		ClassRegistry::flush();
	}

	/*function testIndex() {

	}

	function testView() {

	}
	
	function testEdit() {

	}
	*/

	function testAdd() {
        echo 'Testing Add: ';
        $this->CartItems->Session->destroy();
        $this->CartItems->Session->write('Auth.User', array(
            'id' => 1,
            'email' => 'garth@brooks.com',
            'first_name'=>'Garth',
            'last_name'=>'Brooks'
        ));
        
        $cart = ClassRegistry::init('Cart.Cart')->getCart(1, null, false);
        $count = ClassRegistry::init('Cart.CartItem')->find('count', array('conditions'=>array('item_id'=>1, 'cart_id'=>$cart['Cart']['id'])));
        $this->assertEqual(1, $count);
        
        $this->testAction('cart_items/add/1');
        $this->assertRedirect();
        $this->assertEqual($this->CartItems->Session->read('Message.flash.element'), 'error');
        $this->assertEqual($this->CartItems->Session->read('Message.flash.message'), 'That product already exists in your cart.');
        
        $count = ClassRegistry::init('Cart.CartItem')->find('count', array('conditions'=>array('item_id'=>1, 'cart_id'=>$cart['Cart']['id'])));
        $this->assertEqual(1, $count);
        
        $this->CartItems->Session->destroy();
        $this->CartItems->Session->id('vvfd10es4beatu89dpl4gr74c0');
        
        $cart = ClassRegistry::init('Cart.Cart')->getCart(null, 'vvfd10es4beatu89dpl4gr74c0', false);
        $count = ClassRegistry::init('Cart.CartItem')->find('count', array('conditions'=>array('item_id'=>1, 'cart_id'=>$cart['Cart']['id'])));
        $this->assertEqual(0, $count);
        
        $this->testAction('cart_items/add/1');       
        
        $this->assertRedirect();
        
        $this->assertEqual($this->CartItems->Session->read('Message.flash.element'), 'success');
        $this->assertEqual($this->CartItems->Session->read('Message.flash.message'), 'Item added to cart successfully.');
        
        $count = ClassRegistry::init('Cart.CartItem')->find('count', array('conditions'=>array('item_id'=>1, 'cart_id'=>$cart['Cart']['id'])));
        $this->assertEqual(1, $count);
        echo ' Done.<br/><br/>';
	}

	function testDelete() {
        echo 'Testing Delete: ';
        
        $this->CartItems->Session->destroy();
        $this->CartItems->Session->write('Auth.User', array(
            'id' => 1,
            'email' => 'garth@brooks.com',
            'first_name'=>'Garth',
            'last_name'=>'Brooks'
        ));
        
        $this->testAction('cart_items/delete/1');
        $this->assertRedirect();       
        
        $this->assertEqual($this->CartItems->Session->read('Message.flash.element'), 'success');
        $this->assertEqual($this->CartItems->Session->read('Message.flash.message'), 'Item removed from cart.');
        
        $this->CartItems->Session->destroy();
        $this->CartItems->Session->id('vvfd10es4beatu89dpl4gr74c0');
        
        $this->testAction('cart_items/delete/1');
        $this->assertRedirect();
        
        $this->assertEqual($this->CartItems->Session->read('Message.flash.element'), 'error');
        $this->assertEqual($this->CartItems->Session->read('Message.flash.message'), 'That product is not in your cart.');
        
        $this->CartItems->Session->destroy();
        $this->CartItems->Session->id('gdfgdfgfdgfdgf');        
        
        $this->testAction('cart_items/delete/1');
        $this->assertRedirect();
        
        $this->assertEqual($this->CartItems->Session->read('Message.flash.element'), 'error');
        $this->assertEqual($this->CartItems->Session->read('Message.flash.message'), 'You have nothing in your cart yet!');
        echo ' Done.<br/><br/>';
	}
}
?>