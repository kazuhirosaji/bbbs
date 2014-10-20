<?php
App::uses('NationsController', 'Controller');

/**
 * NationsController Test Case
 *
 */
class NationsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nation',
		'app.product'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/nations/index', array('method' => 'get', 'return' => 'vars'));
		debug($result);

		$expected = array(
				array('Nation' => array('id' => 1, 'name' => 'JPN')),
				array('Nation' => array('id' => 2, 'name' => 'USA')),
				array('Nation' => array('id' => 3, 'name' => 'GER')),
				array('Nation' => array('id' => 4, 'name' => 'SPA'))
				);

		$this->assertEquals($expected, $result['nations']);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$expected = array(
				array('Nation' => array('id' => 1, 'name' => 'JPN')),
				array('Nation' => array('id' => 2, 'name' => 'USA')),
				array('Nation' => array('id' => 3, 'name' => 'GER')),
				array('Nation' => array('id' => 4, 'name' => 'SPA'))
				);

		for ($i = 0; $i < count($expected); $i++) {
			$index = $i + 1;
			$result = $this->testAction('/nations/view/'.$index , array('method' => 'get', 'return' => 'vars'));
			debug($result);
			$this->assertEquals($expected[$i]['Nation'], $result['nation']['Nation']);
		}

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
