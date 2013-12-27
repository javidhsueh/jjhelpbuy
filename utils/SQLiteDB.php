<?php

require_once("_private/db_connect_info.php");

class MyDB extends SQLite3
{
   function __construct()
   {
      $db_info = new CloudSqlInfo();
      $this->open($db_info->path);
      if(!$this){
         die($this->lastErrorMsg());
      } else {
         echo "Opened database successfully\n";
      }
   }
}

// class MyDB
// {
//    function __construct()
//    {
//       $db_info = new CloudSqlInfo();
//       if ($this->db = sqlite_open($db_info->path, 0666, $sqliteerror) ) { 
//          $result = sqlite_query($db, 'select bar from foo');
//          var_dump(sqlite_fetch_array($result) ); 
//       } else {
//          die($sqliteerror);
//       }
//       $db_info = new CloudSqlInfo();
//       $this->open($db_info->path);
//       if(!$this){
//          die($this->lastErrorMsg());
//       } else {
//          echo "Opened database successfully\n";
//       }
//    }
//    function query($sql){      
//       $result = sqlite_query($this->db, $sql);
//       return sqlite_fetch_array($result); 
//    }

// }
?>