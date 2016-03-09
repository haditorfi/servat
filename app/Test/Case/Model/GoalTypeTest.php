<?php
App::uses('GoalType', 'Model');

/**
 * GoalType Test Case
 */
class GoalTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.goal_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GoalType = ClassRegistry::init('GoalType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GoalType);

		parent::tearDown();
	}

}
