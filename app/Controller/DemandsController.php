<?php
App::uses('AppController', 'Controller');
/**
 * Demands Controller
 *
 * @property Demand $Demand
 * @property PaginatorComponent $Paginator
 */
class DemandsController extends AppController {


	public function beforeFilter() {
	    parent::beforeFilter();
        if ($this->Auth->user('id')!== null) {
        $this->Paginator->settings = array(
             'conditions' => array('Node.user_id LIKE' => $this->Auth->user('id'))
              );
        $this->set('Model', $this->Paginator->paginate());
    }
}
/**
 * Components
 *
 * @var array
 */
	public $helpers = array('Html','Form','FileManager.Attach');


	public function attach($id = null) {
		if (!$this->Demand->exists($id)) {
			throw new NotFoundException(__('Invalid demands'));
		}
		if (!$this->request->is('get')) {
			if ($this->Demand->save($this->request->data)) {
	        			$this->Flash->success(__('تصویر با موفقیت ذخیره شد.'), 'default', array('class' => 'alert alert-success'));
			} else {

	       			 $this->Flash->error(__('متاسفانه در ذخیره تصویر مشکل پیش آمد.'), 'default', array('class' => 'alert alert-danger'));
			}
		}

			$options = array('conditions' => array('Demand.' . $this->Demand->primaryKey => $id));
			$demand = $this->request->data = $this->Demand->find('first', $options);
		
		$this->set(compact('demand'));
		$this->set('id',$id);
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
			$this->request->data['Node']['user_id'] = $this->Auth->user('id');
			$this->request->data['Node']['type'] = 'demand';
			$this->Demand->create();
			if ($this->Demand->saveAll($this->request->data)) {
				$this->Flash(__('The demand has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The demand could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$nodes = $this->Demand->Node->find('list');
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
		if (!$this->Demand->exists($id)) {
			throw new NotFoundException(__('Invalid demand'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Demand->saveAll($this->request->data)) {
				$this->Flash(__('The demand has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view/'.$id));
			} else {
				$this->Flash(__('The demand could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Demand.' . $this->Demand->primaryKey => $id));
			$this->request->data = $this->Demand->find('first', $options);
		}
		$nodes = $this->Demand->Node->find('list');
		$this->set(compact('nodes'));
		$this->set('id',$id);
		
		$options = array('conditions' => array('Demand.' . $this->Demand->primaryKey => $id));
		$this->set('demand', $this->Demand->find('first', $options));
	}

    public function delete_attachment($id = null) {
        $attachModel = ClassRegistry::init('FileManager.Attachment');
        $attach = $attachModel->find('first',array('conditions'=>array('Attachment.id'=>$id)));
        $this->Demand->deleteAllFiles($attach);
        $attachModel->id = $attach['Attachment']['id'];
        $attachModel->delete();
             $this->Flash->error(__('تصویر مورد نظر با موفقیت حذف شد.'), 'default', array('class' => 'alert alert-danger'));
        return $this->redirect($this->referer());

    }
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$nodeId = null) {
		$this->Demand->id = $id;
		if (!$this->Demand->exists()) {
			throw new NotFoundException(__('Invalid demand'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Demand->delete()) {
       		        $nodeModel = ClassRegistry::init('Node'); 
		        $nodeModel->id = $nodeId;
		        $nodeModel->delete();
			$this->Flash(__('The demand has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The demand could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
