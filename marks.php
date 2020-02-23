<?php
session_start();
include './stud_navbar.php';



?>

<br>
<br>

<div class="container">
        <div class="row">
            <div class="col col-12 col-sm-3">

        </div>
        <div class="col col-12 col-sm-6">
              <form action="" method="POST">
                <table class="table table-striped">
                  
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
                        <td><input type="number" class="form-control" name="cgpa" min="0" max="10" step="0.1" required></td>
                    </tr>

                    <tr>
                        <td>No Of BackLog </td>
                        <td><input type="text" class="form-control" name="backlog" required  min="0" max="10"></td>
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
$stud_id=$studid=$_SESSION["studid"];;
$sem=$_POST["sem"];
$cgpa=$_POST["cgpa"];
$backlog=$_POST['backlog'];
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);

$sql="SELECT * FROM `stud_marks` WHERE `sem`='$sem' and `stud_id`=$stud_id";
$result= $connection->query($sql);
if($result->num_rows>0)
{
    $sql="UPDATE `stud_marks` SET `cgpa`=$cgpa,back_logs=$backlog WHERE `sem`='$sem' and `stud_id`=$stud_id";
    $result= $connection->query($sql);
    if($result===TRUE)
    {
    echo "<script> alert('Updated Succesfully') </script>";
    }
    else
    {
    echo "Error in insertion" . $connection->error;
    
    }

}

else{

    $sql="INSERT INTO `stud_marks`(`stud_id`, `sem`, `cgpa`,back_logs) VALUES ('$stud_id','$sem','$cgpa',$backlog)";
    $result= $connection->query($sql);
    if($result===TRUE)
    {
    echo "<script> alert('Successfully inserted') </script>";
    }
    else
    {
    echo "Error in insertion" . $connection->error;
    
    }
}





}
?>


