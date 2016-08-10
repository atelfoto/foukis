<?php
 class Contact extends AppModel {

 	public $useTable =false;
 	 public $validate = array(
 	 	'name'=> array(
 	 		'rule' => 'notEmpty',
 	 		'required' => true,
 	 		'message'=> 'you must enter your name',
            'between' => array(
                'rule'    => array('between', 5, 15),
                'message' => 'Between 5 to 15 characters'
            )
 	 	),
 	 	'email' => array(
		 	'rule' => 'email',
		 	'required' => true,
		 	'message' => 'You must enter a valid email address'
		 	),
 	 	'phone' => array(
		 	'rule' => 'numeric',
		 	'required' => false,
		 	'message' => '',
 			"allowEmpty"=>true,
		),
 	 	'mobile' => array(
		 	'rule' => 'numeric',
		 	'required' => true,
		 	'message' => 'You must enter a numero mobile',
 			"allowEmpty"=>true,
		),
		 'message' => array(
		 	'rule' => 'notEmpty',
		 	'required' => true,
		 	'message' => 'You must enter your message'
		 	),
		 'subject' => array(
		 	'rule' => 'notEmpty',
		 	'required' => true,
		 	'message' => 'You must enter your subject'
		 	)
 	 	);

 	public function send($d){
 		$this->set($d);
 		if ($this->validates()) {
 		 	App::uses('CakeEmail','Network/Email');
 		 	//$mail = new CakeEmail();//en ligne
 		 	$mail = new CakeEmail('smtp'); // en local
 			$mail->to('philippewagner2@sfr.fr')
 			 	 ->from($d['email'])
 			 	 ->subject($d['subject'])
 			 	 ->emailFormat('html')
 			 	 ->template('contact')->viewVars($d);
 			return $mail->send();
 		}else{
 			return false;
 		}

 	}


 }
