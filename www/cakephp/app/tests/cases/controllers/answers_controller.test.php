<?php
/* Answers Test cases generated on: 2011-10-08 20:21:07 : 1318105267*/
App::import('Controller', 'Answers');

class TestAnswersController extends AnswersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AnswersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.answer', 'app.question', 'app.trait', 'app.user', 'app.role');

	function startTest() {
		$this->Answers =& new TestAnswersController();
		$this->Answers->constructClasses();
	}

	function endTest() {
		unset($this->Answers);
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
