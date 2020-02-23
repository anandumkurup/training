

<?php
session_start();
include './stud_navbar.php';


?>
<br>
<br>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2">


</div>

<div class="col col-12 col-sm-8">
<form action="" method="post"> 
<table class="table table-striped">
<tr class="table-warning">
    <th>Company Name</th>
   

    <th>Filtered Date</th>

    <th>Placement Title</th>
    <th>Placement Venue</th>
    <th>Placement Date</th>

</tr>

<?php
$studid=$_SESSION["studid"];
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="SELECT `FilteredDate`,s.name,s.dept,s.admno,c.name cname,p.`job_title`,p.`jobvenue`,p.`jobdate`  FROM `placement_filter` pf 
join student s on s.id=pf.`StudId` 
join placement p on p.id=pf.`PlacementId`
JOIN company c on p.company_id=c.id where s.id=$studid
";
    $res=$connection->query($sql);

if($res->num_rows>0){

    while($row=$res->fetch_assoc()){

        $name=$row["name"];
        $dept=$row["dept"];
        $admno=$row["admno"];
        $cname=$row["cname"];

        $job_title=$row["job_title"];
        $jobvenue=$row["jobvenue"];
        $jobdate=$row["jobdate"];

        $FilteredDate=$row["FilteredDate"];

     
        

        echo "<tr>
        <td> $cname </td>
   

        <td>  $FilteredDate </td>

        <td>  $job_title </td>
        <td>  $jobvenue </td>
        <td>  $jobdate </td>

       

    </tr>";




    }

}
else{
    echo "<script> alert('You are NOT yet selected for a placement drive')   </script>";

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

    $CompanyId=$_POST['approvebtn'];
    $server_name="localhost";
    $db_username="root";
    $db_password="";
    $db_name="training";
    $connection=new mysqli($server_name,$db_username,$db_password,$db_name);
    $sql="UPDATE `company` SET `flag`=1 WHERE `id`=$CompanyId";
        $res=$connection->query($sql);

        if($res===TRUE){
            echo "<script> alert('Updated Succesfully')   </script>";
            echo "<script> window.location.href='company_approval.php'   </script>";

        }
        else{
            echo "Error in Updation";
        }

}

?>