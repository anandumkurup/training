<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: grey;" >
<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item add">
    <h4><b>COMPANY LOGIN</b></h4>
    </li>
   </ul>
</nav> 
<div class="container">
        <div class="row">
            <div class="col col-12 col-sm-3">

        </div>
        <div class="col col-12 col-sm-6">
              <form action="" method="post">
                <table class="table">
                        <td>Username</td>
                        <td><input type="text" class="form-control"name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control" name="password"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" value="Login" class="btn btn-success" name="login"></td>
                    </tr>
                    </table>
                </form>
            </div>

            <div class="col col-12 col-sm-3">
            </div>    
    </body>
</html>
<?php
session_start();
if(isset($_POST["login"]))
{
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$username=$_POST["username"];
$password=$_POST["password"];
$sql="SELECT `id`, `name`, `manager`, `contactno`, `username`, `password` FROM `company` WHERE `username`='$username' and `password`='$password'";
$result=$connection->query($sql);

if($result->num_rows>0)
{

    while($row=$result->fetch_assoc())
    {
        $id=$row["id"];
        $name=$row["name"];
        $_SESSION["id"]=$id;
        $_SESSION["name"]=$name;
        echo$id=$row["id"];
        header('Location:company.php');
    }


}
else
{
    echo "Invalid Username or password";
}
}
?>