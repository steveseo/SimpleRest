<?php

class DATABASE_CONFIG {

	public function default_db(){ return array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => '',
		'password' => '',
		'database' => '',
		'authtable' => 'users',
		'authid' => 'username',
		'authpassword' => 'password',
		'authkey' => 'key',
		'prefix' => '',
	);
	}


}
