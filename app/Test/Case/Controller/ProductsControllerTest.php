<?php
App::uses('ProductsController', 'Controller');

/**
 * ProductsController Test Case
 *
 */
class ProductsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product',
		'app.nation'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/products/index', array('method' => 'get', 'return' => 'vars'));
		debug($result);

		$expected = array(
				array('Product' => array(
				'id' => '1',
				'name' => 'Sake',
				'nation_id' => '1',
				'description' => 'Sake is alchol drink in Japan.',
				'link' => 'http://www.yahoo.co.jp',
				'image' => '',
				'created' => '2014-10-18 13:58:59',
				'modified' => '2014-10-18 13:58:59'),
				'Nation' => array("id" => 1, "name" => "JPN"),
			),
				array('Product' => array(
				'id' => '2',
				'name' => 'Beer',
				'nation_id' => '2',
				'description' => 'Beer is famous alchol drink in German.',
				'link' => 'http://www.yahoo.co.jp',
				'image' => '',
				'created' => '2014-10-29 13:58:59',
				'modified' => '2014-10-29 13:58:59'),
				'Nation' => array("id" => 2, "name" => "USA"),
			),
			);

		$this->assertEquals($expected, $result['products']);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
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
