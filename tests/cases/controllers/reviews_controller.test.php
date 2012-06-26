<?php
/* Reviews Test cases generated on: 2011-06-18 20:06:31 : 1308430171*/
App::import('Controller', 'Reviews');

class TestReviewsController extends ReviewsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ReviewsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.review', 'app.customer', 'app.order', 'app.product', 'app.company', 'app.survey', 'app.sample', 'app.search');

	function startTest() {
		$this->Reviews =& new TestReviewsController();
		$this->Reviews->constructClasses();
	}

	function endTest() {
		unset($this->Reviews);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>