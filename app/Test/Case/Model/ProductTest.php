<?php
App::uses('Product', 'Model');

/**
 * Product Test Case
 *
 */
class ProductTest extends CakeTestCase {

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
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Product = ClassRegistry::init('Product');
	}


	public function testFindFirst() {
	    $params = array(
	        'conditions' => array('Product.id' => 1),
	        'fields' => array('id', 'name', 'nation_id', 'description')
	    );

		$result = $this->Product->find('first', $params);
		$expected = 
				array('Product' => array(
					'id' => '1',
					'name' => 'Sake',
					'nation_id' => '1',
					'description' => 'Sake is alchol drink in Japan.'));
		debug($result);

		$this->assertEquals($expected['Product'], $result['Product']);
	}

	public function testFindAll() {
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
