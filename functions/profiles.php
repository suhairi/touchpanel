<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/connect.php';

function getProfile() {

	$sql = "select * from profile where id = '" . $_SESSION['id']  . "'";
	$query = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($query);

	return $row;
}