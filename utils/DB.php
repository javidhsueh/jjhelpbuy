<?php

require_once("_private/db_connect_info.php");

class DB 
{
    var $_dbConn = 0;
    var $_queryResource = 0;
    
    function DB()
    {
        $db_info = new MySqlInfo();
        $host = $db_info->host;
        $user = $db_info->user;
        $pwd = $db_info->pwd;

        $dbConn = mysql_connect($host, $user, $pwd);
        if (! $dbConn)
            die ("MySQL Connect Error");
        mysql_query("SET NAMES utf8");
        if (! mysql_select_db($dbname, $dbConn))
            die ("MySQL Select DB Error");
        $this->_dbConn = $dbConn;
    }
        
    function query($sql)
    {
        if (! $queryResource = mysql_query($sql, $this->_dbConn))
            die ("MySQL Query Error");
        $this->_queryResource = $queryResource;
        return $queryResource;        
    }
    
    /** Get array return by MySQL */
    function fetch_array()
    {
        return mysql_fetch_array($this->_queryResource, MYSQL_ASSOC);
    }
    
    function get_num_rows()
    {
        return mysql_num_rows($this->_queryResource);
    }

    /** Get the cuurent id */    
    function get_insert_id()
    {
        return mysql_insert_id($this->_dbConn);
    } 
    
}
?>