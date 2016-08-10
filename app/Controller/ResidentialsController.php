<?php
App::uses('AppController', 'Controller');
class ResidentialsController extends AppController{
	public $uses = array('Property');
 	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index',"search");
	}

	public function index(){
		$this->Property->recursive = 0;
		$d['property'] = current($this->Property->find('first'));
		$d['properties']= $this->Property->find('all');
		$this->set($d);
	}
	public function search(){
		if ($this->request->is('post')) {
			$this->Property->create();
			if ($this->Property->save($this->request->data)) {
				$this->Session->setFlash(__('The property has been saved.'),'flash',array('class'=>"success"));
				return $this->redirect(array('action' => 'adminindex'));
			} else {
				$this->Session->setFlash(__('The property could not be saved. Please, try again.'),'flash',array('class'=>"danger"));
			}
		}
		$states = $this->Property->State->find('list');
		$areas = $this->Property->Area->find('list');
		$statuses = $this->Property->Status->find('list');
		$types = $this->Property->Type->find('list');
		$this->set(compact('states', 'areas', 'statuses', 'types'));
	}
}
