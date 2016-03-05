<?php
App::uses('Demand', 'Model');

/**
 * Demand Test Case
 */
class DemandTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.demand',
		'app.user',
		'app.demand_action'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Demand = ClassRegistry::init('Demand');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Demand);

		parent::tearDown();
	}

}
