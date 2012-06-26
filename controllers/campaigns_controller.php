<?php
class CampaignsController extends AppController {

	var $name = 'Campaigns';
	
	function company_index(){
		$this->Campaign->recursive = -1;
		$this->set('campaigns', $this->paginate());
	}
/*
	function index() {
		$this->Campaign->recursive = 0;
		$this->set('campaigns', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid campaign', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('campaign', $this->Campaign->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Campaign->create();
			if ($this->Campaign->save($this->data)) {
				$this->Session->setFlash(__('The campaign has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.', true));
			}
		}
		$companies = $this->Campaign->Company->find('list');
		$this->set(compact('companies'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid campaign', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Campaign->save($this->data)) {
				$this->Session->setFlash(__('The campaign has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Campaign->read(null, $id);
		}
		$companies = $this->Campaign->Company->find('list');
		$this->set(compact('companies'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for campaign', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Campaign->delete($id)) {
			$this->Session->setFlash(__('Campaign deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Campaign was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
