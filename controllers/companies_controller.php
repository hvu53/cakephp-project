<?php
class CompaniesController extends AppController {

	var $name = 'Companies';

	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('view');
	}
	
	function view($id = null) {
		if (!$id)$this->redirect(array('controller'=>'products','action' => 'index'));
		$this->helpers[] = 'Text';
		
		$this->set('company', $this->Company->find('first',array(
			'conditions'=>array('Company.id'=>$id),
			'contain'=>array(
				'Product'=>array(
					'order' => 'Product.id DESC',
					'limit' => 5
				)
			)
		)));

	}
	
	function add() {
			if (!empty($this->data)) {
				$this->Company->create();
				if ($this->Company->save($this->data)) {
					$this->Session->setFlash(__('The company has been saved', true));
					$this->redirect(array('action' => 'view',$this->Company->getLastInsertID()));
				} else {
					$this->Session->setFlash(__('The company could not be saved. Please, try again.', true));
				}
			}
		}
		
	/*function index() {
		$this->Company->recursive = 0;
		$this->set('companies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid company', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('company', $this->Company->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Company->create();
			if ($this->Company->save($this->data)) {
				$this->Session->setFlash(__('The company has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid company', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Company->save($this->data)) {
				$this->Session->setFlash(__('The company has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Company->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for company', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Company->delete($id)) {
			$this->Session->setFlash(__('Company deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Company was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
?>