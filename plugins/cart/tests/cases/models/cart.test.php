<?php

App::import('Model', 'Cart.Cart');

class CartTestCase extends CakeTestCase {
    
	var $Cart = null;
    
	var $fixtures = array(
		'plugin.cart.cart', 'plugin.cart.cart_item', 'app.user', 'app.product', 'plugin.cart.title', 'plugin.cart.country', 'plugin.cart.order', 'plugin.cart.billing_address'
	);
    
	function start() {
		parent::start();
		$this->Cart =& ClassRegistry::init('Cart');
	}
    
	function testCartInstance() {
		$this->assertTrue(is_a($this->Cart, 'Cart'));
	}
    
    function testGetCart()
    {
        $result = $this->Cart->getCart(1, 'vvfd10es4beatu89dpl4gr74c0');
        $this->assertEqual($result, $this->Cart->find('first', array('contain'=>array('CartItem'=>array('Item')), 'conditions'=>array('Cart.user_id'=>1))));
        
        $result = $this->Cart->getCart(0, 'vvfd10es4beatu89dpl4gr74c0');
        $this->assertEqual($result, $this->Cart->find('first', array('contain'=>array('CartItem'=>array('Item')), 'conditions'=>array('Cart.session_id'=>'vvfd10es4beatu89dpl4gr74c0'))));
        
        $result = $this->Cart->getCart(null, 'vvfd10es4beatu89dpl4gr74c0');
        $this->assertEqual($result, $this->Cart->find('first', array('contain'=>array('CartItem'=>array('Item')), 'conditions'=>array('Cart.session_id'=>'vvfd10es4beatu89dpl4gr74c0'))));
        
        $result = $this->Cart->getCart(1, 'vvfd10es4beatu89dpl4gr74c0', false);
        $this->assertEqual($result, $this->Cart->find('first', array('recursive'=>-1, 'contain'=>false, 'conditions'=>array('Cart.user_id'=>1))));
        
        $result = $this->Cart->getCart(null, 'vvfd10es4beatu89dpl4gr74c0', false);
        $this->assertEqual($result, $this->Cart->find('first', array('recursive'=>-1, 'contain'=>false, 'conditions'=>array('Cart.session_id'=>'vvfd10es4beatu89dpl4gr74c0'))));
    }
}
?>
