<?php
class CustomersSample extends AppModel {
	var $name = 'CustomersSample';
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sample' => array(
			'className' => 'Sample',
			'foreignKey' => 'sample_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	/* customer $id requests these $sample_ids (id=>'')
	 * check if they request them or not, insert in the table with status 0
	 * decrease the customer points, redule sample quantity, save and return that
	 * or if the total points exceed, return -1
	 */
	function customer_request_samples($id, $sample_ids){
		$tmp = $this->find('list', array('conditions'=>array(
			$this->alias.'.customer_id' => $id,
			$this->alias.'.sample_id' => array_keys($sample_ids),
		)));
		
		$tmp1 = array_diff_key($sample_ids,$tmp);
		
		$samples = $this->Sample->find('all', array(
			'fields'=>array('id','quantity','point'),
			'conditions'=>array(
				$this->alias.'.id'=>array_keys($tmp1),
				$this->alias.'.quantity >'=>0
			),
			'contain'=>array()
		));
		$new_data = array();$cost = 0;
		foreach ($samples as $sample) {
			$sample['Sample']['quantity'] = $sample['Sample']['quantity'] - 1;
			$cost += $sample['Sample']['point'];
			array_push($new_data, $sample['Sample']);
		}
		
		$this->Customer->id = $id;
		$customer_point = $this->Customer->field('point');
		
		if($customer_point<$cost)return -1;
		$this->Customer->saveField('point',$customer_point-$cost);
		$this->Sample->saveAll($new_data);
		
		$orders = array();
		foreach($new_data as $sample_taken){
			$orders[] = array('customer_id'=>$id,'sample_id'=>$sample_taken['id'],'status'=>0);
		}
		$this->saveAll($orders);
		
		return $customer_point-$cost;
	}
}
