

<?php
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
<tr class="table-secondary">
    <th>Title </th>
    <th>Description</th>

    <th>Website</th>

</tr>

<?php
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="SELECT `Id`, `Title`, `Description`, `Link` FROM `training_data` WHERE 1
";
    $res=$connection->query($sql);

if($res->num_rows>0){

    while($row=$res->fetch_assoc()){

        $Title=$row["Title"];
        $Description=$row["Description"];
        $Link=$row["Link"];

     
        

        echo "<tr>
        <td> $Title </td>
        <td>  $Description </td>

        <td> <a href='$Link' target='_blank' > View Website </a>  </td>

       

    </tr>";




    }

}
else{
    echo "<script> alert('No new Company details available')   </script>";

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