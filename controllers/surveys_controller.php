<?php
class SurveysController extends AppController {

	var $name = 'Surveys';

	function customer_index() {
		$this->Survey->recursive = 0;
		$this->set('surveys', $this->paginate());
	}
	function company_index() {
		$this->Survey->recursive = -1;
		$this->set('surveys', $this->paginate());
	}
	/*
	function index() {
		$this->Survey->recursive = 0;
		$this->set('surveys', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid survey', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('survey', $this->Survey->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Survey->create();
			if ($this->Survey->save($this->data)) {
				$this->Session->setFlash(__('The survey has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The survey could not be saved. Please, try again.', true));
			}
		}
		$companies = $this->Survey->Company->find('list');
		$this->set(compact('companies'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid survey', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Survey->save($this->data)) {
				$this->Session->setFlash(__('The survey has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The survey could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Survey->read(null, $id);
		}
		$companies = $this->Survey->Company->find('list');
		$this->set(compact('companies'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for survey', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Survey->delete($id)) {
			$this->Session->setFlash(__('Survey deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Survey was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
?>