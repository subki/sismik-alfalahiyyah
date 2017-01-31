<?php
error_reporting(E_ALL ^ E_NOTICE);
if($page=$_GET['p']){
	$path=$page.".php";
	if(file_exists($path)){
		include($path);
	}
}else{
	include "view_main.php";
}
?>