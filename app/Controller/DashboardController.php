<?php
class DashboardController extends AppController{
	public $uses= array('User','Property','Link','Post');
	public $components = array ('Security');
	function index(){
		$this->layout='admin';
		$this->set('users_count', $this->User->find('count'));
		$this->set('properties_count', $this->Property->find('count'));
		$this->set('links_count', $this->Link->find('count'));
		$this->set('posts_count', $this->Post->find('count'));
		if (!empty($this->request->data)) {

			if($this->Dashboard->validates()){
debug($this->request->data);die();
					App::uses('CakeEmail','Network/Email');
					$CakeEmail = new CakeEmail('smtp');// à changer par default sur le site en ligne
					$CakeEmail->to($email);
					$CakeEmail->subject('Votre inscription à notre site');
					$CakeEmail->emailFormat('text');
					$CakeEmail->template('signup');
					$CakeEmail->send();
					$this->Session->setFlash(__("Thank you you are registered mail sent to you to confirm your compte.Veuillez check your spam in case."),
						'flash',array('class'=>'success'));
			}else{
				$this->Session->setFlash(__("Thank you to correct your mistakes"), 'flash', array('class'=>'danger'));
			}
		}



	}

}
