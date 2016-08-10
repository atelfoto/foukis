<?php
App::uses('AppController','Controller');
/**
* @Controller
*/
class UsersController extends AppController{
	/**
	 * beforeFilter callback
	 *
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow("signup",'login','activate','forgot','password','acceuil');
		 $this->Auth->allow("signup","activate","forgot",'password','login');
	}

	public function add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__("The user has been added"),"flash",array('class'=>"success"));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('This login is already used. Please, Try another.'),'flash',array('class'=>"danger"));
			}
		}
	}

	public function account(){
		$this->layout = 'admin';
		if (!empty($this->request->data)) {
			$this->request->data['User']['id'] = $this->Auth->User('id');
			$this->User->create($this->request->data);
			if($this->User->validates()){
				$this->User->create();
				$this->User->save($this->request->data,true,array('firstname','lastname'));
				if (!empty($this->request->data['User']['avatarf']['temp_name'])) {
					$directory = App.imageBaseUrl. 'avatars' . DS . ceil($this->User->id/1000);
				if(!file_exists($directory))
					mkdir($directory,0777);
				move_uploaded_file($this->request->data['User']['avatarf']['temp_name'], $directory . DS . $this->User->id . '.jpg');
				$this->user->saveField('avatar',1);
				}
				$user = $this->User->read();
				$this->Auth->login($user['User']);
				$this->Session->setFlash(__("Your information is been modified"), "flash", array('class'=>"success"));
			}
		}else{
		$this->User->id= $this->Auth->User('id');
		$this->request->data = $this->User->read();
		}

	}

	// public function login(){
	// 	if (!empty($this->request->data)) {
	// 		if ($this->Auth->login()) {
	// 			$this->Session->setFlash("Vous êtes connecté", "flash", array('class' => 'success'));
	// 			return $this->redirect(array('action'=>'account'));
	// 		}else{
	// 			$this->Session->setFlash("Identifiants incorrecte", "flash", array('class' => 'danger'));
	// 		}
	// 	}
	// }

	public function login(){
		if (!empty($this->request->data)) {
			# Try to log in the user
			if ($this->Auth->login()) {
				if (!empty($this->request->data['User']['remember_me']) && $this->request->data['User']['remember_me'] == 'S') {
					$cookie = array();
					$cookie['username'] = $this->request->data['User']['username'];
					$cookie['password'] = $this->Auth->password($this->request->data['User']['password']);

					# Write cookie ( 30 Days )
					$this->Cookie->write('Auth.User', $cookie, true);
					$this->Cookie->write('Auth.User', '3600');
				}
				$this->Session->setFlash(__("You are connected."), "flash", array('class' => 'success'));
				return $this->redirect(array('action'=>'account'));
			}else{
				$this->Session->setFlash(__("Incorrect password."), "flash", array('class' => 'danger'));
			}
		}
	}

	public function logout(){
		$this->Session->setFlash(__('You are disconnected'),"flash",array('class'=>"success"));
		$this->Auth->logout();
		return $this->redirect('/');
	}

	public function signup(){
		if (!empty($this->request->data)) {
			$this->User->create($this->request->data);
			if($this->User->validates()){
				$token = md5(time(). ' - ' . uniqid());
				$this->User->create(array(
					'username'=> $this->request->data['User']['username'],
					'password'=> $this->Auth->password($this->request->data['User']['password']),
					 'mail'   => $this->request->data['User']['mail'],
					 'token'  => $token
					 ));
					$this->User->save();
					App::uses('CakeEmail','Network/Email');
					$CakeEmail = new CakeEmail('smtp');// à changer par default sur le site en ligne
					$CakeEmail->to($this->request->data['User']["mail"]);
					$CakeEmail->subject('Votre inscription à notre site');
					$CakeEmail->viewVars(
						$this->request->data['User']+
						array(
							'token'=>$token,
							'id'=>$this->User->id
						)
					);
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

	/**
	* permet de refaire un mot de passe oublié
	* @return [type] [description]
	**/
	public function forgot (){
		if(!empty($this->request->data)){
			$user = $this->User->findByMail($this->request->data['User']['mail'],array('id'));
			if(empty($user)){
				$this->Session->setFlash(__("This email address is not associated with any account"),'flash',array('class'=>"danger"));
			}else{
				$token = md5(uniqid().time());
				$this->User->id = $user['User']['id'];
				$this->User->saveField('token', $token);
				App::uses('CakeEmail', 'Network/Email');
				$cakeMail = new CakeEmail('default');
				$cakeMail->to($this->request->data['User']['mail']);
				$cakeMail->subject('Régénération du mot de passe');
				$cakeMail->template('forgot');
				$cakeMail->viewVars(array('token' =>$token,'id'=>$user['User']['id']));
				$cakeMail->emailFormat('text');
				$cakeMail->send();

				$this->Session->setFlash(__("An email was sent to you with instructions to regenerate your password! Please check your span !!"), "flash", array(
					'class'=>'info'));
			}
		}
	}

