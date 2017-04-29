<?php

if(!isset($_SESSION)){
session_start();
}
	// this will avoid mysql_connect() deprecation error.
	//error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.


define('DBHOST', 'marryeventcom.ipagemysql.com');
	define('DBUSER', 'carebnb_db1');
	define('DBPASS', 'carebnb_db1');
	define('DBNAME', 'carebnb_db1');


	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
	
	
	
	
	//tables

$table_admin = 'admin';

$table_profile='profile';

?>