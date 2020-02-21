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
                    <td>Enter name of the company</td>
                    <td><input type="text" class="form-control" name="name"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" value="Search" class="btn btn-danger" name="search"></td>

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
$sql="SELECT `name`, `manager`, `contactno` FROM `company` WHERE `name`='$name'";
$result=$connection->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    $getname=$row["name"];
      $getmanager=$row["manager"];
      $getcontactno=$row["contactno"];
    
      echo "<form action=''method='POST'>
            <table class ='table'>
            <tr><td>Name</td>
                <td>$getname</td>
            </tr>
            <tr><td>Manager</td>
                <td>$getmanager</td>
            </tr>
            <tr><td>Contactno</td>
                <td>$getcontactno</td>
            </tr>
             <td><button type='submit' value='$name' class='btn btn-danger' name='delete'> Confirm Deletion</button></td>
            </tr>
            </table>
            </form>";
  }
}
else
{
  echo "Invalid company name!";
}
}

if(isset($_POST["delete"]))
{
    $name=$_POST['delete'];
    $server_name="localhost";
    $db_username="root";
    $db_password="";
    $db_name="training";
    $connection=new mysqli($server_name,$db_username,$db_password,$db_name);
    $sql="DELETE FROM `company` WHERE `name`='$name'";
    $result=$connection->query($sql);
    if($result===TRUE)
    {
        echo"deleted succesfully";
    }
    else
    {
        echo"error in deletion";
    }

}
?>
