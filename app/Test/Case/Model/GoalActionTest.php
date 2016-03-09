<?php
App::uses('GoalAction', 'Model');

/**
 * GoalAction Test Case
 */
class GoalActionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.goal_action',
		'app.goal',
		'app.user',
		'app.role',
		'app.demand',
		'app.demand_action',
		'app.attachment',
		'app.lantern',
		'app.question',
		'app.node',
		'app.gole_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GoalAction = ClassRegistry::init('GoalAction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GoalAction);

		parent::tearDown();
	}

}
