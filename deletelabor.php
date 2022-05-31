<?php

include "include/db.php";
?>


<?php

if(isset($_GET['deletelabor'])){

$delete_id = $_GET['deletelabor'];

$delete_pro = "delete from labor where laborId='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One user Has been deleted')</script>";

echo "<script>window.open('viewlabor.php?viewlabor','_self')</script>";

}

}

?>

