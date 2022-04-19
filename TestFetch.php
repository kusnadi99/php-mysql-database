<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "firman'; #";
$password = "rasyid";

$sql = "SELECT * FROM admin where username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

if ($row = $statement->fetch()) {
    echo "Sukses login : " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

var_dump($statement->fetch());

$connection = null;