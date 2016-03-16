<?php
App::uses('Page', 'Model');

/**
 * Page Test Case
 */
class PageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.page',
		'app.node',
		'app.user',
		'app.role',
		'app.demand',
		'app.attachment',
		'app.lantern',
		'app.goal',
		'app.goal_type',
		'app.goal_action',
		'app.morning',
		'app.night'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Page = ClassRegistry::init('Page');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Page);

		parent::tearDown();
	}

}
