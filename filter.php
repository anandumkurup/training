<?php
include './admin_navbar.php';


?>

<br>

<br>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-12">


</div>

<div class="col col-12 col-sm-12">
<form action="" method="post"> 
<table class="table table-striped">
<tr class="table-primary">
    <th>Company Name</th>
    <th>Job Title</th>
    <th>Job Description</th>
    <th>SSLC Percentage</th>

    <th>Plus Two Percentage</th>

    <th>Degree CGPA</th>


    <th>Backlogs</th>

    <th>Job Venue</th>

    <th>Job Date</th>
   

    <th>Action</th>
</tr>

<?php
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="SELECT p.`id`, c.name, `job_title`, `job_desc`, `sslc_per`, `plus two_per`,
 `degree_cgpa`, `backlog`, `jobvenue`, `jobdate` FROM `placement` p JOIN company c 
 ON c.id=p.`company_id` WHERE `jobdate`>=now() ";
    $res=$connection->query($sql);

if($res->num_rows>0){

    while($row=$res->fetch_assoc()){

        $id=$row["id"];
        $Cname=$row["name"];
        $job_title=$row["job_title"];
        $job_desc=$row["job_desc"];
        $sslc_per=$row["sslc_per"];
        $plustwo_per=$row["plus two_per"];
        $degree_cgpa=$row["degree_cgpa"];

        $backlog=$row["backlog"];
        $jobvenue=$row["jobvenue"];
        $jobdate=$row["jobdate"];

     
        

        echo "<tr>

        <td> $Cname </td>
        <td>  $job_title </td>
        <td>  $job_desc </td>

        <td>   $sslc_per  </td>

        <td>    $plustwo_per </td>


        <td>    $degree_cgpa</td>


        <td>      $backlog </td>

        <td>           $jobvenue</td>

        <td>         $jobdate </td>

        <td><Button type='submit' name='approvebtn'value='$id' class='btn btn-success' > FILTER STUDENTS </Button> </td>


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

<div class="col col-12 col-sm-12">


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