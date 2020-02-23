<?php
session_start();
include './company_navbar.php';


?>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2">


</div>

<div class="col col-12 col-sm-8">
<form action="" method="POST" style="  border-radius: 5px;
    border: 0px  #aabbcc;
    padding: 40px;
    padding-bottom: 20px;
    margin-top: 20px;
    margin-right: 0px;
    margin-left: 0px;
    -webkit-box-shadow: 13px -11px 11px 3px rgba(0,0,0,0.35);
-moz-box-shadow: 13px -11px 11px 3px rgba(0,0,0,0.35);
box-shadow: 13px -11px 11px 3px rgba(0,0,0,0.35);"> 
<table class="table table-borderless">
<tr>
   <td>Job Title</td>
   <td> <input type="text" name="jobtitle"  class="form-control" required></td>
   
</tr>

<tr>
   <td>Job Description</td>
   <td> <input type="text" name="jobdesc"  class="form-control" required></td>
   
</tr>


<tr>
   <td>SSLC Percentage</td>
   <td> <input type="text" name="sslc"  class="form-control" min="1" max="100" step="0.1" required></td>
   
</tr>


<tr>
   <td>Plus Two Percentage</td>
   <td> <input type="text" name="plstwo"  class="form-control" min="1" max="100" step="0.1" required></td>
   
</tr>

<tr>
   <td> Minimum Degree CGPA</td>
   <td> <input type="text" name="cgpa"  class="form-control" min="1" max="10" step="0.1" required></td>
   
</tr>

<tr>
   <td>No of Backlogs Allowed</td>
   <td> <input type="number" name="bcklog"  class="form-control" min="1" max="10" step="1" required></td>
   
</tr>

<tr>
   <td>Placement Date</td>
   <td> <input type="date" required name="placedate"  class="form-control" min="<?php echo date("Y-m-d") ?>"></td>
   
</tr>

<tr>
   <td>Placement Venue</td>
   <td> <input type="text" name="placevenue"  class="form-control" required></td>
   
</tr>
<tr>
   <td></td>
   <td> <Button type="submit" name="btnSub"  class="btn btn-success"> ADD PLACEMENT INFO </Button> </td>
   
</tr>
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


if(isset($_POST['btnSub'])){

    $CompanyId=$_SESSION['companyid'];

    $jobtitle=$_POST['jobtitle'];
    $jobdesc=$_POST['jobdesc'];
    $sslc=$_POST['sslc'];
    $plstwo=$_POST['plstwo'];
    $cgpa=$_POST['cgpa'];
    $bcklog=$_POST['bcklog'];
    $placedate=$_POST['placedate'];

    $placevenue=$_POST['placevenue'];

    $server_name="localhost";
    $db_username="root";
    $db_password="";
    $db_name="training";
    $connection=new mysqli($server_name,$db_username,$db_password,$db_name);
    $sql="INSERT INTO `placement`(`company_id`, `job_title`, `job_desc`, `sslc_per`, `plus two_per`, `degree_cgpa`, 
    `backlog`, jobdate,`jobvenue`) VALUES($CompanyId,'$jobtitle',
    '$jobdesc',$sslc,$plstwo,$cgpa,$bcklog,'$placedate','$placevenue') ";
        $res=$connection->query($sql);

        if($res===TRUE){
            echo "<script> alert('Placement Details Succesfully')   </script>";
            echo "<script> window.location.href='add_placement.php'   </script>";

        }
        else{
            echo "Error in Updation";
        }

}

?>