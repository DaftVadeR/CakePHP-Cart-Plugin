<?php
class OrdersController extends CartAppController {

	var $name = 'Orders';

	function beforeFilter()
	{
		//$this->Auth->allow('view', 'delete', 'checkout');
	}

	function index() {
		$this->Order->recursive = 0;
        $this->paginate['conditions']['Order.user_id'] = $this->Auth->user('id');
        $this->paginate['order']['Order.created'] = 'desc';
		$this->set('orders', $this->paginate());
	}

	function view($id) {        
		$order = $this->Order->find('first', array('Order.user_id'=>$this->Auth->user('id'), 'Order.id'=>$id));
		
		/*if(isset($this->params['requested']) && $this->params['requested'])
		{
			$this->autoRender = false;			
			return $order;
		}*/	
		
		$this->set('order', $order);
    }
	
	function add() {
        $cart = ClassRegistry::init('Cart.Cart')->getCart($this->Auth->user('id'), $this->Session->id());
        
        if(empty($cart) || empty($cart['CartItem']))
        {
            $this->Session->setFlash('You have no items in your cart, and thus, cannot check out.', 'error');
            $this->redirect('/');
        }
        
		if (!empty($this->data) && isset($this->data['Order']) && isset($this->data['Order']['billing_address_id'])) {			
            
            $billingAddress = ClassRegistry::init('BillingAddress')->find('first', array('recursive'=>-1, 'conditions'=>array('BillingAddress.id'=>$this->data['Order']['billing_address_id'])));
            
            if(count($cart['CartItem'])>0 && !empty($billingAddress))
            {
                $this->data['Order']['user_id'] = $this->Auth->user('id');
                
                $this->Order->create($this->data);
                
                if ($this->Order->save($this->data))
                {                    
                    if($this->Order->createItems($cart) && $this->Order->createBilling($billingAddress['BillingAddress']))
                    {
                        //$this->Order->updateTotals();
                        ClassRegistry::init('Cart.Cart')->delete($cart['Cart']['id']);
                        $this->Session->setFlash('Your order has been completed. Please monitor its status from this page.', 'success');
                        $this->redirect(array('action' => 'index'));
                    }
                }
                
                $this->Session->setFlash('The order could not be saved. Please, try again.', 'error');                               
            }           		
		}
        
        $billingAddresses = ClassRegistry::init('BillingAddress')->find('list', array('order'=>array('BillingAddress.is_default'=>'desc', 'BillingAddress.address'=>'asc'), 'conditions'=>array('BillingAddress.user_id'=>$this->Auth->user('id'))));
        $this->set(compact('billingAddresses', 'cart'));
	}

	/*function edit($id = null) {
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
}
?>