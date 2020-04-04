<?php

// VARIABILI DB DAL ENV OCP
$user = $_ENV["MYSQL_USER"];
$pass = $_ENV["MYSQL_PASSWORD"];
$host = $_ENV["MARIADB_SERVICE_HOST"];
$port = $_ENV["MARIADB_SERVICE_PORT"];
$db   = $_ENV["MYSQL_DATABASE"];

// Create connection
$conn = new mysqli($host, $user, $pass, $db, $port);





 ?>
