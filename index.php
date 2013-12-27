<?php

require 'libs/Smarty/Smarty.class.php';
require 'utils/SQLiteDB.php';
$smarty = new Smarty;


// $smarty->debugging = true;
$smarty->caching = true;
$smarty->compile_dir= "gs://countycat/templates_c/"; 
$smarty->cache_dir="gs://countycat/caches/";
// $smarty->cache_lifetime = 120;

$smarty->assign("title","Javid will help you to buy stuff");
$smarty->assign("name","Sasa will help you to buy stuff");


$db = new MyDB();

$result = $db->query("select * from product");
while($row = $result->fetchArray()){
	echo "ID" . $row['id'].'\n';
	echo "Name" . $row['name'].'\n';
	$smarty->assign("name",$row['name']);
}

$smarty->display('index.tpl');

?>