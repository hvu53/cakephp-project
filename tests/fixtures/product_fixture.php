<?php
/* Product Fixture generated on: 2011-06-18 20:06:28 : 1308430168 */
class ProductFixture extends CakeTestFixture {
	var $name = 'Product';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'company_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'survey_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'category' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'sample_quantity' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'company_id' => 1,
			'survey_id' => 1,
			'category' => 'Lorem ipsum dolor sit amet',
			'sample_quantity' => 1,
			'price' => 1
		),
	);
}
?>