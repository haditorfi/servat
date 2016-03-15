<?php
App::uses('AppController', 'Controller');
App::uses('ClassRegistry', 'Utility');

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

	public function beforeFilter() {
	    parent::beforeFilter();
	    $ans1 = '1- به خاطر چه چیری همین الان سپاسگزارم؟' ;
	    $ans2 = '2- به خاطر چه کسی سپاسگزارم؟' ;
	    $ans3 = '3- امروز دوست دارم چه اتفاقی را تجربه کنم؟' ;
	    $ans4 = '4- دوست دارم خدا به چه وظایفی در مورد من عمل کند؟' ;
	    $ans5 = '5- هدف اصلی امسال من چیست و امروز چه کاری برای نزدیکتر شدن به آن انجام می دهم؟' ;
	    $ans6 = '6- اگر امروز فقط بتوانم 3 کار انجام بدهم آن 3 کار چه خواهند بود؟' ;

	    $this->set('ans1',$ans1);
	    $this->set('ans2',$ans2);
	    $this->set('ans3',$ans3);
	    $this->set('ans4',$ans4);
	    $this->set('ans5',$ans5);
	    $this->set('ans6',$ans6);
	}
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
		$morning = $this->Morning->find('first', $options);
		 $h=ClassRegistry::init('Night');
		$opt = array('conditions' => array('Night.id','Night.node_id'));
		$night = ClassRegistry::init('Night')->find('all', $opt);
    	$this->set(compact('morning', 'night'));
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
