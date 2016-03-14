<?php
App::uses('AppController', 'Controller');
/**
 * Nodes Controller
 *
 * @property Node $Node
 * @property PaginatorComponent $Paginator
 */
class NodesController extends AppController {

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
		$this->Node->recursive = 0;
		$this->set('nodes', $this->Paginator->paginate());
	}

	public function lantern() {
		// $options = array('conditions' => array('Node.id'));
		// $this->set('node', $this->Demand->find('first', $options));
		$this->Node->recursive = 1;
		$this->set('nodes', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid node'));
		}
		$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
		$this->set('node', $this->Node->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Node->create();
			if ($this->Node->save($this->request->data)) {
				$this->Flash(__('The node has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The node could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Node->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid node'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Node->save($this->request->data)) {
				$this->Flash(__('The node has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The node could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
			$this->request->data = $this->Node->find('first', $options);
		}
		$users = $this->Node->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid node'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Node->delete()) {
			$this->Flash(__('The node has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The node could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
