<?php
/* Score Test cases generated on: 2011-10-09 18:42:24 : 1318185744*/
App::import('Model', 'Score');

class ScoreTestCase extends CakeTestCase {
	var $fixtures = array('app.score', 'app.trait', 'app.question', 'app.answer', 'app.user', 'app.role');

	function startTest() {
		$this->Score =& ClassRegistry::init('Score');
	}

	function endTest() {
		unset($this->Score);
		ClassRegistry::flush();
	}

}
