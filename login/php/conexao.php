<?php

$conn = new MySQLi('localhost', 'root', '', 'clinica');

if($conn->connect_error){
    die("Conection failed: ". $conn->connect_error);
}
?>