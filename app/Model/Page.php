<?php
App::uses('AppModel', 'Model');
/**
 * Page Model
 *
 * @property User $User
 */
class Page extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	 // public $actsAs = array(
	 // 	'Translate'=>array(
	 // 		'name'=>'_name',
	 // 		'content'=>"_content"
	 // 		)
	 // 	);
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'slug' => array(
					'rule'       => '/^[a-z0-9\-]+$/',
					'allowEmpty' =>  true,
					'message'    => "This url isn't valide"
			),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => ' You must specify a title',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	/**
	*Permet de générer / récupérer un brouillon
	**/
	public function getDraft($type){
		$page = $this->find('first',array(
			'conditions' => array('online'=> -1,'type' => $type)
			));
		if(empty($page)){
			$this->save(array(
				'type' => $type,
				'online' => -1
				),false);
			$page = $this->read();
		}
		$page['Page']['online'] = 0;
		return $page;
	}

	public function afterFind($data,$primary = false){
		foreach ($data as $k => $d) {
			if (isset($d['Page']['slug']) && isset($d['Page']['id']) && isset($d['Page']['type'])) {
				$d['Page']['link'] = array(
					'controller'     => Inflector::pluralize($d['Page']['type']),
					'action'         =>'show',
					'id'             => $d['Page']['id'],
					'slug'           => $d['Page']['slug']
					);
			}
			$data[$k] =$d;
		}
		return $data;
	}
 /**
 * beforeSave callback
 *
 * @param $options array
 * @return boolean
 */
	public function beforeSave($options= array()) {
		if (empty($this->data['Page']['slug']) && isset($this->data['Page']['slug']) && !empty($this->data['Page']['name']))
			$this->data['Page']['slug'] = strtolower(Inflector::slug($this->data['Page']['name'],'-'));
		return true;
	}

}
