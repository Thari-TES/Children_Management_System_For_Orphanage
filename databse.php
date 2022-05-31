<?php

$connection = mysqli_connect('localhost' ,'root','','test');

if(mysqli_connect_errno()){
    die("data base error".mysqli_connect_error());
}
else{
    //echo '<script>alert("xxx")</script>';
}

?>