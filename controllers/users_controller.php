<?php
class UsersController extends AppController {
	var $name = 'Users';

	function beforeFilter()
	{
        parent::beforeFilter();
        
		if(($this->action == 'login' || $this->action == 'add') && !empty($this->data) && isset($this->data['User']))
		{			
			$this->data['User']['last_ip_address'] = $this->RequestHandler->getClientIP();
			$this->Security->disabledFields = array('User.last_ip_address');
		}
		
		$this->Auth->autoRedirect = false;
		
		$this->Auth->allow('add');
	}
	
	private function _assignCartToUser()
	{
		$cart = $this->User->Cart->getCart(null, $this->Session->id());	
		
		if(!empty($cart))
		{
			if(count($cart['CartItem'])==0)
			{
				$this->User->Cart->delete($cart['Cart']['id']);
			}
			else
			{
				$existing = $this->User->Cart->getCart($this->Auth->user('id'), null);
				
				if(!empty($existing))
				{
					$this->User->Cart->delete($existing['Cart']['id']);
				}
				
				$this->User->Cart->id = $cart['Cart']['id'];
				$this->User->Cart->updateAll(array('user_id'=>$this->Auth->user('id'), 'session_id'=>null), array('Cart.id'=>$cart['Cart']['id']));
			}
		}
		
		return true;
	}
	
	function login()
	{
		if(!empty($this->data))
		{
			if($this->Auth->user())
			{				
				$this->_assignCartToUser();				
				$this->redirect('/');
			}
		}
	}
	
	function logout()
	{
		$this->Session->setFlash('You have been logged out successfully.', 'success');
		$to = $this->Auth->logout();		
		$this->redirect($to);
	}

	function view()
	{
		$id = $this->Auth->user('id');
		
		if (!$id)
		{
			$this->redirect($this->Auth->logout());
			$this->Session->setFlash('You are not logged in.', 'error');
			$this->redirect(array('action' => 'login'));
		}
		
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data))
		{
			$this->User->create();
			if ($this->User->save($this->data))
			{
				$this->Session->setFlash('You have been registered successfully.', 'success');
				if($this->Auth->login($this->data))
				{
					$this->_assignCartToUser();
				}
				$this->redirect('/');
			}
			
			else
			{
				$this->Session->setFlash('The details you supplied were invalid. Please try again.', 'error');
			}
		}
        
        $titles = $this->User->Title->find('list');
        $this->set(compact('titles'));
	}

	function edit() {
		$id = $this->Auth->user('id');
		
		if (!$id) {
			$this->Session->setFlash('Invalid user', 'error');
			$this->redirect('/');
		}
		
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('Your profile has been saved', 'success');
				$this->redirect('/');
			} else {
				$this->Session->setFlash('The profile could not be saved. Please try again.', 'error');
			}
		}
        
		if (empty($this->data)) {
            $this->User->recursive = -1;
			$this->data = $this->User->read(null, $id);
		}
        
        $billingAddresses = $this->User->BillingAddress->find('all', array('recursive'=>-1, 'conditions'=>array('BillingAddress.user_id'=>$this->data['User']['id'])));
        
        $titles = $this->User->Title->find('list');
        $this->set(compact('titles', 'billingAddresses'));
	}

	function delete() {
		$id = $this->Auth->user('id');
		
		if (!$id) {
			$this->Session->setFlash('Invalid user account.', 'error');
			$this->redirect('/');
		}
		if ($this->User->delete($id)) {
			$this->Auth->logout();
			$this->Session->setFlash('Your account was deleted successfully', 'success');
			$this->redirect('/');
		}
		
		$this->Session->setFlash('Profile could not be deleted', 'error');
		$this->redirect('/');
	}
}
?>