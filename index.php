<?php

include "include/db.php";
?>






<!DOCTYPE html>
<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<head>
	<title>Login Page</title>

   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link rel="icon" href="images/login.ico" type="image/icon type">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square" onClick="window.open('https://www.facebook.com/')"   ></i></span>
					<span><i class="fab fa-instagram" onClick="window.open('https://www.instagram.com/')"  ></i></span>
					<span><i class="fab fa-twitter-square" onClick="window.open('https://www.twitter.com/')"  ></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="index.php" method="post">
              
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="uname" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox" >Remember Me
					</div>
					<div class="form-group">
						<button onclick="down()" name="login" class="btn float-right login_btn">Log in</button>
					</div>
				</form>
			</div>
			<div class="card-footer">

			<div class="d-flex justify-content-center" style="color: rgb(145, 224, 248);">
                    Samadhi Orphanage
				</div>	
			</div>
		</div>
	</div>
</div>


</body>
</html>

<?php

if (isset($_POST['login'])) {
$username=mysqli_real_escape_string($conn,$_POST['uname']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$select="SELECT * from staff Where 
                username='{$username}' and pw='{$password}'";


$qry_check = mysqli_query($conn,$select);                                                                   

if($qry_check){
    if(mysqli_num_rows($qry_check)==1){
        header('Location: dashboard.php');
    }

    else{
       echo '<script>alert("Invalid User Name or Password")</script>';
    }
}
}

                
?>

<?php mysqli_close($connection);?>