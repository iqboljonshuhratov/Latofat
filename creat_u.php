<?php 
include('connection.php');
if(isset($_POST['s1'])){
    $ismi = $_POST['ismi'];
    $password = $_POST['password'];
    $login = $_POST['login']; 
    $sql = "INSERT INTO user(ismi, password, login) 
    VALUES ('$ismi','$password','$login')";
if ($connection->query($sql)) 
{
  ?>
  <script type="javascript">alert("Saqlandi")</script>
  <?php
    header("Location:user.php");
} else echo 'xato!' . $connection->error;
}
?>

<html>
    <head>
        <title>Create user</title> 
    </head>
    <body>
    <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="ismi">Ismi </label>
    <input name="ismi" type="text" class="form-control" id="ismi" aria-describedby="emailHelp" placeholder="Isminggizni yozing">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password yozing">
  </div>
  
  <div class="form-group">
    <label for="login">Login </label>
    <input name="login" type="text" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Logininggizni yozing">
  </div> 
  <button class="btn btn-primary" type="submit" name="s1">Save</button>


</form>
    </body>