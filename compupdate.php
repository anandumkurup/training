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
    <li class="nav-item">
      <a class="nav-link" href="companyreg.php">Company Registration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="companysearch.php">Search Company</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="companydel.php">Delete Company</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="compupdate.php">Update Company</a>
    </li>
  </ul>
</nav>
    
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-3">

        </div>
            <div class="col col-12 col-sm-6">
              <form action="" method="POST">
                <table class="table">
                    <tr>
                    <td>Enter name</td>
                    <td><input type="text" class="form-control" name="name"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" value="SEARCH" class="btn btn-success" name="search"></td>

                    </tr>
                    </table>
                    </form>
            </div>
            <div class="col col-12 col-sm-3">
            </div>    
    </body>
</html>
<?php
if(isset($_POST["search"]))
{
    $name=$_POST["name"];
    $server_name="localhost";
    $db_username="root";
    $db_password="";
    $db_name="training";
    $connection=new mysqli($server_name,$db_username,$db_password,$db_name);
    $sql="SELECT `name`, `manager`, `contactno`,`username`,`password` FROM `company` WHERE `name`='$name'";
    $result= $connection->query($sql);
    if($result->num_rows>0)
    {
    while($row=$result->fetch_assoc())
    {
      $getname=$row["name"];
      $getmanager=$row["manager"];
      $getcontactno=$row["contactno"];
      $getpassword=$row["password"];
      $getusername=$row["username"];
    
      echo "<form action=''method='POST'>

    <table class='table'>
    <tr><td>Name</td>
    <td><input type='text' value='$getname' class='form-control' readonly></td></tr>
    <tr><td>Manager</td>
    <td><input type='text' name='newmanager' value='$getmanager' class='form-control'></td></tr>
    <tr><td>Contact number</td>
    <td><input type='text' name='newcontactno' value='$getcontactno' class='form-control'></td></tr>
    <tr><td>Username</td>
    <td><input type='text' name='newusername' value='$getusername' class='form-control'></td></tr>
        <tr><td>Password</td>
    <td><input type='text' name='newpassword' value='$getpassword' class='form-control'></td></tr>
        <tr><td></td>
        <td><button type='submit' value='$name' class='btn btn-danger' name='update'>UPDATE</button></td>
    </tr>
    </table>
    </form>";
  }
}
else
{
  echo "invalid company name";
}
}

if(isset($_POST["update"]))
{
    $name=$_POST['update'];
    $server_name="localhost";
    $db_username="root";
    $db_password="";
    $db_name="training";
    $connection=new mysqli($server_name,$db_username,$db_password,$db_name);
    $updatedmanager=$_POST["newmanager"];
    $updatedcontactno=$_POST["newcontactno"];
    $updatedpassword=$_POST["newpassword"];
    $updatedusername=$_POST["newusername"];
    $sql="UPDATE `company` SET `manager`='$updatedmanager',`contactno`=$updatedcontactno,`username`='$updatedusername',`password`='$updatedpassword' WHERE `name`='$name'";
    $result=$connection->query($sql);
    if($result===TRUE)
    {
        echo"updated succesfully";
    }
    else
    {
        echo"error in updation".$connection->error;
    }

}