<?php
class CartItemsController extends CartAppController {

	var $name = 'CartItems';    
	
	function beforeFilter()
	{                
		parent::beforeFilter();
		$this->Auth->allow('add', 'delete');
	}	

	function add($id) {       
		$id = intval($id);        
		
		if(!$this->CartItem->itemExists($id))
		{
			$this->Session->setFlash('Invalid product specified to add to cart.', 'error');
			$this->redirect($this->referer());
		}
		
		$user = ($this->Auth->user('id')?array('user_id'=>$this->Auth->user('id')):array('session_id'=>$this->Session->id()));        
        $cart = $this->CartItem->Cart->getCart(isset($user['user_id'])?$user['user_id']:null, isset($user['session_id'])?$user['session_id']:null, false);       
        
		if(!empty($cart) && $this->CartItem->itemInCart($id, $cart['Cart']['id']))
		{            
			$this->Session->setFlash('That product already exists in your cart.', 'error');			
		}
        elseif($this->CartItem->addItem($id, (empty($cart)?0:$cart['Cart']['id'])))
        {
            $this->Session->setFlash('Item added to cart successfully.', 'success');            
        }
        else
        {
            $this->Session->setFlash('Item could not be added to cart.', 'error');            
        }
        
        $this->redirect($this->referer());
	}   
	

	function delete($id = null) {
		$id = intval($id);
		
		$cart = $this->CartItem->Cart->getCart($this->Auth->user('id'), $this->Session->id());
		
		if(empty($cart))
		{
			$this->Session->setFlash('You have nothing in your cart yet!', 'error');			
		}	
		elseif (!$this->CartItem->itemInCart($id, $cart['Cart']['id'])) {
			$this->Session->setFlash('That product is not in your cart.', 'error');			
		}		
		elseif ($this->CartItem->deleteAll(array('item_id'=>$id, 'cart_id'=>$cart['Cart']['id'])))
        {
			$this->Session->setFlash('Item removed from cart.', 'success');						
		}
		else
        {
            $this->Session->setFlash('Cart item was not deleted.', 'error');
        }
        
		$this->redirect($this->referer());
	}
    
    /*function index() {
		$this->CartItem->recursive = 0;
		$this->set('cartItems', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cart item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cartItem', $this->CartItem->read(null, $id));
	}*/

	/*function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cart item', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CartItem->save($this->data)) {
				$this->Session->setFlash(__('The cart item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CartItem->read(null, $id);
		}
		$carts = $this->CartItem->Cart->find('list');
		$products = $this->CartItem->Product->find('list');
		$this->set(compact('carts', 'products'));
	}*/
}
?>