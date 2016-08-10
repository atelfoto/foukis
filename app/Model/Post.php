<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property Category $Category
 * @property Media $Media
 */
class Post extends AppModel {

public $recursive = -1;

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'slug' => array(
					'rule'       => '/^[a-z0-9\-]+$/',
					'allowEmpty' =>  true,
					'message'    => "L'url isn't valide"
			),
		'name' => array(
					'rule' => 'notEmpty',
					'message'    => "You must enter a title "
			)
	);
	//public $order = 'Post.created DESC';
	/**
	*Permet de générer / récupérer un brouillon
	**/
	public function getDraft($type){
		$post = $this->find('first',array(
			'conditions' => array('online'=> -1,'type' => $type)
			));
		if(empty($post)){
			$this->save(array(
				'type' => $type,
				'online' => -1
				),false);
			$post = $this->read();

		}
		$post['Post']['online'] = 0;
		return $post;
	}

	public function afterFind($data,$primary = false){
		foreach ($data as $k => $d) {
			//if (isset($d['Post']['slug']) && isset($d['Post']['id']) && isset($d['Post']['type'])) {
			if (isset($d['Post']['slug'])  && isset($d['Post']['type'])) {
				$d['Post']['link'] = array(
					'controller'     => Inflector::pluralize($d['Post']['type']),
					'action'         =>'show',
					//'id'             => $d['Post']['id'],
					'slug'           => $d['Post']['slug']
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
		if (empty($this->data['Post']['slug']) && isset($this->data['Post']['slug']) && !empty($this->data['Post']['name']))
			$this->data['Post']['slug'] = strtolower(Inflector::slug($this->data['Post']['name'],'-'));


		return true;
	}

}
