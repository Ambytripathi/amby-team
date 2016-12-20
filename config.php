<?php
	ob_start();

	include('connection/connection.php');
	include('function/function.php');

	$dbObj = new DB(); //Connection Class
	$genObj = new General(); //Fucntion Class

	$con = $dbObj->getConn();
?>