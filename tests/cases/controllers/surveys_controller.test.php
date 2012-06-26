<?php
/* Surveys Test cases generated on: 2011-06-18 20:06:39 : 1308430179*/
App::import('Controller', 'Surveys');

class TestSurveysController extends SurveysController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SurveysControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.survey', 'app.company', 'app.product', 'app.order', 'app.customer', 'app.review', 'app.sample', 'app.search');

	function startTest() {
		$this->Surveys =& new TestSurveysController();
		$this->Surveys->constructClasses();
	}

	function endTest() {
		unset($this->Surveys);
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