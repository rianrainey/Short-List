<?php
/* Traits Test cases generated on: 2011-10-08 20:20:16 : 1318105216*/
App::import('Controller', 'Traits');

class TestTraitsController extends TraitsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TraitsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.trait', 'app.question');

	function startTest() {
		$this->Traits =& new TestTraitsController();
		$this->Traits->constructClasses();
	}

	function endTest() {
		unset($this->Traits);
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
