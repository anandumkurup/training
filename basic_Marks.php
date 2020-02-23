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
                        <td>SSLC</td>
                        <td>
                     <input type="number" class="form-control" name="sslc" min="1" max="100" step="0.1" required>
                        
                        </td>
                    </tr>

                    <tr>
                        <td>Plus Two</td>
                        <td>
                     <input type="number" class="form-control" name="plustwo" min="1" max="100" step="0.1" required>
                        
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
$stud_id=$studid=$_SESSION["studid"];;
$sslc=$_POST["sslc"];
$plustwo=$_POST["plustwo"];
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="SELECT * FROM `basic_Marks` WHERE `StudId`=$stud_id";
$result= $connection->query($sql);
if($result->num_rows>0)
{

    $sql="UPDATE `basic_Marks` SET `SSLC`=$sslc,`PlusTwo`=$plustwo  WHERE `StudId`=$stud_id";
    $result= $connection->query($sql);
    if($result===TRUE)
    {
        echo "<script> alert('Successfully Updated the Marks') </script>";
    }
    else
    {
    echo "Error in insertion" . $connection->error;
    
    }

}
else{


    $sql="INSERT INTO `basic_Marks`( `StudId`, `SSLC`, `PlusTwo`) VALUES('$stud_id','$sslc','$plustwo')";
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


