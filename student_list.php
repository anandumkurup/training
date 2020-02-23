

<?php
include './admin_navbar.php';


?>
<br>
<br>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2">


</div>

<div class="col col-12 col-sm-8">
<form action="" method="post"> 



<?php
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";
$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="SELECT `id`, `prof_pic_link`, `name`, `admno`, `dept`, `address`, `phoneno`, `username`, `password`, `flag` 
FROM `student` WHERE `flag`=1
";
    $res=$connection->query($sql);

if($res->num_rows>0){

    echo "<table class='table table-borderless table-striped'>
   <tr class='table-primary'>
   <td>  IMAGE </td>

   <td>  NAME </td>
   <td>  ADMNO </td>
   <td>  DEPT </td>
   <td>  ADDRESS </td>
   <td>  PHONE </td>
   </tr>

    
    ";

    while($row = $res->fetch_assoc()) {
        $name= $row["name"];
        $admno= $row["admno"];
        $prof_pic_link=$row["prof_pic_link"];

        $dept= $row["dept"];
        $address= $row["address"];
        $phoneno= $row["phoneno"];
     echo"

       <tr>



<td> <img src='./$prof_pic_link'  class='rounded-circle' height='150' width='150' </td>

           <td>$name</td>
    
      
           <td>$admno</td>
    
           <td> $dept</td>
 
           <td>$address</td>

           <td>$phoneno</td>
    
       </tr>
      ";

    }

    echo " </table>";

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