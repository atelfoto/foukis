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
		'state_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'size' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'created' => array('type' => 'timestamp', 'null' => false),
		'online' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'dateYear' => array('type' => 'text', 'null' => false, 'default' => null, 'length' => 4),
		'bedrooms' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'level' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'states_id' => array('column' => 'state_id', 'unique' => 0),
			'areas_id' => array('column' => 'area_id', 'unique' => 0),
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
			'state_id' => 1,
			'area_id' => 1,
			'status_id' => 1,
			'type_id' => 1,
			'size' => 1,
			'price' => '',
			'created' => 1419413386,
			'online' => 1,
			'modified' => '2014-12-24 10:29:46',
			'dateYear' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bedrooms' => 1,
			'level' => 1
		),
	);

}
