<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "kusnadi";
$password = "rahasia";

$sql = "SELECT * FROM admin where username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $username);
$statement->bindParam(2, $password);
$statement->execute();

$success   = false;
$find_user = null;
foreach ($statement as $row) {
    // sukses
    $success   = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;