<?php



App::uses('Controller', 'Controller');


class AppController extends Controller {
    
 	public $components = array(
        'Session',
        'DebugKit.Toolbar',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'moviesessions', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authorize' => array('Controller')
        )
    );

 	public function isAuthorized($user) {
    // Admin can access every action
    if (isset($user['role']) && $user['role'] === 'admin') {
    		return true;
    }
    
    // Default deny
    return false;
	}	

	 public function beforeFilter()
    {
        $this->Auth->allow('login');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }

	
}