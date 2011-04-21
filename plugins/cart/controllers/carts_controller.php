<?php
class CartsController extends CartAppController {

	var $name = 'Carts';

	function beforeFilter()
	{
		$this->Auth->allow('view', 'delete', 'checkout');        
        parent::beforeFilter();
	}

	function view() {
		$cart = $this->Cart->getCart($this->Auth->user('id'), $this->Session->id());
		
		if(isset($this->params['requested']) && $this->params['requested'])
		{
			$this->autoRender = false;
			return $cart;
		}	
		
		$this->set('cart', $cart);
	}
    
	function delete() {
		$cart = $this->Cart->getCart($this->Auth->user('id'), $this->Session->id(), false);
		
		if(empty($cart))
		{
			$this->Session->setFlash('Your cart is already empty.', 'error');
			$this->redirect($this->referer());
		}
		
		if($this->Cart->delete($cart['Cart']['id']))		
		{
			$this->Session->setFlash('Cart cleared successfully.', 'success');
			$this->redirect($this->referer());
		}
		
		$this->Session->setFlash('Cart was not cleared', 'error');
		$this->redirect($this->referer());
	}
    
    
	/*function index() {
		$this->Cart->recursive = 0;
		$this->set('carts', $this->paginate());
	}*/
    
	/*function add() {
		if (!empty($this->data)) {
			$this->Cart->create();
			if ($this->Cart->save($this->data)) {
				$this->Session->setFlash(__('The cart has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Cart->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cart', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cart->save($this->data)) {
				$this->Session->setFlash(__('The cart has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cart->read(null, $id);
		}
		$users = $this->Cart->User->find('list');
		$this->set(compact('users'));
	}*/

	
}
?>