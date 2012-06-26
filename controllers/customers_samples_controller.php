<?php
class CustomersSamplesController extends AppController {

	var $name = 'CustomersSamples';
	var $paginate = array(
		'contain' => array('Customer.User','Sample.Product'),
		'order' => array('CustomersSample.created' => 'desc')
	);
	
	function admin_index($status = null) {
		if(!empty($this->data)){
			$this->CustomersSample->save($this->data);
		}
		
		if($status!=null)$conds = array('CustomersSample.status'=>$status);
		else $conds = array();
		$this->set('customersSamples', $this->paginate('CustomersSample',$conds));
	}
/*
	function index() {
		$this->CustomersSample->recursive = 0;
		$this->set('customersSamples', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid customers sample', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customersSample', $this->CustomersSample->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CustomersSample->create();
			if ($this->CustomersSample->save($this->data)) {
				$this->Session->setFlash(__('The customers sample has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers sample could not be saved. Please, try again.', true));
			}
		}
		$customers = $this->CustomersSample->Customer->find('list');
		$samples = $this->CustomersSample->Sample->find('list');
		$this->set(compact('customers', 'samples'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid customers sample', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CustomersSample->save($this->data)) {
				$this->Session->setFlash(__('The customers sample has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers sample could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CustomersSample->read(null, $id);
		}
		$customers = $this->CustomersSample->Customer->find('list');
		$samples = $this->CustomersSample->Sample->find('list');
		$this->set(compact('customers', 'samples'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for customers sample', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CustomersSample->delete($id)) {
			$this->Session->setFlash(__('Customers sample deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Customers sample was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
