<?php
App::uses('Carrousel', 'Model');

/**
 * Carrousel Test Case
 *
 */
class CarrouselTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.carrousel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Carrousel = ClassRegistry::init('Carrousel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Carrousel);

		parent::tearDown();
	}

}
