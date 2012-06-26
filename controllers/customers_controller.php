<?php
class CustomersController extends AppController {

	var $name = 'Customers';
	var $paginate = array(
		'CustomersSample'=>array(
			'table'=>'customers_samples',
			'contain'=>array('Sample.Product')
		)
	);
	/*
	 * count number of items in cart
	 * $data = array(
	 *    'Samples'=>array(id)
	 *    'Products'=>aray(id=>quantity)
	 * )
	 */
	function __cart_count(&$data){
		$quantity = count($data['Samples']);
		
		foreach($data['Products'] as $product){
			$quantity += $product;
		}
		$data['count'] = $quantity;
	}
	
	function customer_cart(){
		if(!empty($this->data)){
			if(isset($this->params['form']['send'])){
				if(isset($this->data['Samples']))
					$ret = $this->Customer->CustomersSample->customer_request_samples(
						$this->Auth->user('id'),$this->data['Samples']
					);
				if($ret==-1){
					$this->Session->setFlash('Sorry, you don\'t have enough points to redeem for the samples:(');
				}else{
					$this->Session->write('Customer.point',$ret);
					$this->Session->write('Cart',array('Samples'=>array(),'Products'=>array(),'count'=>0));
					$this->Session->setFlash('Thank you. Your order has been placed.');
				}
				
			}else{//update
				if(!isset($this->data['Samples']))$this->data['Samples'] = array();
				if(!isset($this->data['Products']))$this->data['Products'] = array();
				
				$this->__cart_count($this->data);
				$this->Session->write('Cart', $this->data);
			}
		}
		
		$cart = $this->Session->read('Cart');
		$samples = $this->Customer->CustomersSample->Sample->find('all',array(
			'conditions'=>array('Sample.id'=>  array_keys($cart['Samples'])),
			'contain'=>array()
		));
		$products = $this->Customer->CustomersSample->Sample->Product->find('all',array(
			'conditions'=>array('Product.id'=>  array_keys($cart['Products'])),
			'contain'=>array()
		));
		$this->set(compact('samples','products'));
	}
	
	function customer_samples(){
		$samples =  $this->paginate('CustomersSample',array(
			'CustomersSample.customer_id'=>$this->Auth->user('id')
		));
		$this->set(compact('samples'));
	}
	
	function customer_choosesample(){
		$cart = $this->Session->read('Cart');
		$cart['Samples'][$this->data['id']] = '';
		$this->__cart_count($cart);
		$this->Session->write('Cart', $cart);
		
		$this->render('/elements/cart','ajax');
		
		/*$this->CustomersSample->recursive = -1;
		$customer_record = $this->CustomersSample->find('first',array(
			'conditions'=>array(
				'CustomersSample.customer_id'=>$this->Auth->user('id'),
				'CustomersSample.sample_id'=>$this->data['id']
			),
			'contain'=>array('Sample')
		));
		if(!isset($customer_record['CustomersSample'])){
			echo 'You have already taken this sample.';
			return;
		}
		if($customer_record['Sample']['point']>$this->Session->read('Customer.point')){
			echo 'You don\'t have enough points for this sample';
			return;
		}*/
	}
/*	function index() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid customer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customer', $this->Customer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Customer->create();
			if ($this->Customer->save($this->data)) {
				$this->Session->setFlash(__('The customer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid customer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Customer->save($this->data)) {
				$this->Session->setFlash(__('The customer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Customer->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for customer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Customer->delete($id)) {
			$this->Session->setFlash(__('Customer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Customer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
?>