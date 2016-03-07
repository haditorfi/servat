<?php
App::uses('AppController', 'Controller');
/**
 * Demands Controller
 *
 * @property Demand $Demand
 * @property PaginatorComponent $Paginator
 */
class DemandsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $helpers = array('Html','Form','FileManager.Attach');


	public function attach($id = null) {
		if (!$this->Demand->exists($id)) {
			throw new NotFoundException(__('Invalid demands'));
		}
		if (!$this->request->is('get')) {
			if ($this->Demand->save($this->request->data)) {
				$this->Session->setFlash(__('The demands has been saved.'), 'default', array('class' => 'alert alert-success'));
			} else {
				$this->Session->setFlash(__('The demands could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}

			$options = array('conditions' => array('Demand.' . $this->Demand->primaryKey => $id));
			$demand = $this->request->data = $this->Demand->find('first', $options);
		
		$this->set(compact('demand'));
		$this->set('id',$id);
	}

	public function featured($id){
		$attachModel = ClassRegistry::init('FileManager.Attachment');
		$attach = $attachModel->find('first',array('conditions'=>array('Attachment.id'=>$id)));
		$target = $attachModel->find('first',array('conditions'=>array('model'=>$attach['Attachment']['model'],'foreign_key'=>$attach['Attachment']['foreign_key'],'featured'=>true)));
		if($target){
			$attachModel->id = $target['Attachment']['id'];
			$attachModel->saveField('featured',false);
		}
		$attachModel->id = $attach['Attachment']['id'];
		$attachModel->saveField('featured',true);
		return $this->redirect($this->referer());
	}

	public function delete_attachment($id = null) {
		$attachModel = ClassRegistry::init('FileManager.Attachment');
		$attach = $attachModel->find('first',array('conditions'=>array('Attachment.id'=>$id)));
		$this->Demand->deleteAllFiles($attach);
		$attachModel->id = $attach['Attachment']['id'];
		$attachModel->delete();
		return $this->redirect($this->referer());
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$options = array('conditions' => array('Demand.id'));
		$this->set('demand', $this->Demand->find('first', $options));
		$this->Demand->recursive = 1;
		$this->set('demands', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Demand->exists($id)) {
			throw new NotFoundException(__('Invalid demand'));
		}
		$options = array('conditions' => array('Demand.' . $this->Demand->primaryKey => $id));
		$this->set('demand', $this->Demand->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Demand->create();
     			$this->request->data['Demand']['user_id'] = $this->Auth->user('id');
     			$this->request->data['Demand']['status'] = 1;
			if ($this->Demand->save($this->request->data)) {
				$this->Flash(__('The demand has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The demand could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Demand->User->find('list');
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
		if (!$this->Demand->exists($id)) {
			throw new NotFoundException(__('Invalid demand'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Demand->save($this->request->data)) {
				$this->Flash(__('The demand has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view/'.$id));
			} else {
				$this->Flash(__('The demand could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Demand.' . $this->Demand->primaryKey => $id));
			$this->request->data = $this->Demand->find('first', $options);
		}
		$users = $this->Demand->User->find('list');
		$this->set(compact('users'));
		$this->set('id',$id);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Demand->id = $id;
		if (!$this->Demand->exists()) {
			throw new NotFoundException(__('Invalid demand'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Demand->delete()) {
			$this->Flash(__('The demand has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The demand could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
