<?php
/* Customer Fixture generated on: 2011-06-18 20:06:22 : 1308430162 */
class CustomerFixture extends CakeTestFixture {
	var $name = 'Customer';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'points' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'city' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'state' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2),
		'zipcode' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'points' => 1,
			'phone' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => '',
			'zipcode' => 1
		),
	);
}
?>