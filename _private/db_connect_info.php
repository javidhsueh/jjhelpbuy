<?php

Class MySqlInfo{
	public static $host = 'mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/';
	public static $db = 'helpbuy';
	public static $user = 'admincN38lk3';
	public static $pwd = 'KjyjGcjfGL9q';
	public static $port = '5000';
}

Class CloudSqlInfo{
	public static $host = ':/cloudsql/hello-php:my-cloudsql-instance';
	// public static $db = 'countycat';
	public static $user = 'root';
	public static $pwd = 'pwd';
}


Class SQLiteInfo{
	public static $path = 'data.sqlite';
	// public static $user = 'root';
	public static $pwd = 'pwd';
}
?>