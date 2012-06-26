<?php
/* Order Test cases generated on: 2011-06-18 20:06:25 : 1308430165*/
App::import('Model', 'Order');

class OrderTestCase extends CakeTestCase {
	var $fixtures = array('app.order', 'app.customer', 'app.review', 'app.sample', 'app.search', 'app.product');

	function startTest() {
		$this->Order =& ClassRegistry::init('Order');
	}

	function endTest() {
		unset($this->Order);
		ClassRegistry::flush();
	}

}
?>