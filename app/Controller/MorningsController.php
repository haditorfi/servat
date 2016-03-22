<?php
App::uses('AppController', 'Controller');
App::uses('ClassRegistry', 'Utility');
/**
 * Mornings Controller
 *
 * @property Morning $Morning
 * @property PaginatorComponent $Paginator
 */
class NightsController extends AppController {}
class MorningsController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $helpers = array('Html','Form');
	public function beforeFilter() {
	    parent::beforeFilter();
        if ($this->Auth->user('id')!== null) {
      	  $this->Paginator->settings = array(
         	    'conditions' => array('Node.user_id LIKE' => $this->Auth->user('id'))
              );
        $this->set('Model', $this->Paginator->paginate());
    }
	    $ans1 = '1- به خاطر چه چیزی همین الان سپاسگزارم؟' ;
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
	    $ansN1 = '1- آیا در طول روز کارهایی برای هدف امسالم انجام دادم؟' ;
	    $ansN2 = '2- چه کارهایی برای فردا باید انجام بدهم؟ (کارهای مانده از امروز)' ;
	    $ansN3 = '3- از 1 تا 10 چه نمره ای به خودم می دهم و چرا؟' ;
	    $ansN4 = '4- چطور می توانم فردا نمره ی بهتری بگیرم؟' ;
	    $ansN5 = '5- موضوعات جالب امروز چه چیزهایی بودند؟' ;
	    $ansN6 = '6- امروز چه ایده یا دیدگاه جدیدی پیدا کردم؟' ;
	    $ansN7 = '7- برای چه چیزها و چه افرادی در زندگی ام سپاسگزارم؟' ;
	    $this->set('ansN1',$ansN1);
	    $this->set('ansN2',$ansN2);
	    $this->set('ansN3',$ansN3);
	    $this->set('ansN4',$ansN4);
	    $this->set('ansN5',$ansN5);
	    $this->set('ansN6',$ansN6);
	    $this->set('ansN7',$ansN7);
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

	public function lantern() {
		$this->Morning->recursive = 0; 
		$dayDate=date('Y-m-d');
		    $this->Paginator->settings = array(
		     'conditions' => array('Node.created LIKE' =>$dayDate,'Node.user_id LIKE' => $this->Auth->user('id'))
		      );
		$opt = array('conditions' => array('Node.created LIKE' =>$dayDate,'Node.user_id LIKE' => $this->Auth->user('id')));
		$nights = ClassRegistry::init('Night')->find('all', $opt);
		$this->set(compact('nights', $this->Paginator->paginate()));
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
    		$this->set(compact('morning'));
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
				return $this->redirect(array('action' => 'lantern'));
			} else {
				$this->Flash(__('The morning could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$this->Morning->recursive = 0; 
		$dayDate=date('Y-m-d');
		    $this->Paginator->settings = array(
		     'conditions' => array('Node.created LIKE' =>$dayDate,'Node.user_id LIKE' => $this->Auth->user('id'))
		      );
		$this->set('mornings', $this->Paginator->paginate());
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
			if ($this->Morning->saveAll($this->request->data)) {
				$this->Flash(__('The morning has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'lantern'));
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