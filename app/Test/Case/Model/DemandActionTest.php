<?php
App::uses('DemandAction', 'Model');

/**
 * DemandAction Test Case
 */
class DemandActionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.demand_action',
		'app.demand'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DemandAction = ClassRegistry::init('DemandAction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DemandAction);

		parent::tearDown();
	}

}
