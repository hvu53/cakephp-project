<?php
/* User Fixture generated on: 2011-06-20 21:06:02 : 1308604382 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
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
			'email' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => '',
			'zipcode' => 1
		),
	);
}
?>