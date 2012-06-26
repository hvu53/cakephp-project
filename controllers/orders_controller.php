<?php
class OrdersController extends AppController {

	var $name = 'Orders';

	function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid order', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('order', $this->Order->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Order->create();
			if ($this->Order->save($this->data)) {
				$this->Session->setFlash(__('The order has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.', true));
			}
		}
		$customers = $this->Order->Customer->find('list');
		$products = $this->Order->Product->find('list');
		$this->set(compact('customers', 'products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid order', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Order->save($this->data)) {
				$this->Session->setFlash(__('The order has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Order->read(null, $id);
		}
		$customers = $this->Order->Customer->find('list');
		$products = $this->Order->Product->find('list');
		$this->set(compact('customers', 'products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for order', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Order->delete($id)) {
			$this->Session->setFlash(__('Order deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Order was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>