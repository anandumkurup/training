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
    
      echo "<table class ='table table-striped'>
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