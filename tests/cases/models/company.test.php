<?php
/* Company Test cases generated on: 2011-06-18 20:06:18 : 1308430158*/
App::import('Model', 'Company');

class CompanyTestCase extends CakeTestCase {
	var $fixtures = array('app.company', 'app.product', 'app.survey');

	function startTest() {
		$this->Company =& ClassRegistry::init('Company');
	}

	function endTest() {
		unset($this->Company);
		ClassRegistry::flush();
	}

}
?>