<?php
include './admin_navbar.php';


?>
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
                    <td><input type="submit" value="SEARCH" class="btn btn-warning" name="search"></td>

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
$sql="SELECT `name`, `admno`, `dept`, `address`, `phoneno`,`username`,`password` FROM `student` WHERE `admno`=$admno";
$result=$connection->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    $getname=$row["name"];
    $getdept=$row["dept"];
    $getaddress=$row["address"];
    $getphoneno=$row["phoneno"];
    $getpassword=$row["password"];
    $getusername=$row["username"];
  
    echo "<form action=''method='POST'>

    <table class='table'>
    <tr><td>Name</td>
    <td><input type='text' name='newname' value='$getname' class='form-control'></td></tr>
    <tr><td>Admno</td>
    <td><input type='text' value='$admno' class='form-control' readonly></td></tr>
    <tr><td>Department</td>
    <td><select class='form-control' name='newdept' value='$getdept' class='form-control' >
    <option value='Computer Science'>Computer Science</option>
    <option value='Commerce'>Commerce</option>
    <option value='Mathematics'>Mathematics</option>
    <option value='Electronics'>Electronics</option>
    <option value='Biochemistry'>Biochemistry</option>
    </select></td></tr>
    <tr><td>Address</td>
    <td><input type='text' name='newaddress' value='$getaddress' class='form-control'></td></tr>
    <tr><td>Phone number</td>
    <td><input type='text' name='newphoneno' value='$getphoneno' class='form-control'></td></tr>
    <tr><td>Username</td>
    <td><input type='text' name='newusername' value='$getusername' class='form-control'></td></tr>
    <tr><td>Password</td>
    <td><input type='text' name='newpassword' value='$getpassword' class='form-control'></td></tr>
        <tr><td></td>
        <td><button type='submit' value='$admno' class='btn btn-danger' name='update'>UPDATE</button></td>
    </tr>
    </table>
    </form>";
  }
}
else
{
  echo "Invalid admission number";
}
}
if(isset($_POST["update"]))
{
  
    $admno=$_POST['update'];
    $server_name="localhost";
    $db_username="root";
    $db_password="";
    $db_name="training";
    $connection=new mysqli($server_name,$db_username,$db_password,$db_name);
    $updatedname=$_POST["newname"];
    $updateddept=$_POST["newdept"];
    $updatedaddress=$_POST["newaddress"];
    $updatedphoneno=$_POST["newphoneno"];
    $updatedpassword=$_POST["newpassword"];
    $updatedusername=$_POST["newusername"];
    $sql="UPDATE `student` SET `name`='$updatedname',`dept`='$updateddept',`address`='$updatedaddress',`username`='$updatedusername',`password`='$updatedpassword',`phoneno`=$updatedphoneno WHERE admno=$admno";
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
?>




