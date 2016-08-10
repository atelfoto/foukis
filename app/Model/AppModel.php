<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	public $recursive = -1;// verifier dans la doc??
	public $actsAs = array('Containable');

	public function sizeimg($check, $whidth, $height, $limit){
		$field= key($check);
		$value=$check[$fields];
		if (empty($value['tmp_name'])) {
			return true;
		}
		$file=pathinfo(strtolower($value['name']));
		if (!in_array($file['extension'], array('jpg','jpeg','png'))) {
			return false;

		}
		$size = getimagesize($value['tmp_name']);
		return $size[0]> $whidth && $size[1]> $height;
		die();

	}
}
