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