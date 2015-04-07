<?php
/**
 * ProcessorFixture
 *
 */
class ProcessorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'product_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'ucs2_general_ci', 'charset' => 'ucs2'),
		'code_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'ucs2_general_ci', 'charset' => 'ucs2'),
		'socket' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'ucs2_general_ci', 'charset' => 'ucs2'),
		'litography' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'ucs2_general_ci', 'charset' => 'ucs2'),
		'number_of_cores' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'number_of_threads' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'cache' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'ucs2_general_ci', 'charset' => 'ucs2'),
		'frequency' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'turbo_frequency' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'tdp' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'max_ram_memory' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'max_memory_channels' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'max_memory_bandwidth' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'ucs2', 'collate' => 'ucs2_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'product_name' => 'Lorem ipsum dolor sit amet',
			'code_name' => 'Lorem ipsum dolor sit amet',
			'socket' => 'Lorem ip',
			'litography' => 'Lorem ip',
			'number_of_cores' => 1,
			'number_of_threads' => 1,
			'cache' => 'Lorem ipsum dolor sit amet',
			'frequency' => 1,
			'turbo_frequency' => 1,
			'tdp' => 1,
			'max_ram_memory' => 1,
			'max_memory_channels' => 1,
			'max_memory_bandwidth' => 1,
			'price' => 1
		),
	);

}
