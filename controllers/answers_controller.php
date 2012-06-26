<?php
class AnswersController extends AppController {

	var $name = 'Answers';
	
	function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('customer_take');
	}
	
	function customer_take($surveyid=null){
		if(!$surveyid)$surveyid=1;//$this->redirect(array('controller'=>'surveys','action' => 'index'));
		
		$survey = $this->Answer->Survey->find('first',array(
			'conditions'=>array('Survey.id'=>$surveyid),
			'contain'=>array()
		));
		$questions = $this->Answer->Survey->decodeQuestions($survey['Survey']['questions']);
		
		if (!empty($this->data)) {
			$this->Answer->create();
			// SHOULD CHECK THE SURVEY_ID SOMEHOW!! maybe add Security component
			$this->data['Answer']['data'] = $this->Answer->Survey->encodeAnswers($questions,$this->data['a']);
			
			$this->data['Answer']['user_id'] = $this->Auth->user('id');
			if ($this->Answer->save($this->data)) {
				$this->Session->setFlash('Thank you for taking the survey');
				$this->redirect(array('controller'=>'surveys','action' => 'index'));
			} else {
				$this->Session->setFlash('Your answer could not be saved. Please, try again.');
			}
		}
		
		$this->set(compact('survey','questions'));
	}
	
	function company_result($surveyid=null){
		if(!$surveyid)$this->redirect(array('controller'=>'surveys','action' => 'index'));
		
		$results = $this->Answer->Survey->analyzeAnswers($surveyid);
		// check company_id xem co authorized ko?
		$this->set(compact('results'));
	}
/*
	function index() {
		$this->Answer->recursive = 0;
		$this->set('answers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid answer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('answer', $this->Answer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Answer->create();
			if ($this->Answer->save($this->data)) {
				$this->Session->setFlash(__('The answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.', true));
			}
		}
		$surveys = $this->Answer->Survey->find('list');
		$users = $this->Answer->User->find('list');
		$this->set(compact('surveys', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid answer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Answer->save($this->data)) {
				$this->Session->setFlash(__('The answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Answer->read(null, $id);
		}
		$surveys = $this->Answer->Survey->find('list');
		$users = $this->Answer->User->find('list');
		$this->set(compact('surveys', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Answer->delete($id)) {
			$this->Session->setFlash(__('Answer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Answer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
