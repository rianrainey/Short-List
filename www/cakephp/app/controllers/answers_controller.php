<?php
class AnswersController extends AppController {

	var $name = 'Answers';
	var $uses = array('Score', 'Answer');

	function index() {
		$this->Answer->recursive = 0;
		$this->set('answers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid answer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('answer', $this->Answer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
//			pr($this->data);
			$userid;
			$answers = array();
			$count = 0;
			$success;
			$total = 0;

			$this->loadModel('Trait');
			$traits = $this->Trait->find('all');
			$scores = array();

			foreach($this->data['User'] as $key => $answer){
				if($key == 'id'){
					$userid = $answer;
//					pr($answer);
				}
				else{
//					pr($key);
					list($questionid,$traitid) = split('-', $key);
					$this->Answer->create();
				pr($traitid);
					$total = $answer;
					$tempVal = 0;
					if(!empty($scores[$traitid])){
						$tempVal = $scores[$traitid];
					}
					if(!empty($tempVal)){
						$total = $total + $tempVal;
					}
					$scores[$traitid] = $total;
					
					if ($this->Answer->save(array('Answer' => array('question_id' => $questionid, 'value'=>$answer, 'user_id' => $userid)))) {
						$this->Session->setFlash(__('The answer has been saved', true));
						$success = true;
					} else {
						$this->Session->setFlash(__('The answer could not be saved. Please, try again.', true));
					}
				}
				$count = $count + 1;
			}
			pr($scores);
			foreach($scores as $traitkey => $score){
				$this->Score->create();
				if($this->Score->save(array('Score' => array('trait_id' => $traitkey, 'value'=> $score, 'user_id' => $userid)))){
				}
			}
			if($success == true){
				$this->redirect(array('action' => '../users','view',$userid));
			}
		}
		$questions = $this->Answer->Question->find('list');
		$users = $this->Answer->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid answer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Answer->save($this->data)) {
				$this->Session->setFlash(__('The answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Answer->read(null, $id);
		}
		$questions = $this->Answer->Question->find('list');
		$users = $this->Answer->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Answer->delete($id)) {
			$this->Session->setFlash(__('Answer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Answer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
