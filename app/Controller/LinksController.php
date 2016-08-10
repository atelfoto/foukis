<?php
App::uses('AppController', 'Controller');
/**
 * Links Controller
 *
 * @property Link $Link
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LinksController extends AppController {

/**
 * beforeFilter callback
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','view','edit','add', 'adminindex');
	}

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $paginate = array(
		'limit'=> 10,
    	'paramType' => 'querystring'
    	);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Link->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$data = $this->Paginator->paginate('Link',array('online'=>1));
		$this->set('links', $data);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Link->exists($id)) {
			throw new NotFoundException(__('Invalid link'));
		}
		$options = array('conditions' => array('Link.' . $this->Link->primaryKey => $id));
		$this->set('link', $this->Link->find('first', $options));
	}

/**
 * adminindex method
 *
 * @return void
 */
	public function adminindex() {
		$this->layout='admin';
		$this->Paginator->settings = $this->paginate;
		$this->Link->recursive = 0;
		$this->set('links', $this->Paginator->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->Link->create();
			if ($this->Link->save($this->request->data)) {
				$this->Session->setFlash(__('The link has been saved.'),"flash",array('class'=>"success"));
				return $this->redirect(array('action' => 'adminindex'));
			} else {
				$this->Session->setFlash(__('The link could not be saved. Please, try again.'),'flash',array('class'=>"danger"));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout='admin';
		if (!$this->Link->exists($id)) {
			throw new NotFoundException(__('Invalid link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Link->save($this->request->data)) {
				$this->Session->setFlash(__('The link has been saved.'),"flash",array('class'=>"success"));
				return $this->redirect(array('action' => 'adminindex'));
			} else {
				$this->Session->setFlash(__('The link could not be saved. Please, try again.'),"flash",array('class'=>"danger"));
			}
		} else {
			$options = array('conditions' => array('Link.' . $this->Link->primaryKey => $id));
			$this->request->data = $this->Link->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Link->id = $id;
		if (!$this->Link->exists()) {
			throw new NotFoundException(__('Invalid link'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Link->delete()) {
			$this->Session->setFlash(__('The link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'adminindex'));
	}
}
