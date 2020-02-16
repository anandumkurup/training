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
    $sql="SELECT `name`, `manager`, `contactno` FROM `company` WHERE `name`='$name'";
    $result= $connection->query($sql);
    if($result->num_rows>0)
    {
    while($row=$result->fetch_assoc())
    {
      $getname=$row["name"];
      $getmanager=$row["manager"];
      $getcontactno=$row["contactno"];
    
      echo "<table class ='table'>
            <tr><td>Name</td>
                <td>$getname</td>
            </tr>
            <tr><td>Manager</td>
                <td>$getmanager</td>
            </tr>
            <tr><td>Contactno</td>
                <td>$getcontactno</td>
            </tr>
                </table>";
            
  }
}
else
{
  echo "invalid company name";
}
}
?>