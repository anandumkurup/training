<?php
include './admin_navbar.php';


?>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2">


</div>

<div class="col col-12 col-sm-8">
<form action="" method="post"> 
<table class="table">
<tr>
    <th>Student Name</th>
    <th>Admno</th>
    <th>Department</th>
    <th>Phone Number</th>

    <th>Action</th>
   
</tr>

<?php
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="SELECT `id`, `name`, `admno`, `dept`, `address`, `phoneno`, `username`, `password`, 
`flag` FROM `student` WHERE `flag`=0";
    $res=$connection->query($sql);

if($res->num_rows>0){

    while($row=$res->fetch_assoc()){

        $admno=$row["admno"];
        $dept=$row["dept"];
        $phoneno=$row["phoneno"];
        $name=$row["name"];
        $id=$row["id"];

     
        

        echo "<tr>
        <td> $name </td>
        <td>  $admno </td>

        <td>   $dept  </td>

        <td>   $phoneno  </td>

        <td><Button type='submit' name='approvebtn'value='$id' class='btn btn-success' > Approve </Button> </td>

        <td><Button type='submit' name='rejectbtn'value='$id' class='btn btn-danger' > Reject </Button> </td>

    </tr>";




    }

}
else{
    echo "<script> alert('No new Student details available')   </script>";

}

?>
</table>
</form>
</div>

<div class="col col-12 col-sm-2">


</div>
</div>
</div>

    
</body>
</html>


<?php
if(isset($_POST['approvebtn'])){

    $studId=$_POST['approvebtn'];
    $server_name="localhost";
    $db_username="root";
    $db_password="";
    $db_name="training";
    $connection=new mysqli($server_name,$db_username,$db_password,$db_name);
    $sql="UPDATE `student` SET `flag`=1 WHERE `id`=$studId";
        $res=$connection->query($sql);

        if($res===TRUE){
            echo "<script> alert('Updated Succesfully')   </script>";

            echo "<script> window.location.href='student_approval.php'   </script>";

        }
        else{
            echo "Error in Updation";
        }

}

?>