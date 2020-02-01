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
      <a class="nav-link" href="index.php">Student Registration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="searchstud.php">Search Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="studdelete.php">Delete Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="studupdate.php">Update Student</a>
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
                    <td>Enter admission number</td>
                    <td><input type="text" class="form-control" name="admno"></td>
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
$admno=$_POST["admno"];
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="SELECT `name`, `admno`, `dept`, `address`, `phoneno` FROM `student` WHERE `admno`=$admno";
$result=$connection->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
      $getname=$row["name"];
      $getdept=$row["dept"];
      $getaddress=$row["address"];
      $getphoneno=$row["phoneno"];
    
      echo "<table class ='table'>
            <tr><td>Name</td>
                <td>$getname</td>
            <tr><td>Department</td>
                <td>$getdept</td>
            </tr>
            <tr><td>Address</td>
                <td>$getaddress</td>
            </tr>
            <tr><td>Phone Number</td>
                <td>$getphoneno</td>
            </tr>
                </table>";
            
  }
}
else
{
  echo "Student not registered";
}
}
?>