<?php
/* Companies Test cases generated on: 2011-06-18 20:06:18 : 1308430158*/
App::import('Controller', 'Companies');

class TestCompaniesController extends CompaniesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CompaniesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.company', 'app.product', 'app.survey');

	function startTest() {
		$this->Companies =& new TestCompaniesController();
		$this->Companies->constructClasses();
	}

	function endTest() {
		unset($this->Companies);
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