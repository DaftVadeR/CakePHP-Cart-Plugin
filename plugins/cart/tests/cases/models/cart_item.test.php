<?php

App::import('Model', 'Cart.CartItem');

class CartItemTestCase extends CakeTestCase {
    
	var $CartItem = null;
    var $table = 'cart_cart_items';
    
	var $fixtures = array(
		'plugin.cart.cart', 'plugin.cart.cart_item', 'app.user', 'app.product', 'plugin.cart.title', 'plugin.cart.country', 'plugin.cart.order', 'plugin.cart.billing_address'
	);
    
	function start() {
		parent::start();
		$this->CartItem =& ClassRegistry::init('CartItem');
	}
    
	function testCartItemInstance() {
		$this->assertTrue(is_a($this->CartItem, 'CartItem'));
	}
    
    function testItemInCart()
    {
        $this->assertEqual(false, $this->CartItem->itemInCart(1, 2));
        $this->assertEqual(true, $this->CartItem->itemInCart(1, 1));
    }
    
    function testItemExists()
    {        
        $this->assertEqual(true, $this->CartItem->itemExists(1));
        $this->assertEqual(false, $this->CartItem->itemExists(65));
    }
    
    function testAddItem()
    {   
        $this->assertEqual(7, $this->CartItem->addItem(7, 1));
        $this->assertEqual(8, $this->CartItem->addItem(1, 2));
    }
}
?>
