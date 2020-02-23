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
                        <td>Message</td>
                        <td>
                        <textarea name="message"cols="60" rows="8" required></textarea>
                        </td>
                    </tr>
                    <tr>
                     <td></td>
                     <td><input type="submit" value="Submit" class="btn btn-success" name="submit" ></td>
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


