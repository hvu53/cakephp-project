<?php
/* Search Test cases generated on: 2011-06-18 20:06:37 : 1308430177*/
App::import('Model', 'Search');

class SearchTestCase extends CakeTestCase {
	var $fixtures = array('app.search', 'app.customer', 'app.order', 'app.product', 'app.company', 'app.survey', 'app.review', 'app.sample');

	function startTest() {
		$this->Search =& ClassRegistry::init('Search');
	}

	function endTest() {
		unset($this->Search);
		ClassRegistry::flush();
	}

}
?>