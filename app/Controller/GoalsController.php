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

	public $helpers = array('Html','Form','FileManager.Attach');


	public function beforeFilter() {
	    parent::beforeFilter();
        if ($this->Auth->user('id')!== null) {
        $this->Paginator->settings = array(
             'conditions' => array('Node.user_id LIKE' => $this->Auth->user('id'))
              );
        $this->set('Model', $this->Paginator->paginate());
    }
}
	public function attach($id = null) {
		if (!$this->Goal->exists($id)) {
			throw new NotFoundException(__('Invalid demands'));
		}
		if (!$this->request->is('get')) {
			if ($this->Goal->save($this->request->data)) {
	        			$this->Flash->success(__('تصویر با موفقیت ذخیره شد.'), 'default', array('class' => 'alert alert-success'));
			} else {

	       			 $this->Flash->error(__('متاسفانه در ذخیره تصویر مشکل پیش آمد.'), 'default', array('class' => 'alert alert-danger'));
			}
		}

			$options = array('conditions' => array('Goal.' . $this->Goal->primaryKey => $id));
			$goal = $this->request->data = $this->Goal->find('first', $options);
		
		$this->set(compact('goal'));
		$this->set('id',$id);
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$options = array('conditions' => array('Goal.id'));
		$this->set('goal', $this->Goal->find('first', $options));
		$this->Goal->recursive = 1;
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
			$this->request->data['Node']['user_id'] = $this->Auth->user('id');
			$this->request->data['Node']['type'] = 'goal';
			if ($this->Goal->saveAll($this->request->data)) {
				$this->Flash(__('The goal has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The goal could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$nodes = $this->Goal->Node->find('list');
		$goalTypes = $this->Goal->GoalType->find('list');
		$this->set(compact('nodes', 'goalTypes'));
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
			if ($this->Goal->saveAll($this->request->data)) {
				$this->Flash(__('The goal has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The goal could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Goal.' . $this->Goal->primaryKey => $id));
			$this->request->data = $this->Goal->find('first', $options);
		}
		$nodes = $this->Goal->Node->find('list');
		$goalTypes = $this->Goal->GoalType->find('list');
		$this->set(compact('nodes', 'goalTypes'));
		$this->set('id',$id);
		$options = array('conditions' => array('Goal.' . $this->Goal->primaryKey => $id));
		$this->set('goal', $this->Goal->find('first', $options));
	}
    public function delete_attachment($id = null) {
        $attachModel = ClassRegistry::init('FileManager.Attachment');
        $attach = $attachModel->find('first',array('conditions'=>array('Attachment.id'=>$id)));
        $this->Goal->deleteAllFiles($attach);
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
		$this->Goal->id = $id;
		if (!$this->Goal->exists()) {
			throw new NotFoundException(__('Invalid goal'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Goal->delete()) {
       		        $nodeModel = ClassRegistry::init('Node');
		        $nodeModel->id = $nodeId;
		        $nodeModel->delete();

       		        $goalActionModel = ClassRegistry::init('GoalAction');  
       		        $act = $goalActionModel->find('list',array('conditions'=>array('GoalAction.goal_id'=>$id)));
		        $goalActionModel->id = $act;
		        $goalActionModel->delete();
			$this->Flash(__('The goal has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The goal could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
