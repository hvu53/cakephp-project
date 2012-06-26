<?php
/* Survey Test cases generated on: 2011-06-18 20:06:39 : 1308430179*/
App::import('Model', 'Survey');

class SurveyTestCase extends CakeTestCase {
	var $fixtures = array('app.survey', 'app.company', 'app.product', 'app.order', 'app.customer', 'app.review', 'app.sample', 'app.search');

	function startTest() {
		$this->Survey =& ClassRegistry::init('Survey');
	}

	function endTest() {
		unset($this->Survey);
		ClassRegistry::flush();
	}

}
?>