<?php
class ProductsController extends AppController {

	var $name = 'Products';
	var $scaffold;

/*	function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		$companies = $this->Product->Company->find('list');
		$this->set(compact('companies'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
		$companies = $this->Product->Company->find('list');
		$this->set(compact('companies'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(__('Product deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Product was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		$companies = $this->Product->Company->find('list');
		$this->set(compact('companies'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
		$companies = $this->Product->Company->find('list');
		$this->set(compact('companies'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(__('Product deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Product was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	*/

	function search(){

		if (!empty($this->data)){

			$products = $this->Product->find('all', array('conditions' => array('Product.title LIKE' => '%' . $this->data['Product']['search_product'] . '%')));

		}

		$this->set(compact('products'));

	}

	function addresses(){

		if ($this->RequestHandler->isAjax()){

				$addresses = $this->Product->find('all', 
					array(
						'conditions' => array(
							'Product.title LIKE' => '%' . $this->data['Product']['search_product'] . '%'
						),
						'joins' => array(
							array(
								'table' => 'products_companies',
								'alias' => 'ProductsCompanies',
								'conditions' => array(
									'Product.id = ProductsCompanies.product_id'
								)
							),
							array(
								'table' => 'companies',
								'alias' => 'Company',
								'conditions' => array(
									'ProductsCompanies.company_id = Company.id'
								)
							)
						),
						'fields' => array(
							'Company.address'
						)
					)
				);

				$json = json_encode($addresses);

				$this->set(compact('json'));

				$this->render('json','ajax');

		}

	}
}
