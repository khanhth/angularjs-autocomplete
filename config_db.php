<?php

$host = "localhost"; /* DB host name */
$user = "root"; /* DB user */
$password = ""; /* DB password */
$dbname = "angular_autocomplete"; /* DB name */

$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
