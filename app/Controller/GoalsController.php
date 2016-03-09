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

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Goal->recursive = 0;
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
		$this->request->onlyAllow('post', 'delete');
		if ($this->Goal->delete()) {
			$this->Flash(__('The goal has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The goal could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
