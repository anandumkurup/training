<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: grey;">
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item add">
    <h4><b>PLACEMENT</b></h4>
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
                    <!-- <tr>
                        <td>Company ID</td>
                        <td><input type="text" class="form-control"name="company_id"></td>
                    </tr> -->
                    <tr>
                        <td>Job Title</td>
                        <td><input type="text" class="form-control" name="job_title"></td>
                    </tr>
                    <td>Job Description</td>
                        <td>
                        <textarea name="job_desc"cols="60" rows="8"></textarea>
                        </td>
                    <tr>
                    <td>Criteria</td>
                        <td>
                        <textarea name="criteria"cols="60" rows="8"></textarea>
                        </td>
                    <tr>
                     <td></td>
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
session_start();
if(isset($_POST["submit"]))
{
 $company_id=$_SESSION["companyid"];
$job_title=$_POST["job_title"];
$job_desc=$_POST["job_desc"];
$criteria=$_POST["criteria"];
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="INSERT INTO `placement`(`company_id`, `job_title`, `job_desc`, `criteria`) VALUES ('$company_id','$job_title','$job_desc','$criteria')";
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


