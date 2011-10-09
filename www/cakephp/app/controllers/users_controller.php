<?php
class UsersController extends AppController {
  
  var $uses = array('Trait', 'Score', 'User', 'Role');
	var $name = 'Users';
	var $helpers = array('Js' => array('Jquery'));
	//var $helpers = array('Html','Javascript');

	function index() {
	  $users = $this->User->find('all');
	  
		//$this->User->recursive = 0;
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
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			var_dump($this->data);
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'user',$user['User']['id']));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$this->loadModel('Questions');
		$questions = $this->Questions->find('all');
		var_dump($questions);

		$this->set(compact('questions'));
		$this->set('user', $this->User->read(null, $id));
	}
	
	function add_questions(){
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
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
		
	  //debug($this->data);
	  
	  if (!empty($this->data)) {
	    // We have arranged traits, so let's query the db
	    //debug($this->data);
	    
	    $a = array();
	    foreach ($this->data as $v) {
	      $a[] = $v;
	    }
	    //debug($a);

	    
	    
	    
	    //$this->loadModel('Trait');
	    //$scores = $this->Score->find('all');
	    //debug($scores);
  	  
  	  //$this->Trait->Behaviors->attach('Containable'); // give me only Trait object
  	  
	    //$traits = $this->Trait->find('all', array(
	      
	    //));
			
      // $sTraits = array();
      // foreach ($traits as $trait) {
      //   $sTraits[] = $trait['Trait']['name']; // add trait name to array stack
      // }
      

	    //debug($sTraits);
	    
      //$score = $this->Score->findAllByTrait('1');

      $users = $this->Score->find('all', array(
          'conditions' => array(
              'Score.trait_id' => $a[0],
            ),
          // 'order' => array($a[0], $a[1], $a[2], $a[3] ),
        ));
        
        //debug($users);
        
	  }
    // else {
    //   $users = $this->User->find('all');
    // }
		//$this->set('users', $this->paginate());
		//debug($score);
		$this->set(compact('users'));
	  
	}

}
