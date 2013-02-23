<?php
class CompanytypesController extends AppController {

	var $name = 'Companytypes';

	function index() {
		$this->Companytype->recursive = 0;
		$this->set('companytypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid companytype', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('companytype', $this->Companytype->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Companytype->create();
			if ($this->Companytype->save($this->data)) {
				$this->Session->setFlash(__('The companytype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companytype could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid companytype', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Companytype->save($this->data)) {
				$this->Session->setFlash(__('The companytype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companytype could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Companytype->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for companytype', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Companytype->delete($id)) {
			$this->Session->setFlash(__('Companytype deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Companytype was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Companytype->recursive = 0;
		$this->set('companytypes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid companytype', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('companytype', $this->Companytype->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Companytype->create();
			if ($this->Companytype->save($this->data)) {
				$this->Session->setFlash(__('The companytype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companytype could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid companytype', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Companytype->save($this->data)) {
				$this->Session->setFlash(__('The companytype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companytype could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Companytype->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for companytype', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Companytype->delete($id)) {
			$this->Session->setFlash(__('Companytype deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Companytype was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
