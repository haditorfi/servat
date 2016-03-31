<?php
App::uses('AppController', 'Controller');
/**
 * Dashboards Controller
 *
 * @property Dashboard $Dashboard
 * @property PaginatorComponent $Paginator
 */
class DashboardsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function index() {
		$opt = array('conditions' => array('Node.user_id LIKE' => $this->Auth->user('id')));
		$nights = ClassRegistry::init('Night')->find('all', $opt);
		$mornings = ClassRegistry::init('Morning')->find('all', $opt);
		$demands = ClassRegistry::init('Demand')->find('all', $opt);
		$goals = ClassRegistry::init('Goal')->find('all', $opt);

		$optStatus = array('conditions' => array('Node.user_id LIKE' => $this->Auth->user('id'),'Node.status LIKE' => true));
		$statusDemands = ClassRegistry::init('Demand')->find('all', $optStatus);
		$statusGoals = ClassRegistry::init('Goal')->find('all', $optStatus);

		$dayDate=date('Y-m-d');
		    $this->Paginator->settings = array(
		     'conditions' => array('Node.created LIKE' =>$dayDate,'Node.user_id LIKE' => $this->Auth->user('id'))
		      );
		$optDash = array('conditions' => array('Node.created LIKE' =>$dayDate,'Node.user_id LIKE' => $this->Auth->user('id')));
		$dashNights = ClassRegistry::init('Night')->find('all', $optDash);
		$dashMornings = ClassRegistry::init('Morning')->find('all', $optDash);

		$this->set(compact('mornings','nights','demands','goals','dashNights','dashMornings','statusDemands','statusGoals', $this->Paginator->paginate()));
	}
}
