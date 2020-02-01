<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-image:url('sky.jpg')";>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item add">
    <a class="nav-link active" href="studprof.php">Profile</a>
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
                        <td>Student ID</td>
                        <td><input type="text" class="form-control"name="stud_id"></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td><input type="text" class="form-control" name="sem"></td>
                    </tr>
                    <tr>
                        <td>Marks</td>
                        <td><input type="text" class="form-control" name="cgpa"></td>
                    </tr>
                     <tr>
                     <td><input type="submit" value="Submit" class="btn btn-success" name="submit"></td>
                     </tr>
                    
                     </table>
                </form>
            </div>

            <div class="col col-12 col-sm-3">
            </div>    
    </body>
</html>
<?php
if(isset($_POST["submit"]))
{
$stud_id=$_POST["stud_id"];
$sem=$_POST["sem"];
$cgpa=$_POST["cgpa"];
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="INSERT INTO `stud_marks`(`stud_id`, `sem`, `cgpa`) VALUES ('$stud_id','$sem','$cgpa')";
$result= $connection->query($sql);
if($result===TRUE)
{
echo "Successfully inserted";
}
else
{
echo "Error in insertion" . $connection->error;

}
}
?>


