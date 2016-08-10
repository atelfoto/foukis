<?php
/**
 * PropertyFixture
 *
 */
class PropertyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'states_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'areas_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'type_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'size' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'created' => array('type' => 'timestamp', 'null' => false),
		'online' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 1, 'unsigned' => false),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'year' => array('type' => 'date', 'null' => false, 'default' => null),
		'bedrooms' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'level' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'states_id' => array('column' => 'states_id', 'unique' => 0),
			'areas_id' => array('column' => 'areas_id', 'unique' => 0),
			'status_id' => array('column' => 'status_id', 'unique' => 0),
			'type_id' => array('column' => 'type_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'states_id' => 1,
			'areas_id' => 'Lorem ipsum dolor sit amet',
			'status_id' => 'Lorem ipsum dolor sit amet',
			'type_id' => 'Lorem ipsum dolor sit amet',
			'size' => 1,
			'price' => '',
			'created' => 1419270115,
			'online' => 1,
			'modified' => '2014-12-22',
			'year' => '2014-12-22',
			'bedrooms' => 1,
			'level' => 1
		),
	);

}
