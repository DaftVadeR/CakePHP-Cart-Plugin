<?php
class TitlesController extends CartAppController {

	var $name = 'Titles';

	function index() {
		$this->Title->recursive = 0;
		$this->set('titles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid title', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('title', $this->Title->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Title->create();
			if ($this->Title->save($this->data)) {
				$this->Session->setFlash(__('The title has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The title could not be saved. Please, try again.', true));
			}
		}
		$carts = $this->Title->Cart->find('list');
		$this->set(compact('carts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid title', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Title->save($this->data)) {
				$this->Session->setFlash(__('The title has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The title could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Title->read(null, $id);
		}
		$carts = $this->Title->Cart->find('list');
		$this->set(compact('carts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for title', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Title->delete($id)) {
			$this->Session->setFlash(__('Title deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Title was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>