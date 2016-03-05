<?php

App::uses('Controller', 'Controller');


class AppController extends Controller {
    public $components = array(
     'Flash',
     'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => '',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => '',
                'action' => 'index'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
               'authorize' => array('Controller') 
        )
    );
	
	public function isAuthorized($user) {
	    // Admin can access every action
	    if (isset($user['role_id']) && $user['role_id'] === '1' || $user['role_id'] === '2') {
	        return true;
	    }

	    // Default deny
	    return false;
	}

    public function beforeFilter() {
        $name=$this->Auth->user('name');
        $family=$this->Auth->user('family');
        $this->set('profile',$name .' '.$family);
        $this->Auth->allow('display');
    }
}