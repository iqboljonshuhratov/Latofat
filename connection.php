<?php
$username = 'root';
$password = '';
$host = 'localhost';
$dbname = 'modalar_olami';
$connection = new mysqli($host, $username, $password, $dbname);
if ($connection->connect_error) {
    die ("Connectionda xatolik bor" . $connection->connect_error);
} else echo " ";