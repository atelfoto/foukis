<?php
class InformationsController extends AppController{
	/**
	 * beforeFilter callback
	 *
	 * @return void
	 */
		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow(array('index'));
		}


	function index(){

	}

}
