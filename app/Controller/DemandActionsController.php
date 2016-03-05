<?php
App::uses('AppController', 'Controller');
/**
 * DemandActions Controller
 *
 * @property DemandAction $DemandAction
 * @property PaginatorComponent $Paginator
 */
class DemandActionsController extends AppController {

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
		$this->DemandAction->recursive = 0;
		$this->set('demandActions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DemandAction->exists($id)) {
			throw new NotFoundException(__('Invalid demand action'));
		}
		$options = array('conditions' => array('DemandAction.' . $this->DemandAction->primaryKey => $id));
		$this->set('demandAction', $this->DemandAction->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DemandAction->create();
			if ($this->DemandAction->save($this->request->data)) {
				$this->Flash(__('The demand action has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The demand action could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$demands = $this->DemandAction->Demand->find('list');
		$this->set(compact('demands'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DemandAction->exists($id)) {
			throw new NotFoundException(__('Invalid demand action'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DemandAction->save($this->request->data)) {
				$this->Flash(__('The demand action has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The demand action could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('DemandAction.' . $this->DemandAction->primaryKey => $id));
			$this->request->data = $this->DemandAction->find('first', $options);
		}
		$demands = $this->DemandAction->Demand->find('list');
		$this->set(compact('demands'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DemandAction->id = $id;
		if (!$this->DemandAction->exists()) {
			throw new NotFoundException(__('Invalid demand action'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DemandAction->delete()) {
			$this->Flash(__('The demand action has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The demand action could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
