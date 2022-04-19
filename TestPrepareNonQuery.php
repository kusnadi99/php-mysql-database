<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "firman";
$password = "rasyid";

$sql = "INSERT INTO admin (username, password) values (:username, :password);";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$connection = null;