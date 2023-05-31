<?php
include 'connection.php';

$id=$_GET['id'];

$sql="SELECT * FROM user where id='$id'";
$result=$connection->query($sql);
?>
<lang="en">
<head>
    <m!DOCTYPE html>
<html eta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Edit Team</title>
</head>
<body>
<div class="container">
    <div
    <div class="row" style="width: 45rem ;" align="center">
        <div class="col-md-12 offset-md-3" style="color: #00a8c6" align="center">
            <h2 align="center">O'zgartirish</h2>
            <form action="update_u.php" method="post" enctype="multipart/form-data">
                <?php
               if($result->num_rows>0){
                    while ($row=$result->fetch_assoc()){
                        ?>
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                
                        <div class="form-group">
                            <label for="ismi">Ismi </label>
                            <input type="text" class="form-control"  value="<?php echo $row['ismi'] ?>"  name="ismi" id="ismi" required>
                        </div>

                        <div class="form-group">
                            <label for="tel">Password</label>
                            <input type="text" class="form-control"  value="<?php echo $row['password'] ?>"  name="password" id="password" required>
                        </div>


                        <div class="form-group">
                            <label for="login">Login </label>
                            <input type="text" class="form-control"  value="<?php echo $row['login'] ?>"  name="login" id="login" required>
                        </div>

                   
                        <input type="submit" value="saqlash" name="s1" class="btn btn-primary">
                        <?php
                    }
                }
                ?>
            </form>
        </div>
</body>
</html>