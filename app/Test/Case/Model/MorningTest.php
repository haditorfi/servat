<?php
App::uses('Morning', 'Model');

/**
 * Morning Test Case
 */
class MorningTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.morning',
		'app.node',
		'app.user',
		'app.role',
		'app.demand',
		'app.attachment',
		'app.lantern',
		'app.night'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Morning = ClassRegistry::init('Morning');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Morning);

		parent::tearDown();
	}

}
