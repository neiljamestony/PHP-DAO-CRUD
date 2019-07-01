<?php
	
	//Default URL
	define('SERVERTYPE', 'local');
	define('URL', SERVERTYPE == 'local' ? '/smurf/' : '/');

	//Database Connection
	define('DATABASEHOST', SERVERTYPE == 'local' ? 'localhost' : 'localhost');
	define('DATABASEUSERNAME', SERVERTYPE == 'local' ? 'root' : '');
	define('DATABASEPASSWORD', SERVERTYPE == 'local' ? '' : '');
	define('DATABASENAME', SERVERTYPE == 'local' ? 'maganda': '');

	date_default_timezone_set('Asia/Taipei');

	ini_set('memory_limit', '-1');
	ini_set('max_execution_time', 300);
	ini_set('session.gc_maxlifetime', 60 * 60 * 24);
?>