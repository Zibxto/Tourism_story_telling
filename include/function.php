<?php
//send a query
function query($sql) {

	global $connection;
	return mysqli_query($connection, $sql);
}
//confirm a query
function confirm($result) {
	global $connection;
	if (!$result) {
		die("Query failed ".mysqli_error($connection));
	}
}
//validate against sql injections
function escape_string($string) {
	global $connection;
	return mysqli_real_escape_string($connection, $string);
}
//fetch array
function fetch_array($result) {
	return mysqli_fetch_array($result);
}

 ?>