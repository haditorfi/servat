<?php
App::uses('AppController', 'Controller');
/**
 * Goals Controller
 *
 * @property Goal $Goal
 * @property PaginatorComponent $Paginator
 */
class GoalsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $helpers = array('Html','Form','FileManager.Attach');


	public function attach($id = null) {
		if (!$this->Goal->exists($id)) {
			throw new NotFoundException(__('Invalid demands'));
		}
		if (!$this->request->is('get')) {
			if ($this->Goal->save($this->request->data)) {
	        			$this->Flash->success(__('تصویر با موفقیت ذخیره شد.'), 'default', array('class' => 'alert alert-success'));
			} else {

	       			 $this->Flash->error(__('متاسفانه در ذخیره تصویر مشکل پیش آمد.'), 'default', array('class' => 'alert alert-danger'));
			}
		}

			$options = array('conditions' => array('Goal.' . $this->Goal->primaryKey => $id));
			$goal = $this->request->data = $this->Goal->find('first', $options);
		
		$this->set(compact('goal'));
		$this->set('id',$id);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$options = array('conditions' => array('Goal.id'));
		$this->set('goal', $this->Goal->find('first', $options));
		$this->Goal->recursive = 1;
		$this->set('goals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Goal->exists($id)) {
			throw new NotFoundException(__('Invalid goal'));
		}
		$options = array('conditions' => array('Goal.' . $this->Goal->primaryKey => $id));
		$this->set('goal', $this->Goal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Goal->create();
     			$this->request->data['Goal']['user_id'] = $this->Auth->user('id');
     			$this->request->data['Goal']['status'] = 1;
			if ($this->Goal->save($this->request->data)) {
				$this->Flash(__('The goal has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The goal could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Goal->User->find('list');
		$goalTypes = $this->Goal->GoalType->find('list');
		$this->set(compact('users', 'goalTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Goal->exists($id)) {
			throw new NotFoundException(__('Invalid goal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Goal->save($this->request->data)) {
				$this->Flash(__('The goal has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The goal could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Goal.' . $this->Goal->primaryKey => $id));
			$this->request->data = $this->Goal->find('first', $options);
		}
		$users = $this->Goal->User->find('list');
		$goalTypes = $this->Goal->GoalType->find('list');
		$this->set(compact('users', 'goalTypes'));
		$this->set('id',$id);
		$options = array('conditions' => array('Goal.' . $this->Goal->primaryKey => $id));
		$this->set('goal', $this->Goal->find('first', $options));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Goal->id = $id;
		if (!$this->Goal->exists()) {
			throw new NotFoundException(__('Invalid goal'));
		}
		$this->request->onlyAllow('post','get', 'delete');
		if ($this->Goal->delete()) {
			$this->Flash(__('The goal has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The goal could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
