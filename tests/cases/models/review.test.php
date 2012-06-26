<?php
/* Review Test cases generated on: 2011-06-18 20:06:31 : 1308430171*/
App::import('Model', 'Review');

class ReviewTestCase extends CakeTestCase {
	var $fixtures = array('app.review', 'app.customer', 'app.order', 'app.product', 'app.company', 'app.survey', 'app.sample', 'app.search');

	function startTest() {
		$this->Review =& ClassRegistry::init('Review');
	}

	function endTest() {
		unset($this->Review);
		ClassRegistry::flush();
	}

}
?>