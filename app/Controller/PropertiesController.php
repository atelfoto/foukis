<?php
App::uses('AppController', 'Controller');
/**
 * Properties Controller
 *
 * @property Property $Property
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PropertiesController extends AppController {
/**
 * beforeFilter callback
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow("index","view","add",'edit',"adminindex","delete","media.media","search","ResidentialSearch","ResidentialSearchindex", "invoiceprint");
	}


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','Search.Prg');


public function search() {
	$this->layout = 'admin';
  if ($this->request->is('put') || $this->request->is('post')) {
    // poor man's Post Redirect Get behavior
    return $this->redirect(array(
      '?' => array(
        'q' => $this->request->data('Property.searchQuery')
      )
    ));
  }
  $this->Property->recursive = 0;
  $searchQuery = $this->request->query('q');
  $this->Paginator->settings = array(
    'Property' => array(
      'findType' => 'search',
      'searchQuery' => $searchQuery
    )
  );
  $this->set('properties', $this->Paginator->paginate());
  $this->set('searchQuery', $searchQuery);
  $this->render('adminindex');
}

/**
 * Recherche id
 */
	public function index() {
	  $this->Property->recursive = 0;
	  $this->Prg->commonProcess(null, array(
	    'paramType' => 'querystring'
	  ));
	  $this->Paginator->settings = array(
	    'Property' => array(
	      'paramType' => 'querystring',
	      'conditions' => $this->Property->parseCriteria($this->Prg->parsedParams())
	    )
	  );
	  $this->set('properties', $this->Paginator->paginate('Property',array(
	  		'online'=>1)));
	}
	/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Property->recursive = 1;//verifier si posibilité de descendre à 0
		if (!$this->Property->exists($id)) {
			throw new NotFoundException(__('Invalid property'),'flash',array('class'=>"danger"));
		}
		$options = array('conditions' => array('Property.' . $this->Property->primaryKey => $id));
		$this->set('property', $this->Property->find('first', $options));
	}
	public function ResidentialSearch (){
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

	public function ResidentialSearchindex(){
			  $this->Property->recursive = 0;
	   $this->Prg->commonProcess(null, array(
	     'paramType' => 'querystring'
	   ));
	   $this->Paginator->settings = array(
	     'Property' => array(
	       'paramType' => 'querystring',
	       'conditions' => $this->Property->parseCriteria($this->Prg->parsedParams())
	     )
	   );
	 $this->set('properties', $this->Paginator->paginate());

	}

	public function adminindex() {
		$this->layout = 'admin';
		$this->Property->recursive = 0;
		$this->Paginator->settings = array(
			'Property' => array(
				'paramType' => 'querystring',
				'limit' => 10,
				'order' => array(
					'property.name' => 'asc'
					)
				)
			);
		$this->set('properties', $this->Paginator->paginate());
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
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

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout= 'admin';
		if (!$this->Property->exists($id)) {
			throw new NotFoundException(__('Invalid property'),'flash',array('class'=>"success"));
		}
		if ($this->request->is(array('post', 'put'))) {
			/* Variable $compteur pour compter (count) les fichiers lister ($files) dans le dossier */
			$files = glob("img/property/$id/*.jp*g");
			$compteur = count($files);
			$diviser = 2;
			$nbimages = $compteur / $diviser;
			$this->Property->set(array(
    		'mediaQuantities' => $nbimages));
			if ($this->Property->save($this->request->data)) {
				$this->Session->setFlash(__('The property has been saved.'),'flash',array('class'=>"success"));
				return $this->redirect(array('action' => 'adminindex'));
			} else {
				$this->Session->setFlash(__('The property could not be saved. Please, try again.'),'flash',array('class'=>"danger"));
			}
		} else {
			$options = array('conditions' => array('Property.' . $this->Property->primaryKey => $id));
			$this->request->data = $this->Property->find('first', $options);
		}
		$states = $this->Property->State->find('list');
		$areas = $this->Property->Area->find('list');
		$statuses = $this->Property->Status->find('list');
		$types = $this->Property->Type->find('list');
		$this->set(compact('states', 'areas', 'statuses', 'types'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Property->id = $id;
		if (!$this->Property->exists()) {
			throw new NotFoundException(__('Invalid property'),'flash',array('class'=>"danger"));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Property->delete()) {
			$this->Session->setFlash(__('The property has been deleted.'),'flash',array('class'=>"success"));
		} else {
			$this->Session->setFlash(__('The property could not be deleted. Please, try again.'),'flash',array('class'=>"danger"));
		}
		return $this->redirect(array('action' => 'adminindex'));
	}

	/**
	* wizard
	**/
	public function wizard(){
		$this->layout='admin';
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

	public function invoiceprint($id = null) {
		$this->Property->recursive = 1;//verifier si posibilité de descendre à 0
		if (!$this->Property->exists($id)) {
			throw new NotFoundException(__('Invalid property'),'flash',array('class'=>"danger"));
		}
		$options = array('conditions' => array('Property.' . $this->Property->primaryKey => $id));
		$this->set('property', $this->Property->find('first', $options));
	}

}
