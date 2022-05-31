<?php

include "include/db.php";
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>
    Samadhi Orphanage
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./css/bootstrap.min.css" rel="stylesheet" />
<link href="./css/dashboard.css?v=2.0.1" rel="stylesheet" />
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="dashboard.php" class="simple-text logo-normal">
          Samadhi Orphanage
        </a>
      </div>


      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="fa fa-tachometer"></i>
              <p>OverView</p>
            </a>
          </li>
          <li class="active">
            <a data-toggle="collapse" href="#componentsExamples" aria-expanded="true">
              <i class="fa fa-money"></i>
              Donations <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav">
                <li>
                  <a href="donation.php">
                     Add Donations 
                  </a>
                </li>
                <li>
                  <a href="viewdonation.php">
                     View Donatios 
                  </a>
                </li>
                
                </ul>
                
          </div>
         
          <li class="active">
            <a data-toggle="collapse" href="#componentsExamples" aria-expanded="true">
              <i class="fa fa-user-plus"></i>
              Staff <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav">
                <li>
                  <a href="staff.php">
                     Add Staff 
                  </a>
                </li>
                <li>
                  <a href="viewstaff.php">
                       View Staff 
                  </a>
                </li>
                </ul>
          </div>
          
          <li class="active">
            <a data-toggle="collapse" href="#componentsExamples" aria-expanded="true">
              <i class="fa fa-child"></i>
              Child <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav">
                <li>
                  <a href="child.php">
                     Add Child
                  </a>
                </li>
                <li>
                  <a href="viewschild.php">
                       View Child
                  </a>
                </li>
                </ul>
          </div>

          <li class="active">
            <a data-toggle="collapse" href="#componentsExamples" aria-expanded="true">
              <i class="fa fa-user-circle"></i>
              Labour <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav">
                <li>
              <a href="labor.php">
                     Add Labour
                  </a>
                </li>
                <li>
                  <a href="viewlabor.php">
                       View Labour 
                  </a>
                </li>
                </ul>
          </div>
        
          <li class="active-pro">
          <a href="logout.php">
              <i class="fa fa-sign-out"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              
            </div>
            <a class="navbar-brand" href="javascript:;">Samadhi Orphanage</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            
          </div>
        </div>
      </nav>
      
      <!-- End Navbar -->
      <div class="content">
       
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Staff Registration Form</h5>
              </div>
              <div class="card-body">
                <form name="myForm"  method="post" onsubmit="return validation()">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="lname" placeholder="" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name with Initial</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="">
                      </div> 
                    </div> 
                  </div> 

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Birth of Date</label>
                        <input type="date" class="form-control" placeholder=""  name="dob" id="dob">
                      </div>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">NIC</label>
                        <input type="text" class="form-control"name="nic" id="nic" placeholder="">
                      </div> 
                    </div> 
                  </div> 
                  <br>
                
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Permanent Address</label>
                        <input type="text" class="form-control" name="adrs" id="adrs" placeholder="Home Address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Contact Number</label>
                        <input type="text" name="contact" class="form-control" id="tele" onkeyup="checkTelNo()">
                        <label id="output"></label>
                      </div> 
                    </div> 
                  </div> 
                  
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">POST</label>
                        <input type="text" class="form-control"name="post" id="post" placeholder="">
                      </div> 
                    </div> 
                  </div> 
                  <br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email"  id="email" class="form-control" placeholder="" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <label>Password</label>
                        <input type="password"  name="pswrd" id="pswrd" class="form-control" placeholder="" >
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" name="addstaff">Register</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                 <script>
                
                </script>Tharindu Senanayake - IM/2018/074
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="./js/core/jquery.min.js"></script>
  <script src="./js/core/popper.min.js"></script>
  <script src="./js/core/bootstrap.min.js"></script>
  <script src="./js/plugins/perfect-scrollbar.jquery.min.js"></script>
  
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./js/dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="./demo/demo.js"></script>
  <script>
    
  //   function validation(){
       
  //      var initname=document.forms["myForm"]["name"].value;
  //      var fname=document.forms["myForm"]["fname"].value;
  //      var lname=document.forms["myForm"]["lname"].value;
  //      var dob=document.forms["myForm"]["dob"].value;
  //      var contact=document.forms["myForm"]["contact"].value;
  //      var username=document.forms["myForm"]["username"].value;
      
  //      if(fname==""){
  //              alert("First Name is required! ");
  //              return false;   
  //      }else if(!isNaN(fullname)){
  //              alert(" A valid Name is required! ");
  //              return false;
  //      }
       
       
       
  //      if(lname==""){
  //              alert("Last Name is required! ");
  //              return false;   
  //      }else if(!isNaN(firstname)){
  //              alert(" A valid Name is required! ");
  //              return false;
  //      }
       
  //      if(initname==""){
  //              alert("Name with Initials is required! ");
  //              return false;
  //      }else if(!isNaN(initname)){
  //              alert(" A valid Initial Name is required! ");
  //              return false;
  //      }
       
       
       
  //       if(dob==""){
  //              alert("Birth Date is Required! ");
  //              return false;
  //      }
       
       
  //      if(contact==""){
  //              alert("Enter a Contact Number ");
  //              return false;
  //      }

  //      if(username==""){
  //              alert("Enter a User Name");
  //             return false;
       
  //      }

  //  }

   function checkTelNo() {
    let telNo = document.getElementById("tele").value;
    let output = document.getElementById("output");
    if(isNaN(parseInt(telNo))){
        //enters an illegal character
        output.style.color = "red";
        output.textContent = "Telephone numbers don't have letters!"
    }
    else{
        if (telNo.length < 10) {
            output.style.color = "red";
            output.textContent = "Please provide a valid number!"
        }
        else if(telNo.length > 10){
            let initTen = telNo.slice(0, 10);
            output.style.color = "red";
            output.textContent = "Maximum length should be 10!"
            telNo.textContent = initTen;
        }
        else{
            output.style.color = "green";
            output.textContent = "Valid number"
        }
    }
}

         
   </script>
</body>

</html>
<?php

if (isset($_POST['addstaff'])) {
  
  $name = $_POST['name'];
  $bdate = $_POST['dob'];
  $nic = $_POST['nic'];
  $post =$_POST['post'];
  $address = $_POST['adrs'];
  $contact = $_POST['contact'];
  $username= $_POST['username'];
  $pswrd= $_POST['pswrd'];
  
  


  $insert_staff = "INSERT INTO staff (iname, dob, nic,adrs,contact,post,username,pw) VALUES ('$name','$bdate','$nic','$address','$contact','$post','$username','$pswrd')";

     
     $run_staff = mysqli_query($conn, $insert_staff);

     if ($run_staff) {
         
         echo "<script> alert('Staff Added successfully ')</script>";
         echo "<script> window.open('viewstaff.php?viewstaff ','_self')</script>";
         
     }
     else{
      //echo "<script> alert('child Didnt Added  ')</script>";
    }
 }

 

 
 /*if ($conn->query($insert_staff) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert_staff . "<br>" . $conn->error;
}
}
else {
echo "<script> alert('child Didnt Added  ')</script>";
}

$conn->close();

*/
?>