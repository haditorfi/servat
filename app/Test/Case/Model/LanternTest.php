<?php
App::uses('Lantern', 'Model');

/**
 * Lantern Test Case
 */
class LanternTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lantern',
		'app.user',
		'app.question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lantern = ClassRegistry::init('Lantern');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lantern);

		parent::tearDown();
	}

}
