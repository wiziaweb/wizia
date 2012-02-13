<?php
/**
 * Base Database Config.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'active' => 'default',

	/**
	 * Base config, just need to set the DSN, username and password in env. config.
	 */
	'default2' => array(
		'type'        => 'pdo',
		'connection'  => array(
			'persistent' => false,
		),
		'identifier'   => '`',
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => false,
		'profiling'    => false,
	),

	'redis' => array(
		'default' => array(
			'hostname'  => '127.0.0.1',
			'port'      => 6379,
		)
	),
'default' => array(
    'type'           => 'mysql',
    'connection'     => array(
        'hostname'       => 'mysql.alwaysdata.com',
        'port'           => '3306',
        'database'       => 'wiziaweb_base',
        'username'       => 'wiziaweb',
        'password'       => 'gencodealw',
        'persistent'     => false,
    ),
    'table_prefix'   => '',
    'charset'        => 'utf8',
    'caching'        => false,
    'profiling'      => false,
),

);
