<?php

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'userdata';

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die('Connection faild: ' . mysqli_connect_error());
}