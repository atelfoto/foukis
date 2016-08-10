<?php
App::uses('AppController', 'Controller');
/**
 * Pages Controller
 *
 * @property Page $Page
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PagesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public $uses = array(); // No model

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('adminindex','index','edit','add','show','view','accueil-2',"home","changeLanguage","carrousel");
	}

/***
*Request action : Permet d'avoir la liste des contenus pour le menu
**/
	 function navbar(){
	 	$pages = $this->Page->find('all',array(
	 		'conditions' => array('type'   =>'page','online' => 1),
	 		'fields'     => array('id','slug','name','type')
	 		));
	 	return $pages;
	 }

	/**
	* index
	**/
	// public function index(){
	// 	$this->Page->recursive = 0;
	// 	$this->set('pages', $this->Paginator->paginate());
	// }

	public function index(){

	}
/**
 *change language
 *
 */
	public function changeLanguage($lng) { // Change language method
		if(isset($this->availableLanguages[$lng])) { // If we support this language (see /app/Config/global.php)
			parent::setLang($lng); // call setLang() from AppController
			$this->Session->setFlash(__('The language has been changed to %s', $lng),'flash',array('class'=>'success')); // Send a success flash message
			//$this->Session->setFlash(__('The language has been changed to %s', $this->availableLanguages[$lng]),'flash',array('class'=>'success')); // Send a success flash message
		} else {
			throw new NotFoundException(__('Language %s is not supported', $lng),'flash',array('class'=>'danger')); // Throw a not found exception
		}

		$this->redirect($this->referer()); // redirect the user to the last page (referer)
	}

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}

	public function carrousel()	{
		$carrousels = $this->Carrousel->find('all',array(
			'conditions'=>array('online'=>1),
			'fields'     => array('id','slug','name','title','button')
			));
		return $carrousels;
	}

/**
*Permet d'afficher une page
**/
	function show($id = null,$slug = null){
		if (!$id)
			throw new NotFoundException(__("No pages were found for this ID"),'flash',array('class'=>'danger'));
		$page = $this->Page->find('first',array(
			'conditions'=> array('id' =>$id, 'type'=>'page')
			));
		if (empty($page))
			throw new NotFoundException("No pages were found for this ID");
		if ($slug != $page['Page']['slug'])
				$this>redirect($page['Page']['link'],301);
		$d['page']=current($page);
		$this->set($d);
	}
/**
 * adminindex method
 *
 * @return void
 */
	public function adminindex() {
		$this->layout ="admin";
		$this->Page->recursive = 0;
		$this->set('pages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Page->exists($id)) {
			throw new NotFoundException(__('Invalid page'),'flash',array('class'=>'danger'));
		}
		$options = array('conditions' => array('Page.' . $this->Page->primaryKey => $id));
		$this->set('page', $this->Page->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'admin';
		$this->Page->locale =Configure::read('Config.languages');
		if ($this->request->is('post')) {
			$this->Page->create();
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash(__('The page has been saved.'),'flash',array('class'=>'success'));
				return $this->redirect(array('action' => 'adminindex'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.'),'flash',array('class'=>'danger'));
			}
		}
		$users = $this->Page->User->find('list');
		$this->set(compact('users'));
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
		$this->Page->locale =Configure::read('Config.languages');
		if (!$this->Page->exists($id)) {
			throw new NotFoundException(__('Invalid page'),'flash',array('class'=>'danger'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash(__('The page has been saved.'),'flash',array('class'=>'success'));
				return $this->redirect(array('action' => 'adminindex'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.'),'flash',array('class'=>'danger'));
			}
		} else {
			$options = array('conditions' => array('Page.' . $this->Page->primaryKey => $id));
			$this->request->data = $this->Page->find('first', $options);
		}
		$users = $this->Page->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Page->id = $id;
		if (!$this->Page->exists()) {
			throw new NotFoundException(__('Invalid page'),'flash',array('class'=>'danger'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Page->delete()) {
			$this->Session->setFlash(__('The page has been deleted.'),'flash',array('class'=>'success'));
		} else {
			$this->Session->setFlash(__('The page could not be deleted. Please, try again.'),'flash',array('class'=>'danger'));
		}
		return $this->redirect(array('action' => 'adminindex'));
	}
}
