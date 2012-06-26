<?php
class UsersController extends AppController {

	var $name = 'Users';
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('signup','contact');
		$this->Auth->autoRedirect = false;// to check remember_me
	}
//------------------------------------LOGIN HANDLER------------------------------------------------------
	function login() {
		//http://book.cakephp.org/view/395/autoRedirect
		if ($this->Auth->user()){
			$this->redirect($this->Auth->redirect());
		}
	}

	function logout() {
		$this->redirect($this->Auth->logout());
	}
	// redirect after login
	function queoru() {
		//$this->Cookie->write('credit',$this->Auth->user('credit'),false);
		if($this->Auth->user('group') == '1')$this->redirect(array('admin'=>true,'controller'=>'products','action'=>'index'));
		if($this->Auth->user('group') == '2')$this->redirect(array('company'=>true,'controller'=>'users','action'=>'index'));
		if($this->Auth->user('group') == '3'){
			$customer = $this->User->getCustomerRecord($this->Auth->user('id'));
			$this->Session->write('Customer', $customer['Customer']);
			
			$cart = array('Samples'=>array(),'Products'=>array(),'count'=>0);
			$this->Session->write('Cart',$cart);
			
			$this->redirect(array('customer'=>true,'controller'=>'products','action'=>'index'));
		}
	}
//------------------------END OF LOGIN HANDLER----------------------------------------
	function signup() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->saveCustomer($this->data)) {
				$this->Session->setFlash('Thank you for registering with us!');
				$this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash('There are some errors in your input. Please try again.');
			}
		}
	}
	//---------------------------------------------------------------
	function customer_index(){
		$customer['Customer'] = $this->Session->read('Customer');
		$this->set(compact('customer'));
	}
	
//---------------------Company---------------------------------
	function company_index(){
		$this->User->bindModel(array(
				'hasOne' => array(
					'Company' => array(
						'className' => 'Company',
						'foreignKey' => 'user_id'
					)
				)
			));
			$company = $this->User->Company->find('first',array(
				'conditions'=>array('Company.user_id'=>$this->Auth->user('id')),
				'contain'=>array()
			));
			$this->set(compact('company'));
	}
	//-----------------------------------------------
	function contact(){
		if(!empty($this->data)){
			$this->Email->from  = 'Xamples contact page';
			$this->Email->to = 'hoavt040789@gmail.com';
			$this->Email->subject = 'New contact';
			$this->Email->sendAs = 'html';
			$this->Email->template = 'contact_us';
			$this->set('user', $tmp['User']);
			$this->Email->send();
			$this->Session->setFlash('Thank you for contacting us. We\'ll reply to your inquiry soon.');
		}
		$this->redirect('/');
	}
//---------------------------- Default functions ---------------------------------
	/*function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
?>