
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
                <h5 class="card-title">Donation Form</h5>
              </div>
              <div class="card-body">
                <form name="myForm"  method="post" onsubmit="return validation()">
                  <div class="row">
                   
                    
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control" placeholder="" name="fname" id="fname">
                      </div> 
                    </div> 
                  </div> 

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Contact number</label>
                        <input type="text" class="form-control" name="contact" id="contact"> 
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" placeholder="" name="adrs" id="adrs">
                      </div> 
                    </div> 
                  </div> 

                    
                  <label for="cars">Donation Type:</label>

                        <select name="dtype" id="dtype">
                        <option >Cash</option>
                        <option >Items</option>
                        <option >Cash and Items</option>
                        
                        </select>
                    <br>
                    <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Cash Amount</label>
                        <input type="text" class="form-control" placeholder="" name="price" id="price">
                      </div> 
                    </div> 
                  </div> 


                  <div class="row">
                    <div class="col-md-12">
                        <label>Date</label>
                        <input type="date" class="form-control" name="ddate" id="ddate">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" name="adoner">Add Donation</button>
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
  
  <script src="./js/dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="./demo/demo.js"></script>

  <script>
    
    function validation(){
       
       var initname=document.forms["myForm"]["fname"].value;
       var adrs=document.forms["myForm"]["adrs"].value;
       var cash=document.forms["myForm"]["price"].value;
       var dob=document.forms["myForm"]["ddate"].value;
       //var contact=document.forms["myForm"]["contact"].value;
      
       
       if(initname==""){
               alert("Name  is required! ");
               return false;
       }else if(!isNaN(initname)){
               alert(" A valid  Name is required! ");
               return false;
       }
       
       
       if(adrs==""){
               alert("First Name is required! ");
               return false;   
       }else if(!isNaN(adrs)){
               alert(" A valid Name is required! ");
               return false;
       }
       
         
       if(cash==""){
               alert("Enter Cash ");
               return false;
       }
       
       if(dob==""){
               alert("Enter a Date");
               return false;
       }
       
      //  if(contact==""){
      //        alert("Contact Number is required!");
      //           return false;
      //   }else{
      //       if(contact.length<10){
      //           alert(" A valid Contact Number is required !! "); 
      //       }if(contact.length>10){
      //           alert("A valid Contact Number is required.Maximum length should be 10 !!"); 
      //       }
      //       return false;
      //   }



   }
         
   </script>

</body>


</html>
<?php

if (isset($_POST['adoner'])) {
  
  $fname = $_POST['fname'];
  $contactNo = $_POST['contact'];
  $adrs = $_POST['adrs'];
  $donationType =$_POST['dtype'];
  $cash=$_POST['price'];
  $date = $_POST['ddate'];

 

     $insert_staff = "INSERT INTO donars (donarName, contactNo ,Address, donationType, cash,date) VALUES ('$fname',' $contactNo','$adrs','$donationType','$cash', '$date')";

     
     $run_staff = mysqli_query($conn, $insert_staff);
    
    /* if ($conn->query($insert_staff) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $insert_staff . "<br>" . $conn->error;
      }*/

     if ($run_staff) {
         echo "<script> alert('Donation successfully ')</script>";
         echo "<script> window.open('viewdonation.php?viewdonation ','_self')</script>";
       
         
     }
     

    }

     
 ?>