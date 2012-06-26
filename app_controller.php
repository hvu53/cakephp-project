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
	 var $components = array('Auth','Session','Cookie','Email','DebugKit.Toolbar');//
    function beforeFilter(){
		$this->Cookie->name = 'xamples';
        $this->Cookie->time =  '30 days';// 0 -> delete when browser exits
        $this->Cookie->path = '/';
		//$this->Cookie->domain = 'frogtutoring.com';
        $this->Cookie->domain = false;
        $this->Cookie->secure = false;  //i.e. only sent if using secure HTTPS
        $this->Cookie->key = 'p+I-23qs*&aXvw!';


        $this->Auth->loginAction = array('admin'=>false,'company'=>false,'customer'=>false,'controller' => 'users', 'action' => 'login');
       $this->Auth->authorize = 'controller';
	   //---------need to redirect based on
      $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'queoru');
	  $this->Auth->logoutRedirect = array('controller' => 'products', 'action' => 'index');
    }
    
    function isAuthorized(){
		if(!isset($this->params['prefix']) || $this->params['prefix']=='business')return true;
		if($this->params['prefix']=='customer' && $this->Auth->user('group') == '3')return true;
		if($this->params['prefix']=='company' && $this->Auth->user('group') == '2')return true;
		if($this->params['prefix']=='admin' && $this->Auth->user('group') == '1')return true;
		return false;
    }
    
    function beforeRender(){
		if($this->Session->read('Cart.count')===null){
			$this->Session->write('Cart',array('Samples'=>array(),'Products'=>array(),'count'=>0));
			$count = 0;
		}
       if(!isset($this->params['prefix']))$this->layout = 'default';
	   else if($this->params['prefix']=='business')$this->layout = 'business';
       else if($this->params['prefix']=='customer')$this->layout = 'customer';
       else if($this->params['prefix']=='company')$this->layout = 'company';
       else if($this->params['prefix']=='admin')$this->layout = 'admin';
    }
}
