<?php
/* Review Fixture generated on: 2011-06-18 20:06:31 : 1308430171 */
class ReviewFixture extends CakeTestFixture {
	var $name = 'Review';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'experienced' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'rating' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'comment' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'product_id' => 1,
			'experienced' => 1,
			'rating' => 1,
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
?>