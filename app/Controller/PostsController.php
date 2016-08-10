<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PostsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow("index","view","show", "add",'edit',"adminindex","delete",'navbar','acceuil',"services","informations");
		// $this->Breadcrumb->add('Home', '/home/path');
	}
/***
*Request action : Permet d'avoir la liste des contenus pour le menu
**/
	function navbar(){
		$posts = $this->Post->find('all'
			,array(
			//'conditions' => array('online' => 1),
			'fields'     => array('id','slug','name')
			)
			);
		return $posts;
		//return $this->Post->find('all');

	}
	/**
	* index
	**/
public function index() {

	}
/**
*Pemet d'afficher une page
**/
	function show($slug = null){
		if (!$slug)
			throw new NotFoundException("Aucune page ne correspond à cette ID");
		$post = $this->Post->find('first',array(
			'conditions'=> array('Post.slug' =>$slug),
			'recursive'=> 0
			));
		if (empty($post))
			throw new NotFoundException("Aucune page ne correspond à cette ID");
		if ($slug != $post['Post']['slug'])
				$this>redirect($post['Post']['link'],301);
		$d['post']= $post;
		$this->set($d);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'),'flash',array('class'=>'danger'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * index method
 *
 * @return void
 */
	public function adminindex() {
		$this->layout = 'admin';
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'),'flash',array('class'=>'success'));
				return $this->redirect(array('action' => 'adminindex'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'),'flash',array('class'=>'danger'));
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
		// $this->Breadcrumb->add('Index', '/controller/index/path');
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'),'flash',array('class'=>'danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'),'flash',array('class'=>'success'));
				return $this->redirect(array('action' => 'adminindex'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'),'flash',array('class'=>'danger'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->layout='admin';
		// $this->Breadcrumb->add('Index', '/controller/index/path');
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'),'flash',array('class'=>'danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'),'flash',array('class'=>'success'));
				return $this->redirect(array('action' => 'adminindex'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'),'flash',array('class'=>'danger'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
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
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'),'flash',array('class'=>'danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'),'flash',array('class'=>'success'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'),'flash',array('class'=>'danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
