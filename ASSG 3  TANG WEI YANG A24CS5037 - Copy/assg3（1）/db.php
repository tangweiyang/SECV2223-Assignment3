<?php

$host = "sql202.infinityfree.com";
$user = "if0_42204235";
$password = "********";
$database = "if0_42204235_contactdb";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>