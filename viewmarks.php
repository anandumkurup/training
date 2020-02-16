<?php
session_start();
include './stud_navbar.php';



?>


<div class="container">

<div class="row">
<div class="col col-12 col-sm-2"></div>
<div class="col col-12 col-sm-8">


<?php
$studid=$_SESSION["studid"];
// Create connection
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$conn=new mysqli($server_name,$db_username,$db_password,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`, `stud_id`, `sem`, `cgpa` FROM `stud_marks` WHERE `stud_id`=$studid";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    echo "<table class='table'>
        <tr>
            <th>SEM</th>
            <th>CGPA</th>
       </tr>
       </table>";
    while($row = $result->fetch_assoc())
     {
        $sem= $row["sem"];
        $cgpa= $row["cgpa"];

        echo "<table class='table'>
            <tr>
                <td>$sem</td>
                <td>$cgpa</td>
            </tr>
         </table>";

    }
} 
else 
{
    echo "0 results";
}

?>


</div>

<div class="col col-12 col-sm-2"></div>

</div>
</div>