<?php
App::uses('AppController', 'Controller');
/**
 * Carrousels Controller
 *
 * @property Carrousel $Carrousel
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CarrouselsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	/**
	 * beforeFilter callback
	 *
	 * @return void
	 */
		public function beforeFilter() {
			parent::beforeFilter();
			 $this->Auth->allow(array('index',"show"));
		}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'admin';
		$this->Carrousel->recursive = 0;
		$this->set('carrousels', $this->Paginator->paginate());
	}

	public function show()	{
		$carrousels = $this->Carrousel->find('all',array(
			'conditions'=>array('online'=>1),
			'fields'     => array('id','slug','name','title','button')
			));
		return $carrousels;
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Carrousel->exists($id)) {
			throw new NotFoundException(__('Invalid carrousel'));
		}
		$options = array('conditions' => array('Carrousel.' . $this->Carrousel->primaryKey => $id));
		$this->set('carrousel', $this->Carrousel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Carrousel->create();
			if ($this->Carrousel->save($this->request->data)) {
				$this->Session->setFlash(__('The carrousel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrousel could not be saved. Please, try again.'));
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
		$this->layout = 'admin';
		if (!$this->Carrousel->exists($id)) {
			throw new NotFoundException(__('Invalid carrousel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Carrousel->save($this->request->data)) {
				$this->Session->setFlash(__('The carrousel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrousel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Carrousel.' . $this->Carrousel->primaryKey => $id));
			$this->request->data = $this->Carrousel->find('first', $options);
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
		$this->Carrousel->id = $id;
		if (!$this->Carrousel->exists()) {
			throw new NotFoundException(__('Invalid carrousel'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Carrousel->delete()) {
			$this->Session->setFlash(__('The carrousel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The carrousel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
