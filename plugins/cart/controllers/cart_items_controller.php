<?php
class CartItemsController extends CartAppController {

	var $name = 'CartItems';
    //var $components = array('Session');
	
	function beforeFilter()
	{                
		parent::beforeFilter();
		$this->Auth->allow('add', 'delete');
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

	function add($id) {       
		$id = intval($id);
        
		$item = $this->CartItem->Item->find('count', array('limit'=>1, 'conditions'=>array('id'=>$id)));
		
		if($item==0)
		{
			$this->Session->setFlash('Invalid product specified to add to cart', 'error');
			$this->redirect($this->referer());
		}
		
		$user = ($this->Auth->user('id')?array('user_id'=>$this->Auth->user('id')):array('session_id'=>$this->Session->id()));
	
		$cart = $this->CartItem->Cart->getCart($this->Auth->user('id'), $this->Session->id(), false);				
        
		if($this->CartItem->find('count', array('conditions'=>array('CartItem.item_id'=>$id)+$user))>0)
		{
			$this->Session->setFlash('That product already exists in your cart.', 'error');
			$this->redirect($this->referer());
		}
		
		if(empty($cart))
		{            
			$this->CartItem->Cart->create($user);		
			if($this->CartItem->Cart->save())
            {
                $this->CartItem->Cart->recursive = -1;
                $cart = $this->CartItem->Cart->read();
            }
		}
		
		if(!empty($cart))
		{            
			$this->CartItem->create(array('item_id'=>$id, 'cart_id'=>$cart['Cart']['id']));
		
			if($this->CartItem->save())
			{                
				$this->Session->setFlash('Item added to cart successfully', 'success');
			}         
		}
		
		$this->redirect($this->referer());
	}

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

	function delete($id = null) {
		$id = intval($id);
		
		$cart = $this->CartItem->Cart->getCart($this->Auth->user('id'), $this->Session->id());
		
		if(empty($cart))
		{
			$this->Session->setFlash('You have nothing in your cart yet!', 'error');
			$this->redirect($this->referer());
		}
		
		$exist = $this->CartItem->find('count', array('limit'=>1, 'conditions'=>array('item_id'=>$id)));
		
		if ($exist==0) {
			$this->Session->setFlash('That product is not in your cart.', 'error');
			$this->redirect($this->referer());
		}
		
		if ($this->CartItem->deleteAll(array('item_id'=>$id, 'cart_id'=>$cart['Cart']['id']))) {
			$this->Session->setFlash('Item removed from cart.', 'success');
			$this->redirect($this->referer());			
		}
		
		$this->Session->setFlash('Cart item was not deleted', 'error');
		$this->redirect($this->referer());
	}
}
?>