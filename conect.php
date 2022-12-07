<?php 
$banK = "crudphp2022";
$host = "127.0.0.1";
$user_bd = "root"; 
$pass_bd = "";
$charset = "utf8";

$config = "mysql:dbname=$bank;";
$config .= "host=$host;";
$config .= "charset=$charset"; 


$conn = new PDO($config,$user_bd,$pass_bd); // ------ Sintaxe PDO
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $banco = "u339401739_cadastro";
// $host = "localhost";
// $user_bd = "u339401739_proflucas"; 
// $pass_bd = "199010";
// $charset = "utf8";

// $config = "mysql:dbname=$banco;";
// $config .= "host=$host;";
// $config .= "charset=$charset"; 












?>