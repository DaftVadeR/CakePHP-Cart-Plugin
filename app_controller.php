<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	var $components = array('Security', 'Session', 'Auth'=>array('logoutRedirect'=>'/', 'fields'=>array('username'=>'email', 'password'=>'password')), 'RequestHandler');
	var $helpers = array('Form', 'Html', 'Session');
    
    function redirect($url = null, $status = null, $exit = true) {
		if (defined('CAKE_UNIT_TEST') && CAKE_UNIT_TEST) {
			$old = error_reporting(E_USER_NOTICE);
			trigger_error('redirect:'.Router::url($url, true), E_USER_NOTICE);
			error_reporting($old);
		} else {
			parent::redirect($url, $status, $exit);
		}
	}
    
    function cakeError($method, $messages = array()) {
		if (defined('CAKE_UNIT_TEST') && CAKE_UNIT_TEST) {
			$old = error_reporting(E_USER_NOTICE);
			trigger_error($method, E_USER_NOTICE);
			error_reporting($old);
			$this->autoRender = false;
			$this->render(false, 'error');
		} else {
			parent::cakeError($method, $messages);
		}
	}
}
