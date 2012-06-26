<?php
class SamplesController extends AppController {

	var $name = 'Samples';
	var $paginate = array(
		'limit' => 9,
		'order' => array(
			'Sample.created' => 'desc'
		)
	);
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}
	
	function index() {
		$this->Sample->recursive = 0;
		$this->set('samples', $this->paginate());
	}
	
	/*function index() {
		$this->Sample->recursive = 0;
		$this->set('samples', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sample', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sample', $this->Sample->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Sample->create();
			if ($this->Sample->save($this->data)) {
				$this->Session->setFlash(__('The sample has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sample could not be saved. Please, try again.', true));
			}
		}
		$customers = $this->Sample->Customer->find('list');
		$products = $this->Sample->Product->find('list');
		$this->set(compact('customers', 'products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sample', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sample->save($this->data)) {
				$this->Session->setFlash(__('The sample has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sample could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sample->read(null, $id);
		}
		$customers = $this->Sample->Customer->find('list');
		$products = $this->Sample->Product->find('list');
		$this->set(compact('customers', 'products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sample', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sample->delete($id)) {
			$this->Session->setFlash(__('Sample deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sample was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
?>