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

    $i=0;
    $placementId=$_POST['approvebtn'];
    $server_name="localhost";
    $db_username="root";
    $db_password="";
    $db_name="training";
    $connection=new mysqli($server_name,$db_username,$db_password,$db_name);
     $Sql11="DELETE FROM `placement_filter` WHERE `PlacementId`=$placementId";
   $res11=$connection->query($Sql11); 



     $sql="SELECT  `sslc_per`, `plus two_per`, `degree_cgpa`, `backlog` FROM `placement` WHERE `id`=$placementId";
        $res=$connection->query($sql);

        if($res->num_rows>0){

            while($row=$res->fetch_assoc()){

                $sslc_perCriteria=$row['sslc_per'];
                $plus_two_perCriteria=$row['plus two_per'];
                $degree_cgpaCriteria=$row['degree_cgpa'];
                $backlogCriteria=$row['backlog'];

                $Studsql="SELECT DISTINCT(`stud_id`) FROM `stud_marks`";
                $res1=$connection->query($Studsql);
        
                if($res1->num_rows>0){
        
                    while($row=$res1->fetch_assoc()){

                        $stud_id=$row['stud_id'];

 $Sql3="SELECT avg(`cgpa`)cgpa,sum(`back_logs`)back_logs FROM `stud_marks` WHERE `stud_id`=$stud_id";
$res3=$connection->query($Sql3);
if($res3->num_rows>0){
        
    while($row=$res3->fetch_assoc()){

 $studcgpa=$row['cgpa'];
 $studbacklog=$row['back_logs'];

if($studcgpa>=$degree_cgpaCriteria && $studbacklog<=$backlogCriteria)
{

    $Sql4="SELECT `Id`, `StudId`, `SSLC`, `PlusTwo` FROM `basic_Marks` WHERE `StudId`=$stud_id";
$res4=$connection->query($Sql4);
if($res4->num_rows>0){
        
    while($row=$res4->fetch_assoc()){

        $SSLC=$row['SSLC'];

        $PlusTwo=$row['PlusTwo'];

        if($SSLC>=$sslc_perCriteria && $PlusTwo>=$plus_two_perCriteria)
        {
            $i++;

             $Sql5="INSERT INTO `placement_filter`(`PlacementId`, `StudId`, `FilteredDate`)
             VALUES( $placementId,$stud_id,now())";
            $res5=$connection->query($Sql5);     


        }


    }

}



}



    }

}


                    }
                }






            }
            // echo "<script> alert('Updated Succesfully')   </script>";

            // echo "<script> window.location.href='student_approval.php'   </script>";

        }
        else{
            echo "Error in Updation";
        }


echo "<script>alert(' $i students are filtered for this placement drive')  </script>";


}

?>