<?php

include "include/db.php";
?>


<?php

if(isset($_GET['deletechild'])){

$delete_id = $_GET['deletechild'];

$delete_pro = "delete from childdetails where id='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One user Has been deleted')</script>";

echo "<script>window.open('viewschild.php?viewschild','_self')</script>";

}

}

?>

