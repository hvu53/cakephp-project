<?php
/* Product Test cases generated on: 2011-06-18 20:06:28 : 1308430168*/
App::import('Model', 'Product');

class ProductTestCase extends CakeTestCase {
	var $fixtures = array('app.product', 'app.company', 'app.survey', 'app.order', 'app.customer', 'app.review', 'app.sample', 'app.search');

	function startTest() {
		$this->Product =& ClassRegistry::init('Product');
	}

	function endTest() {
		unset($this->Product);
		ClassRegistry::flush();
	}

}
?>