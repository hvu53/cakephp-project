<?php
/* Searches Test cases generated on: 2011-06-18 20:06:37 : 1308430177*/
App::import('Controller', 'Searches');

class TestSearchesController extends SearchesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SearchesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.search', 'app.customer', 'app.order', 'app.product', 'app.company', 'app.survey', 'app.review', 'app.sample');

	function startTest() {
		$this->Searches =& new TestSearchesController();
		$this->Searches->constructClasses();
	}

	function endTest() {
		unset($this->Searches);
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