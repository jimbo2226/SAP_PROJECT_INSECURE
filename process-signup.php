<?php

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, email, password_hash)
        VALUES ('{$_POST["name"]}', '{$_POST["email"]}', '{$_POST["password"]}')";

$result = $mysqli->query($sql);

if ($result) {
    header("Location: signup-success.html");
    exit;
} else {
    // handle error
}

?>







