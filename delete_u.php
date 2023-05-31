<?php
include 'connection.php';
$id = $_POST['id'];
$sql = "DELETE FROM user where id='$id'";
if ($connection->query($sql) === TRUE) {
    header("Location:user.php");
} else echo $connection->error;