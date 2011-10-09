<?php
/* Scores Test cases generated on: 2011-10-09 18:43:26 : 1318185806*/
App::import('Controller', 'Scores');

class TestScoresController extends ScoresController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ScoresControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.score', 'app.trait', 'app.question', 'app.answer', 'app.user', 'app.role');

	function startTest() {
		$this->Scores =& new TestScoresController();
		$this->Scores->constructClasses();
	}

	function endTest() {
		unset($this->Scores);
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
