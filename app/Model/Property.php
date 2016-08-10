<?php
App::uses('AppModel', 'Model');
/**
 * Property Model
 *
 * @property State $State
 * @property Area $Area
 * @property Status $Status
 * @property Type $Type
 */
class Property extends AppModel {

public $findMethods = array('search' => true);

protected function _findSearch($state, $query, $results = array()) {
  if ($state === 'before') {
    $searchQuery = Hash::get($query, 'searchQuery');
    $searchConditions = array(
      'or' => array(
        "{$this->alias}.name LIKE" => '%' . $searchQuery . '%',
        "{$this->alias}.state_id LIKE" => '%' . $searchQuery . '%'
      )
    );
    $query['conditions'] = array_merge($searchConditions, (array)$query['conditions']);
    return $query;
  }
  return $results;
}

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 *  actsAs
 */
	 public $actsAs = array(
     // 'Containable',
     'Search.Searchable',
        'Media.Media' => array(
            // Ici vous pouvez spécifier des options (facultative)ne fonctionne pas
         //  'path' => 'img/Property/%id/%f"'
       //    'path' => 'img/uploads/%id/%y/%m/%f"'
        )
    );
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Your custom message here',
				'allowEmpty' => true,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		//'content' => array(
		//	'maxLength' => array(
		//		'rule' => array('maxLength'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		//	),
		//),
		'state_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'area_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'type_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'size' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price' => array(
			'money' => array(
				'rule' => array('money','left'),
				'message' => 'Thank you to submit a valid monetary amount.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		// 'online' => array(
		// 	'boolean' => array(
		// 		'rule' => array('boolean'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		//'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
		'modified' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'date no valid',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bedrooms' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'number of bed',
				'allowEmpty' => true,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dateYear' => array(
			'date' => array(
				'rule' => array('date','y'),
				'message' => 'date no valid',
				'allowEmpty' => true,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	//	'level' => array(
	//		'notEmpty' => array(
	//		//	'rule' => array('numeric'),
	//		//	'message' => 'Your custom message here',
	//			'allowEmpty' =>true,
	//			'required' => false,
	//			//'last' => false, // Stop validation after this rule
	//			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	//		),
	//	),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Area' => array(
			'className' => 'Area',
			'foreignKey' => 'area_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Status' => array(
			'className' => 'Status',
			'foreignKey' => 'status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Type' => array(
			'className' => 'Type',
			'foreignKey' => 'type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Characteristics' => array(
			'className' => 'Characteristics',
			'foreignKey' => 'characteristics_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $filterArgs = array(
	  'name' => array(
	    'field' => 'Property.id2',
	    'type' => 'like',
    	'type_id' => array(
    	'field' => 'Type.name',
    	'type' => 'like'
  ),
	  )
	  //,
	  // 'packages_fragile_count' => array(
	  //   'field' => 'Category.packages_fragile_count >=',
	  //   'type' => 'value'
	  // )
	);

// protected function _findSearch($state, $query, $results = array()) {
// 	if ($state === 'before') {
// 		$searchQuery = Hash::get($query, 'searchQuery');
// 		$searchConditions = array(
// 			'or' => array(
// 				"{$this->alias}.id2 LIKE" => '%' . $searchQuery . '%'//,
// 				//"{$this->alias}.address LIKE" => '%' . $searchQuery . '%'
// 			)
// 		);
// 		$query['conditions'] = array_merge($searchConditions, (array)$query['conditions']);
// 		return $query;
// 	}
// 	return $results;
// }

}
