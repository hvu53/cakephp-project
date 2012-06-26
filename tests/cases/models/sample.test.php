<?php
/* Sample Test cases generated on: 2011-06-18 20:06:34 : 1308430174*/
App::import('Model', 'Sample');

class SampleTestCase extends CakeTestCase {
	var $fixtures = array('app.sample', 'app.customer', 'app.order', 'app.product', 'app.company', 'app.survey', 'app.review', 'app.search');

	function startTest() {
		$this->Sample =& ClassRegistry::init('Sample');
	}

	function endTest() {
		unset($this->Sample);
		ClassRegistry::flush();
	}

}
?>