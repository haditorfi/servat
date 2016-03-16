<?php
App::uses('AppController', 'Controller');
/**
 * Nights Controller
 *
 * @property Night $Night
 * @property PaginatorComponent $Paginator
 */
class NightsController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $helpers = array('Html','Form');

	public function beforeFilter() {
        if ($this->Auth->user('id')!== null) {
        $this->Paginator->settings = array(
             'conditions' => array('Node.user_id LIKE' => $this->Auth->user('id'))
              );
        $this->set('Model', $this->Paginator->paginate());
    }
	    parent::beforeFilter();
	    $ans1 = '1- آیا در طول روز کارهایی برای هدف امسالم انجام دادم؟' ;
	    $ans2 = '2- چه کارهایی برای فردا باید انجام بدهم؟ (کارهای مانده از امروز)' ;
	    $ans3 = '3- از 1 تا 10 چه نمره ای به خودم می دهم و چرا؟' ;
	    $ans4 = '4- چطور می توانم فردا نمره ی بهتری بگیرم؟' ;
	    $ans5 = '5- موضوعات جالب امروز چه چیزهایی بودند؟' ;
	    $ans6 = '6- امروز چه ایده یا دیدگاه جدیدی پیدا کردم؟' ;
	    $ans7 = '7- برای چه چیزها و چه افرادی در زندگی ام سپاسگزارم؟' ;
	    $this->set('ans1',$ans1);
	    $this->set('ans2',$ans2);
	    $this->set('ans3',$ans3);
	    $this->set('ans4',$ans4);
	    $this->set('ans5',$ans5);
	    $this->set('ans6',$ans6);
	    $this->set('ans7',$ans7);
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Night->recursive = 0;
		$this->set('nights', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Night->exists($id)) {
			throw new NotFoundException(__('Invalid night'));
		}
		$options = array('conditions' => array('Night.' . $this->Night->primaryKey => $id));
		$this->set('night', $this->Night->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Node']['user_id'] = $this->Auth->user('id');
			$this->request->data['Node']['type'] = 'night';
			$this->request->data['Node']['title'] = 'سوالات شب';
			$this->Night->create();
			if ($this->Night->saveAll($this->request->data)) {
				$this->Flash(__('The night has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The night could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$this->Night->recursive = 0; 
		$dayDate=date('Y-m-d');
		    $this->Paginator->settings = array(
		     'conditions' => array('Node.created LIKE' =>$dayDate,'Node.user_id LIKE' => $this->Auth->user('id'))
		      );
		$this->set('nights', $this->Paginator->paginate());
		$nodes = $this->Night->Node->find('list');
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
		if (!$this->Night->exists($id)) {
			throw new NotFoundException(__('Invalid night'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Night->saveAll($this->request->data)) {
				$this->Flash(__('The night has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash(__('The night could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Night.' . $this->Night->primaryKey => $id));
			$this->request->data = $this->Night->find('first', $options);
		}
		$nodes = $this->Night->Node->find('list');
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
		$this->Night->id = $id;
		if (!$this->Night->exists()) {
			throw new NotFoundException(__('Invalid night'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Night->delete()) {
			$this->Flash(__('The night has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Flash(__('The night could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
