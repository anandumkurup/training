<?php
session_start();
include './stud_navbar.php';



?>
<div class="container">
        <div class="row">
            <div class="col col-12 col-sm-3">

        </div>
        <div class="col col-12 col-sm-6">
              <form action="" method="POST">
                <table class="table">
                  
                    <tr>
                        <td>Semester</td>
                        <td>
                        <select name="sem" class="form-control">

                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        <option value="S4">S4</option>
                        <option value="S5">S5</option>
                        <option value="S6">S6</option>
                        
                        </select>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>CGPA</td>
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
$stud_id=$studid=$_SESSION["studid"];;
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


