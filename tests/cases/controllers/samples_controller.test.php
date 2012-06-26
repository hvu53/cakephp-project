<?php
/* Samples Test cases generated on: 2011-06-18 20:06:34 : 1308430174*/
App::import('Controller', 'Samples');

class TestSamplesController extends SamplesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SamplesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sample', 'app.customer', 'app.order', 'app.product', 'app.company', 'app.survey', 'app.review', 'app.search');

	function startTest() {
		$this->Samples =& new TestSamplesController();
		$this->Samples->constructClasses();
	}

	function endTest() {
		unset($this->Samples);
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