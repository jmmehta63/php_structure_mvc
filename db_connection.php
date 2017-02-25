<?php
/* Database Connection */
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');
define('DB_NAME','DATABASE_NAME');


class DB_Con extends PDO
{
	function __construct()
	{
		parent::__construct('mysql:dbname='.DB_NAME.';host='.DB_HOST,DB_USER,DB_PASS);
	}
}
