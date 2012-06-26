<?php
class User extends AppModel {
	var $name = 'User';
	var $validate = array(
		'username' => array(
			'rule' => 'email',
			'required' => true
		),
		'password' => array(
			'rule' => 'notEmpty',
			'required' => true
		)
	);
	
	function getCustomerRecord($id) {
		$this->bindModel(array(
			'hasOne' => array(
				'Customer' => array(
					'className' => 'Customer',
					'foreignKey' => 'user_id'
				)
			)
		));
		return $this->Customer->find('first', array(
				'conditions' => array('Customer.user_id' => $id),
				'contain' => array()
			));
	}
	
	function saveCustomer($data){
		$data['User']['group'] = 3;
		$data['User']['points'] = 0;
		$this->bindModel(array(
			'hasOne' => array(
				'Customer' => array(
					'className' => 'Customer',
					'foreignKey' => 'user_id'
				)
			)
		));
		$this->Customer->set(array('Customer'=>$data['User']));
		if($this->Customer->validates()){// Customer record can saved
			if(!$this->save($data))return false;
			
			$data['User']['user_id'] = $this->getLastInsertID();
			return $this->Customer->save(array('Customer'=>$data['User']));
		}else return false;
		
	}
}
?>