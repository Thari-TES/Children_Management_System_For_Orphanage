<?php

include "include/db.php";
?>


<?php

if(isset($_GET['deletestaff'])){

$delete_id = $_GET['deletestaff'];

$delete_pro = "delete from staff where staffId='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One user Has been deleted')</script>";

echo "<script>window.open('dashboard.php?viewStaff','_self')</script>";

}

}

?>

