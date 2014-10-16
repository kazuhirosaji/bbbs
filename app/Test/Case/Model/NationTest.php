<?php
App::uses('Nation', 'Model');

/**
 * Nation Test Case
 *
 */
class NationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nation',
//		'app.product'
	);	

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Nation = ClassRegistry::init('Nation');
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nation);

		parent::tearDown();
	}

	public function testFindFirst() {
	    $params = array(
	        'conditions' => array('id' => 1),
	        'fields' => array('id', 'name')
	    );

		$result = $this->Nation->find('first', $params);
		$expected = 
				array('Nation' => array('id' => 1, 'name' => 'JPN'));
			

		$this->assertEquals($expected['Nation'], $result['Nation']);
	}

}
