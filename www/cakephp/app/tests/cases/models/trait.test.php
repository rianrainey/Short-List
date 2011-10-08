<?php
/* Trait Test cases generated on: 2011-10-08 20:20:09 : 1318105209*/
App::import('Model', 'Trait');

class TraitTestCase extends CakeTestCase {
	var $fixtures = array('app.trait', 'app.question');

	function startTest() {
		$this->Trait =& ClassRegistry::init('Trait');
	}

	function endTest() {
		unset($this->Trait);
		ClassRegistry::flush();
	}

}
