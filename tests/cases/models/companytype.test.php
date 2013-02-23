<?php
/* Companytype Test cases generated on: 2013-02-23 14:56:35 : 1361649395*/
App::import('Model', 'Companytype');

class CompanytypeTestCase extends CakeTestCase {
	var $fixtures = array('app.companytype', 'app.company', 'app.product', 'app.products_company');

	function startTest() {
		$this->Companytype =& ClassRegistry::init('Companytype');
	}

	function endTest() {
		unset($this->Companytype);
		ClassRegistry::flush();
	}

}
