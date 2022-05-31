<?php

include "include/db.php";
?>


<?php

if(isset($_GET['deletedon'])){

$delete_id = $_GET['deletedon'];

$delete_pro = "delete from donars where donarId='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One Donor Has been deleted')</script>";

echo "<script>window.open('viewdonation.php?viewdonation','_self')</script>";

}

}

?>

