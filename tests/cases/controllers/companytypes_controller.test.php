<?php
/* Companytypes Test cases generated on: 2013-02-23 14:57:24 : 1361649444*/
App::import('Controller', 'Companytypes');

class TestCompanytypesController extends CompanytypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CompanytypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.companytype', 'app.company', 'app.product', 'app.products_company');

	function startTest() {
		$this->Companytypes =& new TestCompanytypesController();
		$this->Companytypes->constructClasses();
	}

	function endTest() {
		unset($this->Companytypes);
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

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
