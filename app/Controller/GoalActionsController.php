<?php
App::uses('AppController', 'Controller');
/**
 * GoalActions Controller
 *
 * @property GoalAction $GoalAction
 * @property PaginatorComponent $Paginator
 */
class GoalActionsController extends AppController {

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
		$this->GoalAction->recursive = 0;
		$this->set('goalActions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GoalAction->exists($id)) {
			throw new NotFoundException(__('Invalid goal action'));
		}
		return $this->redirect(array('controller' => 'goals','action' => 'view/'.$id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id=null) {
		if ($this->request->is('post')) {
			$this->GoalAction->create();
     			$this->request->data['GoalAction']['goal_id'] = $id;
			if ($this->GoalAction->save($this->request->data)) {
			return $this->redirect(array('controller' => 'goals','action' => 'view/'.$id));
			} else {
				$this->Flash(__('The goal action could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$goals = $this->GoalAction->Goal->find('list');
		$this->set(compact('goals'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GoalAction->exists($id)) {
			throw new NotFoundException(__('Invalid goal action'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GoalAction->save($this->request->data)) {
				$this->Flash(__('The goal action has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller'=>'goals','action' => 'index'));
			} else {
				$this->Flash(__('The goal action could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('GoalAction.' . $this->GoalAction->primaryKey => $id));
			$this->request->data = $this->GoalAction->find('first', $options);
		}
		$goals = $this->GoalAction->Goal->find('list');
		$this->set(compact('goals'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GoalAction->id = $id;
		if (!$this->GoalAction->exists()) {
			throw new NotFoundException(__('Invalid goal action'));
		}
		$this->request->onlyAllow('post', 'delete','get');
		if ($this->GoalAction->delete()) {
			$this->Flash(__('The goal action has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The goal action could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
