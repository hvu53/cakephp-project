<?php
class Product extends AppModel {
	var $name = 'Product';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	var $hasOne = array('Sample'=>array('dependent'=>true));
	
	var $belongsTo = array('Company');
/*
	var $hasMany = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'product_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Review' => array(
			'className' => 'Review',
			'foreignKey' => 'product_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Sample' => array(
			'className' => 'Sample',
			'foreignKey' => 'product_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);*/

	// return an array of product ids for 
	function recommendationEngine($userid,$productid,$count = 1){
		// get a list of ids of 3 random ratings of this tutor
		$tmp = $this->find('list', array(
			'fields' => array('id')
		));
		if(count($tmp)>$count) {
			$tmp = array_rand($tmp, $count);
		}
		return $tmp;
	}
}
?>