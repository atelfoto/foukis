<?php
 class Offering extends AppModel {

 	public $useTable =false;
 	 public $validate = array(
 	 	'name'=> array(
 	 		'rule' => 'notEmpty',
 	 		'required' => true,
 	 		'message'=> 'You must enter your name',
            'between' => array(
                'rule'    => array('between', 5, 15),
                'message' => 'Between 5 to 15 characters'
            )
 	 		),
 	 	'phone' => array(
		 	'rule' => 'numeric',
		 	'required' => true,
		 	'message' => 'You must enter a numero telephone valid'
		 	),
 	 	'mobile' => array(
		 	'rule' => 'numeric',
		 	'required' => true,
		 	'message' => 'You must enter a numero mobile valide'
		 	),
 	 	'email' => array(
		 	'rule' => 'email',
		 	'required' => true,
		 	'message' => 'You must enter your a Email valid'
		 	),
		 'size' => array(
		 	'rule' => 'notEmpty',
		 	'required' => true,
		 	'message' => 'You must enter your area'
		 	),
		 'property_id' => array(
		 	'rule' => 'notEmpty',
		 	'required' => true,
		 	'message' => 'You must enter your  type of property'
		 	),
		 'price' => array(
		 	'rule' => 'notEmpty',
		 	'required' => true,
		 	'message' => 'You must enter a price'
		 	),

		 'address' => array(
		 	'rule' => 'notEmpty',
		 	'required' => true,
		 	'message' => 'You must enter your area a adress'
		 	),
		 'message' => array(
		 	'rule' => 'notEmpty',
		 	'required' => true,
		 	'message' => 'You must enter your area a  message'
		 	),
		 'gender'=>array(
		 	'rule'=>'notEmpty',
		 	'required'=>true,
		 	'message'=>'Please select one of these options.'
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
 			 	 ->subject('Devis')
 			 	 ->emailFormat('html')
 			 	 ->template('offering')->viewVars($d);
 			return $mail->send();
 		}else{
 			return false;
 		}

 	}


 }
