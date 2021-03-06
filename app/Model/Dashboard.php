<?php
App::uses('AppModel', 'Model');
class Dashboard extends AppModel{
public $useTable =false;
 public $validate = array(
 	 	'email' => array(
		 	'rule' => 'email',
		 	'required' => true,
		 	'message' => 'You must enter a valid email address'
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
 		 	$mail = new CakeEmail('smtp'); // en local sinon default en ligne
 			$mail->to($d['email'])
 				 ->from('philippewagner2@sfr.fr')
 			 	 ->subject($d['subject'])
 			 	 ->emailFormat('html')
 			 	 ->template('contact')->viewVars($d);
 			return $mail->send();
 		}else{
 			return false;
 		}
 	}

}
