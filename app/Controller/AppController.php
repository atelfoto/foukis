<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $helpers = array(//plugin Boostcake pour paginator
		'Form' 	   => array('className' => 'BoostCake.BoostCakeForm'),
		'Html'     => array('className' => 'BoostCake.BoostCakeHtml'),
	    'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
	    'Media.Media',
	    //'Date',
	    'Image'
	    );

	public $components = array(
		//'DebugKit.Toolbar',
		'Session',
		'Cookie',
		'RequestHandler',
		'Auth' =>array(
			'authenticate'=>array(
					'Form'=>array(
						'scope'=>array('User.active' => 1)
		            )
				)
			)
		);

/**
 * beforeFilter callback
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->loginAction = array('controller'=>'users','action'=>'login','admin'=>false);
		if($this->Session->check('Config.language')) { //  Vérification pour la session de la langue existante
			$this->language = $this->Session->read('Config.language'); // Lire langue existante
		} else {
			$this->language = Configure::read('defaultLanguage'); // Aucune session language => get langue par défaut du fichier de configuration
		}
		$this->setLang($this->language); // appeler la méthode protégée setlang avec le shortcode lang
		$this->set('language',$this->language); //  envoyer $ this-> valeur de la langue à la vue
		$this->availableLanguages = Configure::read('availableLanguages'); //   obtenir les langues disponibles à partir du fichier de configuration
		$this->set('availableLanguages', $this->availableLanguages); // send $this->availableLanguages value to the view
		if(isset($this->request->params['prefix'])&& $this->request->params['prefix']== 'admin'){
			if ($this->Auth->user("role") !='admin') {
				throw new NotFoundException();
			}
		}
		if ($this->RequestHandler->isAjax()){
	 		   $this->layout = null;
	 	}
	}

	protected function setLang($lang) { // protected method used to set the language
 		$this->Session->write('Config.language', $lang); // write our language to session
        Configure::write('Config.language', $lang); // tell CakePHP that we're using this language
 	}

	public function isAuthorized($user) {
    // Admin peut accéder à toute action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    	}
    	// Refus par défaut
    	return false;
	}

/**
* media
**/
	public function canUploadMedias($ref,$ref_id){
		return true;

	}
}
