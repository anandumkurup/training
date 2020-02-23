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

$sql = "SELECT prof_pic_link,`id`, `name`, `admno`, `dept`, `address`, `phoneno`, `username`, `password`, `flag` FROM `student` WHERE `id`=$studid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name= $row["name"];
        $admno= $row["admno"];
        $prof_pic_link=$row["prof_pic_link"];

        $dept= $row["dept"];
        $address= $row["address"];
        $phoneno= $row["phoneno"];
       echo "<table class='table table-borderless table-striped'>

       <tr>

<td>  </td>

<td> <img src='./$prof_pic_link'  class='rounded-circle' height='250' width='250' </td>

       </tr>

       <tr>
           <td>NAME</td>
           <td>$name</td>
       </tr>
       <tr>
           <td>Admno</td>
           <td>$admno</td>
       </tr>
       <tr>
           <td>dept</td>
           <td> $dept</td>
       </tr><tr>
           <td>address</td>
           <td>$address</td>
       </tr><tr>
           <td>phoneno</td>
           <td>$phoneno</td>
       </tr><tr>
           <td></td>
           <td></td>
       </tr>
       </table>";

    }
} else {
    echo "0 results";
}

?>

</div>
<div class="col col-12 col-sm-2"></div>
</div>




</div>




