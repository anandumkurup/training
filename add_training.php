<?php
session_start();
include './admin_navbar.php';


?>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2">


</div>

<div class="col col-12 col-sm-8">
<form action="" method="POST" > 
<table class="table table-borderless">
<tr>
   <td> Title</td>
   <td> <input type="text" name="title"  class="form-control" required></td>
   
</tr>

<tr>
   <td> Description</td>
   <td> <input type="text" name="desc"  class="form-control" required></td>
   
</tr>


<tr>
   <td>Link</td>
   <td> <input type="text" name="link"  class="form-control" required> </td>
   
</tr>


<tr>
   <td></td>
   <td> <Button type="submit" name="btnSub"  class="btn btn-success"> ADD  </Button> </td>
   
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


    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $link=$_POST['link'];


    $server_name="localhost";
    $db_username="root";
    $db_password="";
    $db_name="training";
    $connection=new mysqli($server_name,$db_username,$db_password,$db_name);
    $sql="INSERT INTO `training_data`( `Title`, `Description`, `Link`) 
     VALUES('$title','$desc','$link') ";
        $res=$connection->query($sql);

        if($res===TRUE){
            echo "<script> alert('Training Data added Succesfully')   </script>";

        }
        else{
            echo "Error in Updation";
        }

}

?>