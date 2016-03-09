<?php
App::uses('Type', 'Model');

/**
 * Type Test Case
 */
class TypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type',
		'app.goal',
		'app.user',
		'app.role',
		'app.demand',
		'app.attachment',
		'app.lantern',
		'app.question',
		'app.node',
		'app.goal_action'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Type = ClassRegistry::init('Type');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Type);

		parent::tearDown();
	}

}
