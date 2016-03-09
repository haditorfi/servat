<?php
App::uses('AppController', 'Controller');
/**
 * TypeGoals Controller
 *
 * @property TypeGoal $TypeGoal
 * @property PaginatorComponent $Paginator
 */
class TypeGoalsController extends AppController {

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
		$this->TypeGoal->recursive = 0;
		$this->set('typeGoals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypeGoal->exists($id)) {
			throw new NotFoundException(__('Invalid type goal'));
		}
		$options = array('conditions' => array('TypeGoal.' . $this->TypeGoal->primaryKey => $id));
		$this->set('typeGoal', $this->TypeGoal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypeGoal->create();
			if ($this->TypeGoal->save($this->request->data)) {
				$this->Flash(__('The type goal has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The type goal could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TypeGoal->exists($id)) {
			throw new NotFoundException(__('Invalid type goal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TypeGoal->save($this->request->data)) {
				$this->Flash(__('The type goal has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The type goal could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('TypeGoal.' . $this->TypeGoal->primaryKey => $id));
			$this->request->data = $this->TypeGoal->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TypeGoal->id = $id;
		if (!$this->TypeGoal->exists()) {
			throw new NotFoundException(__('Invalid type goal'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TypeGoal->delete()) {
			$this->Flash(__('The type goal has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The type goal could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
