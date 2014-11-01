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
		$result = $this->testAction('/products/view/2', array('method' => 'get', 'return' => 'vars'));
		debug($result);
		$expected = array(
				'Product' => array(
				'id' => '2',
				'name' => 'Beer',
				'nation_id' => '2',
				'description' => 'Beer is famous alchol drink in German.',
				'link' => 'http://www.yahoo.co.jp',
				'image' => '',
				'created' => '2014-10-29 13:58:59',
				'modified' => '2014-10-29 13:58:59'),
				
				'Nation' => array("id" => 2, "name" => "USA"),
			);

		$this->assertEquals($expected, $result['product']);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$now = new DateTime();
		debug($now);
		$expected = array('Product' => array(
				'id' => 3,
				'name' => 'Wine',
				'nation_id' => '4',
				'description' => 'This is Red wine',
				'link' => 'http://www.yahoo.co.jp',
				'image' => '',
				'created' => $now->date,
				'modified' => $now->date,
			),
			'Nation' => array('id' => 4, 'name' => 'SPA'),
		);


		$data['Product'] = array(
				'name' => 'Wine',
				'nation_id' => '4',
				'description' => 'This is Red wine',
				'link' => 'http://www.yahoo.co.jp',
				'image' => '',
				'created' => $now->date,
				'modified' => $now->date);
		$result = $this->testAction('/products/add', array('data' => $data, 'method' => 'post', 'return' => 'vars'));
		$result = $this->testAction('/products/view/3', array('method' => 'get', 'return' => 'vars'));
		debug($result);
		$this->assertEquals($expected, $result['product']);

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
