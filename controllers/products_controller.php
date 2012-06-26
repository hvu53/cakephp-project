<?php
class ProductsController extends AppController {

	var $name = 'Products';

	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','view','preview');
	}
	function index() {
		$randproducts = $this->Product->find('all',array(
			'conditions'=>array('Product.id'=>$this->Product->recommendationEngine(1,1,6)),
			'contain'=>array()
		));
		$this->set('title_for_layout', '');
		$this->set(compact('randproducts'));
	}
	function preview($id = null){
		if(!$id)die();
		$product = $this->Product->find('first', array(
			'conditions'=>array('Product.id'=>$id),
			'contain'=>array('Sample.CustomersSample'=>array('conditions'=>array('CustomersSample.customer_id'=>$this->Auth->user('id'))))
		));
		$this->set(compact('product'));
		$this->render('preview','ajax');
	}
	function view($id = null) {
		if (!$id)$this->redirect(array('action' => 'index'));
		
		$product = $this->Product->find('first', array(
			'conditions'=>array('Product.id'=>$id),
			'contain'=>array(
				'Sample.CustomersSample'=>array('conditions'=>array('CustomersSample.customer_id'=>$this->Auth->user('id'))),
				'Company'
			)
		));
		$randproducts = $this->Product->find('all',array(
			'conditions'=>array('Product.id'=>$this->Product->recommendationEngine(0,$id,3)),
			'contain'=>array()
		));

		$this->set(compact('product','randproducts'));
	}
	
	//----------------------admin---------------------------------------------
	function admin_index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
		
	}

	function admin_add() {
		if (!empty($this->data)) {
			$pic = $this->data['Product']['picture'];
			if($pic['error']!=0)unset($this->data['Product']['picture']);
			else $this->data['Product']['picture'] = $pic['name'];
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->data['Sample']['product_id'] = $this->Product->id;
			    $this->Product->Sample->save($this->data);
				//-------------- Product picture------------------
				if($pic['error'] != 4) {// no file upload
					if($pic['error'] != 0) {// not success
						debug('PHP Upload Error Code: '.$pic['error']);
					}else{
						$targetDir = WWW_ROOT . 'img' . DS .'products' . DS . $this->Product->id;
						if(!is_dir($targetDir))mkdir($targetDir);
						move_uploaded_file($pic['tmp_name'],$targetDir . DS . $pic['name']);
					}
				}
				//------------------------------------------------
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
			$pic = $this->data['Product']['picture'];
			if($pic['error']!=0)unset($this->data['Product']['picture']);
			else $this->data['Product']['picture'] = $pic['name'];
			
			if ($this->Product->save($this->data)) {
			$this->data['Sample']['product_id'] = $this->Product->id;
				$this->Product->Sample->save($this->data);
				//-------------- Product picture------------------
				if($pic['error'] != 4) {// no file upload
					if($pic['error'] != 0) {// not success
						debug('PHP Upload Error Code: '.$pic['error']);
					}else{
						$targetDir = WWW_ROOT . 'img' . DS .'products' . DS . $this->Product->id;
						if(!is_dir($targetDir))mkdir($targetDir);
						move_uploaded_file($pic['tmp_name'],$targetDir . DS . $pic['name']);
					}
				}
				//------------------------------------------------
				$this->Session->setFlash(__('The product has been saved', true));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		$this->data = $this->Product->read(null, $id);
		
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
	//---------------------Company-----------------------------------------------
	function company_index() {
		$products = $this->Product->find('all',array(// should have conditions here
			'conditions'=>array('Product.id'=>10),
			'contain'=>array()
		));
		$this->set(compact('products'));
	}
//--------------CUSTOMER-----------------------------------
	function customer_index() {
		$this->index();
		$this->render('index');
	}
	function customer_view($id = null) {
		$this->view($id);
		$this->render('view');
	}
	function customer_preview($id = null) {
		$this->preview($id);
	}
	/*function index() {
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
		$surveys = $this->Product->Survey->find('list');
		$this->set(compact('companies', 'surveys'));
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
		$surveys = $this->Product->Survey->find('list');
		$this->set(compact('companies', 'surveys'));
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
	}*/
}
?>