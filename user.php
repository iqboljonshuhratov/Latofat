<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Kategory</title>

    <style>
button{
margin-left: 30px;
}
a{
    text-decoration: none;
   color: black;
}
    </style>
</head>
<body>
<div class="container">
    <h2 style="color: #00a8c6 ;"  >
    <center>
Users
</center> 
</h2>
<div class="container">
<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
<form class="form-inline">
<!-- <button class="btn btn-sm btn-secondary" type="button"><a href="index.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg> Index oynasi</a></button> -->
    <button class="btn btn-success" type="button"><a href="admin.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg> Admin panel</a> </button>
    <button class="btn btn-success" type="button"><a href="./categoriyalar.php" >Categoriyalar</a>  </button>
    <button class="btn btn-success" type="button"><a href="./moda.php" >Modalar olami</a> </button>
    <button class="btn btn-success" type="button"><a href="team.php" >Teams </a> </button>
    <button class="btn btn-success" type="button"><a href="user.php" >User oynasi </a> </button>
    <button class="btn btn-sm btn-secondary" type="button"><a href="user.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>User oynasi</a></button>
  </form>

</nav>
</div>







 <!-- <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
<!-- <form class="form-inline"> -->

    <!-- <button class="btn btn-sm btn-secondary" type="button"><a href="creat_u.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg> User create</a></button>
  </form>  
</nav> --> -->
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ismi</th>
            <th>Password</th>
            <th>Login</th>
            <th>Status</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM user";
        $result = $connection->query($sql);
        if($result->num_rows>0){

            while($row = $result->fetch_assoc())
            {
                ?>
                <tr>
<!--                    <td>--><?php //echo $row['id']?><!--</td>-->
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['ismi']?></td>
                    <td><?php echo $row['password']?></td>
                    <td><?php echo $row['login']?></td>
                    <td><?php echo $row['status']?></td>
                    </td>

                    <td>  
                        <form action="edit_u.php" methog="GET">
                            <input type="hidden" name="id" value="<?php echo($row['id'])?>">
                            <button type="submit" class="btn btn-primary">O'zgartirish</button>
                        </form>
                    </td>

                    <td>
                        <form action="delete_u.php" method="post">
                            <input type="hidden" name="id" value="<?php echo($row['id'])?>">
                            <button type="submit" class="btn btn-danger">O'chirish</button>

                        </form>

                    </td>
                </tr>
            <?php }}?>
        </tbody>
    </table>
</div>

</body>
</html>