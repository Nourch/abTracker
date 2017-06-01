<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "abTrackerDB";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed.".$conn->error);

session_start();