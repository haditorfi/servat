<?php
App::uses('AppController', 'Controller');
/**
 * GoalTypes Controller
 *
 * @property GoalType $GoalType
 * @property PaginatorComponent $Paginator
 */
class GoalTypesController extends AppController {

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
		$this->GoalType->recursive = 0;
		$this->set('goalTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GoalType->exists($id)) {
			throw new NotFoundException(__('Invalid goal type'));
		}
		$options = array('conditions' => array('GoalType.' . $this->GoalType->primaryKey => $id));
		$this->set('goalType', $this->GoalType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GoalType->create();
			if ($this->GoalType->save($this->request->data)) {
				$this->Flash(__('The goal type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The goal type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->GoalType->exists($id)) {
			throw new NotFoundException(__('Invalid goal type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GoalType->save($this->request->data)) {
				$this->Flash(__('The goal type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The goal type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('GoalType.' . $this->GoalType->primaryKey => $id));
			$this->request->data = $this->GoalType->find('first', $options);
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
		$this->GoalType->id = $id;
		if (!$this->GoalType->exists()) {
			throw new NotFoundException(__('Invalid goal type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GoalType->delete()) {
			$this->Flash(__('The goal type has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The goal type could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
