<?php
App::uses('Processor', 'Model');

/**
 * Processor Test Case
 *
 */
class ProcessorTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Processor = ClassRegistry::init('Processor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Processor);

		parent::tearDown();
	}

}
