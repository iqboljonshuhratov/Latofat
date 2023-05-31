<?php
include 'connection.php';
// echo $_POST['ismi'];
if (isset($_POST['ismi']) 
&& isset($_POST['password'])  
&& isset($_POST['login']) 

) {
   echo 121; 
    $ismi = $_POST['ismi'];
    $login = $_POST['login'];
    $password = $_POST['password'];
 
    $id = intval($_POST['id']);

    $sql = "UPDATE user SET  ismi='$ismi', password='$password', login='$login'   
       WHERE id = '$id';";
    if ($connection->query($sql)) {
        header('Location: user.php'); 
    } else echo 'xato!' . $connection->error;
}

$connection->close();