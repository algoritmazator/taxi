<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'taxi';

$db = mysqli_connect($server, $user, $password, $db); 
if(!$db){
    echo "Что-то пошло не так!";
    exit;
}