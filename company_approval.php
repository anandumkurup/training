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
    <th>Company Name</th>
    <th>Manager</th>
    <th>Contact Number</th>
    <th>Action</th>
   
</tr>

<?php
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="SELECT `id`, `name`, `manager`, `contactno`, `username`, 
`password`, `flag` FROM `company` WHERE `flag`=0";
    $res=$connection->query($sql);

if($res->num_rows>0){

    while($row=$res->fetch_assoc()){

        $manager=$row["manager"];
        $contactno=$row["contactno"];
        $name=$row["name"];
        $id=$row["id"];

     
        

        echo "<tr>
        <td> $name </td>
        <td>  $manager </td>

        <td>   $contactno  </td>

        <td><Button type='submit' name='approvebtn'value='$id' class='btn btn-success' > Approve </Button> </td>

        <td><Button type='submit' name='rejectbtn'value='$id' class='btn btn-danger' > Reject </Button> </td>

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