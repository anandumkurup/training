<?php
session_start();
include './stud_navbar.php';



?>
<br>
<br>


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


$sql = "SELECT `Id`, `SSLC`, `PlusTwo` FROM `basic_Marks` WHERE  `StudId`=$studid";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo "<table class='table table-striped'>
    <tr class='table-success'>
        <th>SSLC</th>
        <th>Plus Two</th>
   </tr>
  ";
  while($row = $result->fetch_assoc())
  {
     $SSLC= $row["SSLC"];
     $PlusTwo= $row["PlusTwo"];
     echo "
     <tr>
         <td>$SSLC</td>
         <td>$PlusTwo</td>
     </tr>
";
  }
  echo "  </table>";
}


$sql = "SELECT `id`, `stud_id`, `sem`, `cgpa`,back_logs FROM `stud_marks` WHERE `stud_id`=$studid";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    echo "<table class='table table-striped'>
        <tr class='table-success'>
            <th>SEM</th>
            <th>CGPA</th>
            <th>BackLogs</th>
       </tr>
      ";
    while($row = $result->fetch_assoc())
     {
        $sem= $row["sem"];
        $cgpa= $row["cgpa"];
        $back_logs=$row['back_logs'];

        echo "
            <tr>
                <td>$sem</td>
                <td>$cgpa</td>

                <td>$back_logs</td>
            </tr>
       ";

    }


    echo "  </table>";
} 
else 
{
    echo "No Data ";
}

?>


</div>

<div class="col col-12 col-sm-2"></div>

</div>
</div>