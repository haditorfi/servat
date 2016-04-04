<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public function beforeFilter() {
	    parent::beforeFilter();
	    // Allow users to register and logout.
	    $this->Auth->allow('register', 'logout');
	}

	public function login() {
		$this->layout = "login";
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Flash->error(__('نام کاربری یا رمز عبور نادرست است.'), 'default', array('class' => 'alert alert-danger'));
	    }
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add_admin() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}
	public function register() {
		$this->layout = "login";
		if ($this->request->is('post')) {
		$this->request->data['User']['status'] = '1';
		$this->request->data['User']['role_id'] = '2';
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash(__('ثبت نام شما با موفقیت انجام شد.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'dashboards','action' => 'index'));
			} else {
				$this->Flash(__('لطفا دوباره امتحان نمایید.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash(__('The user has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The user could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
