<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Js' => array('Jquery'));
	//var $helpers = array('Html','Javascript');

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function profile_form ($id = null) {
	  
	}
	
	function find_applicant ($id = null) {
	  $this->User->recursive = 0;
	  
	  $this->loadModel('Trait');
	  $traits = $this->Trait->find('all');
	  //var_dump($traits);
	  
		//$users = $this->paginate('User');// $this->set(compact('users', 'traits'), $this->paginate());
		$this->set(compact('traits'));
		
	}
	
	function search ($id = null) {
	  //$this->User->Behaviors->attach('Containable');
		
	  //debug($this->data);
	  
	  if (!empty($this->data)) {
	    // We have arranged traits, so let's query the db
	    // debug($this->data);
	    
	    $users = $this->User->find('all', array(
	        'conditions' => array(
	            'User.role_id' => 2,
	           // 'Order By' => 
	          ),
	      ));
	  }
	  else {
	    $users = $this->User->find('all');
	  }
		//$this->set('users', $this->paginate());
		$this->set(compact('users'));
	  
	}
}
