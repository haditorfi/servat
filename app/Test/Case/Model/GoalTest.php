<?php
App::uses('Goal', 'Model');

/**
 * Goal Test Case
 */
class GoalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.goal',
		'app.user',
		'app.role',
		'app.demand',
		'app.demand_action',
		'app.attachment',
		'app.lantern',
		'app.question',
		'app.node',
		'app.gole_type',
		'app.goal_action'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Goal = ClassRegistry::init('Goal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Goal);

		parent::tearDown();
	}

}
