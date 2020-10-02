<?php
    //for database connection
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db  = 'script';

    $conn = new mysqli($host, $username, $password, $db) or die("Cannot connect to database");

?>

