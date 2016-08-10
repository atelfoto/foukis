<?php
App::uses('AppModel', 'Model');
class User extends AppModel {

	public $validate = array(
		'username' => array(
			'alpha'=>array(
				'rule' => '/^[a-z0-9A-Z]*$/',
				'message' => "Your user isn't invalid"
			),
			'unique'=>array(
				'rule'=> 'isUnique',
				'message'=> 'This username is already used'
				),
            'between' => array(
                'rule'    => array('between', 5, 15),
                'message' => 'Between 5 and 15 characters'
            )
		),
		'mail' => array(
			'mail' =>array(
				'rule'=> 'email',
				'message' => 'You must enter a valid email '
			),
			'uniq'=>array(
				'rule'=> 'isUnique',
				'message'=> 'This email is already used'
			)
		),
        'password' => array(
            'rule'    => array('minLength', '8'),
            'message' => '8 characters minimum'
        ),
		'password2' => array(
			'rule' => array( 'identicalFields'),
			'message' => 'Confirm your password'
		 ),
		 'avatarf'=>array(
		 	'rule'=>'isjpg',
		 	'message'=> 'Vous devez envoyer un jpg',// verifier!!!
		 	)
	);

	/**
	* fonctions d'identification du 2° mot de passe identique
	* au premier
	**/
	public function identicalFields($check,$limit){
		$field = key($check);//verifier si correct sinon prendre la seconde
		return $check[$field]== $this->data['User']['password'];
		// return $check['password2']== $this->data['User']['password'];

	}



	 public function isjpg($check,$limit){
	 	$field = key($check);
	 	$filename = $check[$field]['name'];
	 	if(empty($filename)){
	 		return true;
	 	}
	 	$info = pathinfo($filename);
	 	return strtolower($info['extension'])=='jpg';
	 }

	/**
	 * afterFind callback
	 *
	 * @param $results array
	 * @param $primary boolean
	 * @return mixed
	 */
		public function afterFind($results, $primary = false) {
			foreach ($results as $k => $result) {
				if (isset($result[$this->alias]['avatar']) && isset($result[$this->alias]['id'])
					) {
					$results[$k][$this->alias]['avatari']= 'avatars/' .ceil($result[$this->alias]['id']/1000) . '/' . $result[$this->alias]['id'] .'.jpg';
				}
			}
			return $results;
		}
    // public function afterFind($results, $primary = false){
    //     foreach($results as $k => $result) {
    //         if(isset($result[$this->alias])){
    //             $data = $result[$this->alias];
    //             if(isset($data['username']) && $data['username'] != null){
    //                 $results[$k]['User']['username'] = $data['username'];
    //             }
    //             if(isset($data['mail']) && $data['mail'] != null){
    //                 $results[$k]['User']['avatari'] = 'http://www.gravatar.com/avatar/' . md5($data['mail']) . '?size=150';
    //                 $results[$k]['User']['avatar'] = 1;
    //             }
    //         }
    //     }
    //     return $results;
    // }


}
 ?>


