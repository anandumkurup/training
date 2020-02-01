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
    <h4><b>NOTIFICATION</b></h4>
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
                        <td>Message</td>
                        <td>
                        <textarea name="message"cols="60" rows="8"></textarea>
                        </td>
                    </tr>
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
if(isset($_POST["submit"]))
{
$message=$_POST["message"];
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="INSERT INTO `notification`(`message`,`Date`) VALUES ('$message',now())";
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


