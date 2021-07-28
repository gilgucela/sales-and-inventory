<?php

// print_r(PDO::getAvailableDrivers());

$host = "localhost";
$username = "root";
$password = "";
$dbname = "psu_gradequiz";

//data source name
$dsn = "mysql:host=$host;dbname=$dbname";

//create a PDO instance / connection;
$conn = new PDO($dsn,$username,$password);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

return $conn;


