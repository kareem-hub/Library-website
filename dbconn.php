<?php

$username = 'root';
$password = '';
$host = 'localhost';
$dbname = 'library';

//Connect to data base
$mysqli = new mysqli($host, $username, $password, $dbname);

//Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
