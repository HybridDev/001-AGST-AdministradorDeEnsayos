<?php
	session_start();
	$host='127.0.0.1';
	$user='root';
	$pass='';
	$db='pedorringa';
	$link=mysql_connect($host,$user,$pass) or die(mysql_error());
	mysql_select_db($db,$link);
?>