<?php
/* Customer Test cases generated on: 2011-06-18 20:06:22 : 1308430162*/
App::import('Model', 'Customer');

class CustomerTestCase extends CakeTestCase {
	var $fixtures = array('app.customer', 'app.order', 'app.review', 'app.sample', 'app.search');

	function startTest() {
		$this->Customer =& ClassRegistry::init('Customer');
	}

	function endTest() {
		unset($this->Customer);
		ClassRegistry::flush();
	}

}
?>