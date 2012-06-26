<?php
/* Order Fixture generated on: 2011-06-18 20:06:25 : 1308430165 */
class OrderFixture extends CakeTestFixture {
	var $name = 'Order';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'unit_price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'quantity' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'shipping' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'total_price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'product_id' => 1,
			'unit_price' => 1,
			'quantity' => 1,
			'shipping' => 1,
			'total_price' => 1
		),
	);
}
?>