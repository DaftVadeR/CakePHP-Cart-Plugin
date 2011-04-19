<?php
class BillingAddressesController extends CartAppController {

	var $name = 'BillingAddresses';
    
    function beforeFilter()
    {
        parent::beforeFilter();
    }

	function index() {
        $this->paginate['conditions']['BillingAddress.user_id'] = $this->Auth->user('id');
		$this->BillingAddress->recursive = 0;
		$this->set('billingAddresses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid billing address', 'error');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('billingAddress', $this->BillingAddress->read(null, $id));
	}

	function add() {
		if (!empty($this->data) && isset($this->data['BillingAddress'])) {
            $this->data['BillingAddress']['user_id'] = $this->Auth->user('id');
			$this->BillingAddress->create();
			if ($this->BillingAddress->save($this->data)) {
				$this->Session->setFlash('The billing address has been saved', 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The billing address could not be saved. Please, try again.', 'error');
			}
		}
        
		$titles = $this->BillingAddress->Title->find('list');
		$countries = $this->BillingAddress->Country->find('list');
		
		$this->set(compact('titles', 'countries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid billing address', 'error');
			$this->redirect(array('action' => 'index'));
		}
        
		if (!empty($this->data) && isset($this->data['BillingAddress'])) {
            $this->data['BillingAddress']['user_id'] = $this->Auth->user('id');
			if ($this->BillingAddress->save($this->data)) {
				$this->Session->setFlash('The billing address has been saved', 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The billing address could not be saved. Please, try again.', 'error');
			}
		}
        
		if (empty($this->data)) {
			$this->data = $this->BillingAddress->read(null, $id);
		}
        
		$titles = $this->BillingAddress->Title->find('list');
		$countries = $this->BillingAddress->Country->find('list');				
		$this->set(compact('titles', 'countries'));
	}

	function delete($id = null) {
        $id = intval($id);
        
        if ($id<=0) {
			$this->Session->setFlash('Invalid id for billing address', 'error');
			$this->redirect($this->referer());
		}
        
        $billingAddress = $this->BillingAddress->find('first', array('conditions'=>array("BillingAddress.id"=>$id)));

        if($this->Auth->user('id') && $this->Auth->user('id') != $billingAddress['user_id'])
        {
            $this->redirect('/');
        }
        
		if ($this->BillingAddress->delete($id)) {
			$this->Session->setFlash('Billing address deleted', 'success');
			$this->redirect($this->referer());
		}
        
		$this->Session->setFlash('Billing address was not deleted', 'error');
		$this->redirect($this->referer());
	}
}
?>