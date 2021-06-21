<?php
//conexão com banco de dados
$serverName = "localhost";
$userDB = "root";
$passwordDB = "";
$db_name = "crud";

$connect = mysqli_connect($serverName, $userDB, $passwordDB, $db_name);

if(mysqli_connect_error()){
    die("Connection failed: " . mysqli_connect_error());
}

