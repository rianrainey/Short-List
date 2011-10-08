<?php
/* Answer Test cases generated on: 2011-10-08 20:21:06 : 1318105266*/
App::import('Model', 'Answer');

class AnswerTestCase extends CakeTestCase {
	var $fixtures = array('app.answer', 'app.question', 'app.trait', 'app.user', 'app.role');

	function startTest() {
		$this->Answer =& ClassRegistry::init('Answer');
	}

	function endTest() {
		unset($this->Answer);
		ClassRegistry::flush();
	}

}
