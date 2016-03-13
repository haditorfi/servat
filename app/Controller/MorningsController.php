<?php
App::uses('AppController', 'Controller');
/**
 * Mornings Controller
 *
 * @property Morning $Morning
 * @property PaginatorComponent $Paginator
 */
class MorningsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $helpers = array('Html','Form');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Morning->recursive = 0;
		$this->set('mornings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Morning->exists($id)) {
			throw new NotFoundException(__('Invalid morning'));
		}
		$options = array('conditions' => array('Morning.' . $this->Morning->primaryKey => $id));
		$this->set('morning', $this->Morning->find('first', $options));
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Node']['user_id'] = $this->Auth->user('id');
			$this->request->data['Node']['type'] = 'morning';
			$this->request->data['Node']['title'] = 'سوالات صبح';
			$this->Morning->create();
			if ($this->Morning->saveAll($this->request->data)) {
				$this->Flash(__('The morning has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The morning could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$nodes = $this->Morning->Node->find('list');
		$this->set(compact('nodes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Morning->exists($id)) {
			throw new NotFoundException(__('Invalid morning'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Morning->save($this->request->data)) {
				$this->Flash(__('The morning has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The morning could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Morning.' . $this->Morning->primaryKey => $id));
			$this->request->data = $this->Morning->find('first', $options);
		}
		$nodes = $this->Morning->Node->find('list');
		$this->set(compact('nodes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Morning->id = $id;
		if (!$this->Morning->exists()) {
			throw new NotFoundException(__('Invalid morning'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Morning->delete()) {
			$this->Flash(__('The morning has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The morning could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
