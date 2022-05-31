<?php

include "include/db.php";
?>

<?php

if (isset($_POST['addlabor'])) {
  
  $name = $_POST['name'];
  $bdate = $_POST['dob'];
  $gender =$_POST['gender'];
  $contact = $_POST['contact'];
  $address = $_POST['adrs'];
  $hiringc= $_POST['hirngc'];
  


     $insert_staff = "INSERT INTO labor (name, dob, gender,contact,address,hiring_company) VALUES ('$name','$bdate','$gender','$contact' , '$address' , '$hiringc')";

     $run_staff = mysqli_query($conn, $insert_staff);

     if ($run_staff) {
         
         echo "<script> alert('Labor Added successfully ')</script>";
         echo "<script> window.open('viewlabor.php?viewlabor ','_self')</script>";
         
     }
     else{
      echo "<script> alert('child Didnt Added  ')</script>";}
 }

 

 /*
  if ($conn->query($insert_staff) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert_staff . "<br>" . $conn->error;
}
}
else {
echo "<script> alert('child Didnt Added  ')</script>";
}

}
else {
echo "<script> alert('child Didnt Added  ')</script>";
}

$conn->close();

*/
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
                <h5 class="card-title">Labour Registration Form</h5>
              </div>
              <div class="card-body">
                <form  name="myForm"  method="post" onsubmit="return validation()" >
                  <div class="row">
                   
                    
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name with Initial</label>
                        <input type="text"  name="name" id="name" class="form-control" placeholder="">
                      </div> 
                    </div> 
                  </div> 
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="lname" id="fname" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control"  name="lname" id="lname" placeholder="" >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Birth of Date</label>
                        <input type="date" class="form-control" name="dob" placeholder="Home Address" value="Melbourne, Australia">
                      </div>
                    </div>
                  </div>
                  <br>               
                  <fieldset>
                    <div class="some-class">
                      <label for="gender">Gender:</label>
                      <label for="y">Male</label>
                      <input type="radio" class="radio" name="gender" value="Male" id="gender" />
                      <label for="z">Female</label>
                      <input type="radio" class="radio" name="gender" value="Female" id="gender" />
                      
                    </div>
                  </fieldset><br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="number" class="form-control" placeholder=""  id="contact" name="contact">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Permanent Address</label>
                        <input type="text" class="form-control" placeholder="" name="adrs">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Hiring Company</label>
                        <div class="input-box">
                        <select class="form-control"name="hirngc" id="hirngc" required>
                       <option value="Sunshine">Sunshine</option>
                       <option value="Moonlight">Moonlight</option>
            </select>
          </div>

                        <!-- <input type="text" class="form-control" placeholder="" name="hirngc"> -->
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" name="addlabor">Register</button>
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
  <!--   Core JS Files   -->
  <script src="./js/core/jquery.min.js"></script>
  <script src="./js/core/popper.min.js"></script>
  <script src="./js/core/bootstrap.min.js"></script>
  <script src="./js/plugins/perfect-scrollbar.jquery.min.js"></script>
  
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./js/dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="./demo/demo.js"></script>
  <script>
    
    function validation(){
       
       var initname=document.forms["myForm"]["name"].value;
       var fullname=document.forms["myForm"]["fname"].value;
       //var firstname=document.forms["myForm"]["lname"].value;
       var dob=document.forms["myForm"]["dob"].value;
       var contact=document.forms["myForm"]["contact"].value;
       //var imgs=document.forms["myForm"]["contact"].value;
       //var company=document.forms["myForm"]["company"]; 
       
       if(initname==""){
               alert("Name with Initials is required! ");
               return false;
       }else if(!isNaN(initname)){
               alert(" A valid Initial Name is required! ");
               return false;
       }
       
       
            
      if(fullname==""){
               alert("Full Name is required! ");
               return false;   
       }else if(!isNaN(fullname)){
               alert(" A valid Name is required! ");
               return false;
       }
       
       
       
       
       
       
        if(dob==""){
               alert("Birth Date is Required! ");
               return false;
       }
       
       
       if(contact==""){
               alert("Enter Your Contact Number");
               return false;
       }
       
       if(imgs.value!=""){
           
          }else{
               if(file.size<1024*1024){
                  alert("File too small. Please select a file more than 1 MB !! ");

                  }else if(file.size>4*1024*1024){
                          alert(" File too large. Please select a file less than 4 MB !!");

                           }
               return false; 
          }
       
       

   }
         
   </script>
</body>

</html>