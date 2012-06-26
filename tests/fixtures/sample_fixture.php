<?php
/* Sample Fixture generated on: 2011-06-18 20:06:34 : 1308430174 */
class SampleFixture extends CakeTestFixture {
	var $name = 'Sample';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'product_id' => 1,
			'status' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-06-18 20:49:34'
		),
	);
}
?>