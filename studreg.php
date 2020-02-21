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
      <a class="nav-link active" href="#">Student Registration</a>
    </li>
   
  </ul>
</nav>
    
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-3">

        </div>
        <div class="col col-12 col-sm-6">
              <form action="" method="post" enctype="multipart/form-data">
                <table class="table">
                    <h1><center><strong>REGISTRATION</strong></center></h1>

                    <tr>
                        <td><b>Upload Photo</b></td>
                        <td> <input class="file-upload-browse btn btn-gradient-primary" type="file" name="fileToUpload" id="fileToUpload"></td>
                    </tr>

                    <tr>
                        <td><b>Name</b></td>
                        <td><input type="text" class="form-control"name="name"></td>
                    </tr>
                    <tr>
                        <td><b>Admission Number</b></td>
                        <td><input type="text" class="form-control" name="admno"></td>
                    </tr>
                    <tr>
                        <td><b>Department</b></td>
                        <td><select class="form-control" name="dept">
                        <option value="Computer Science">Computer Science</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Biochemistry">Biochemistry</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Address</b></td>
                        <td><input type="text" class="form-control" name="address"></td>
                    </tr>
                    <tr>
                        <td><b>Phone Number</b></td>
                        <td><input type="text" class="form-control" name="phoneno"></td>
                    </tr>
                    <tr>
                        <td><b>Username</b></td>
                        <td><input type="text" class="form-control" name="username"></td>
                    </tr>
                    <tr>
                        <td><b>Password</b></td>
                        <td><input type="password" class="form-control" name="password"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="SUBMIT" class="btn btn-success" name="submit"></td>
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
    $server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);



    $target_dir = "photos/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $tr=mysqli_real_escape_string($connection,$target_file);
   
   
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
   } else {
     //echo "Sorry, there was an error uploading your file.";
   }

$name=$_POST["name"];
$admno=$_POST["admno"];
$dept=$_POST["dept"];
$address=$_POST["address"];
$phoneno=$_POST["phoneno"];
$username=$_POST["username"];
$password=$_POST["password"];

$sql="INSERT INTO `student`(prof_pic_link,`name`, `admno`, `dept`, `address`, `phoneno`, `username`, `password`) VALUES ('$tr','$name',$admno,'$dept','$address',$phoneno,'$username','$password')";
$result= $connection->query($sql);
if($result===TRUE)
{
echo "<script> alert('Successfully inserted')  </script>";
}
else
{
echo "Error in insertion" . $connection->error;

}
}
?>


