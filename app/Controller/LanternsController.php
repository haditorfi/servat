<?php
App::uses('AppController', 'Controller');
/**
 * Lanterns Controller
 *
 * @property Lantern $Lantern
 * @property PaginatorComponent $Paginator
 */
class LanternsController extends AppController {

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
		$this->Lantern->recursive = 0;
		$this->set('lanterns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lantern->exists($id)) {
			throw new NotFoundException(__('Invalid lantern'));
		}
		$options = array('conditions' => array('Lantern.' . $this->Lantern->primaryKey => $id));
		$this->set('lantern', $this->Lantern->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lantern->create();
			$this->request->data['Lantern']['user_id'] = $this->Auth->user('id');
			if ($this->Lantern->save($this->request->data)) {
				$this->Flash(__('The lantern has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The lantern could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Lantern->User->find('list');
		$questions = $this->Lantern->Question->find('list');
		$this->set(compact('users', 'questions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lantern->exists($id)) {
			throw new NotFoundException(__('Invalid lantern'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lantern->save($this->request->data)) {
				$this->Flash(__('The lantern has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The lantern could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Lantern.' . $this->Lantern->primaryKey => $id));
			$this->request->data = $this->Lantern->find('first', $options);
		}
		$users = $this->Lantern->User->find('list');
		$questions = $this->Lantern->Question->find('list');
		$this->set(compact('users', 'questions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lantern->id = $id;
		if (!$this->Lantern->exists()) {
			throw new NotFoundException(__('Invalid lantern'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lantern->delete()) {
			$this->Flash(__('The lantern has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The lantern could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