	public function password($user_id,$token){
		$user = $this->User->find('first',array(
			'fields'     =>array('id'),
			'conditions' => array('id'=> $user_id, 'token'=>$token)
		));
		if(empty($user)){
			$this->Session->setFlash(__("This link does not look good"),'flash',array('class'=>'danger'));
			return $this->redirect(array('action'=>'forgot'));
		}
		if(!empty($this->request->data)){
			$this->User->create($this->request->data);
			if ($this->User->validates()){
				$this->User->create();
				$this->User->save(array(
					'id'=>$user['User']['id'],
					'token'=>'',
					'active'=> 1,
					'password'=> $this->Auth->password($this->request->data['User']['password'])
				));
				$this->Session->setFlash(__("Your password has been changed"), 'flash', array('class'=>'success'));
				return $this->redirect(array('action'=>'account'));
			}
		}
	}

	public function activate($user_id,$token){
		$user = $this->User->find('first',array(
			'fields'     =>array('id'),
			'conditions' => array('id'=> $user_id, 'token'=>$token)
		));
		if(empty($user)){
			$this->Session->setFlash(__("This change link is not good"),'flash',array('class'=>'danger'));
			return $this->redirect('/');
		}
		$this->Session->setFlash(__("Your account has been validated"),'flash',array('class'=>'success'));
		$this->User->save(array(
			'id'     => $user['User']['id'],
			'active' => 1,
			'token'  => ''
			));
		return $this->redirect(array('action'=>'account'));
		//return $this->redirect(array('action'=>'login'));
	}

	public function admin_index(){
		$this->layout = 'admin';
		$d['users'] = $this->Paginate('User');
		$this->set($d);
	}

	public function index(){
		$this->layout = 'admin';
		$d['users'] = $this->Paginate('User');
		$this->set($d);
	}

	public function edit($id=null){
		$this->layout = 'admin';
		if($this->request->is('post') || $this->request->is('put')){
			$d =$this->request->data('User');
			if ($d['password'] != $d['passwordconfirm']) {
				$this->Session->flash(__("Passwords do not match"),'flash',array('class'=>"danger"));
			}else{
				if(empty($d['password']))
					unset($d['password']);
				if($this->User->save($d)){
					$this->Session->setFlash(__("The user has been added"),"flash");
					return $this->redirect(array('action' => '/'));
				}
			}
		}elseif($id){
			$this->User->id = $id;
			$this->request->data = $this->User->read('username,role,id');
		}
		$d= array();
		$d['roles'] = array(
			'admin' => 'admin',
			'member'  => 'membre'
			);
			$this->set($d);
	}

	public function delete($id){
		$this->User->delete($id);
		$this->Session->setFlash(__("the user has been deleted"), "flash",array('class'=>'success') );
		$this->redirect($this->referer());
	}

	public function mailbox(){
		$this->layout="admin";
	}

	public function invoice(){
		$this->layout ='admin';
	}



}


 ?>
