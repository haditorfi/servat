<?php
App::uses('TypeGoal', 'Model');

/**
 * TypeGoal Test Case
 */
class TypeGoalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type_goal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TypeGoal = ClassRegistry::init('TypeGoal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TypeGoal);

		parent::tearDown();
	}

}
