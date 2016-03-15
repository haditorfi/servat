<?php
App::uses('Night', 'Model');

/**
 * Night Test Case
 */
class NightTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.night',
		'app.node',
		'app.user',
		'app.role',
		'app.demand',
		'app.attachment',
		'app.lantern',
		'app.morning'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Night = ClassRegistry::init('Night');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Night);

		parent::tearDown();
	}

}
