<?php

$dbHost = 'mysql'; // RUN "sudo docker inspect 'mysql'" and check the ip of the mysql image
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'demo';

$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$connection) {
    die("Database connection failed");
}