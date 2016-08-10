<?php

class ServicesController extends AppController{

	//$this->Auth->allow('index');
/**
 * beforeFilter callback
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}



	// function index(){

	// }

}
