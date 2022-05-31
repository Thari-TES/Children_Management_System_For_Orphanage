<?php
include "include/db.php";
?>


<?php

if(isset($_GET['editLabors'])){

$edit_id = $_GET['editLabors'];

$get_pro = "select * from labor where laborId ='$edit_id'";

$run_pro = mysqli_query($conn,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$name = $row_pro['name']  ;
$dob = $row_pro['dob']  ;
$contact = $row_pro['contact'];
$address = $row_pro['address']  ;
$hiringc = $row_pro['hiring_company'];
$id = $row_pro['laborId'];

}
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
                <h5 class="card-title">Update Labors</h5>
              </div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="row">
                   
                    
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control"  name="name" value="<?php echo $name; ?>" required>
                      </div> 
                    </div> 
                  </div> 

                  

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>" >
                      </div>
                    </div>
                  </div>
                  <br>        

                  <div class="row">
                  <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Contact Number</label>
                        <input type="text" class="form-control"  name="contact" value="<?php echo $contact; ?>" >
                      </div> 
                    </div> 
                  </div> 


                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Permanent Address</label>
                        <input type="text" class="form-control" name="adrs" value="<?php echo $address; ?>">
                      </div>
                    </div>
                  </div>
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
                      <label>Hiring Company</label>
                        <div class="input-box">
                        <select class="form-control"name="hc" id="hc" required>
                       <option value="Sunshine">Sunshine</option>
                       <option value="Moonlight">Moonlight</option>
            </select>
          </div>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" name="editlabor">Update Labor</button>
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
</body>


</html>


            
<?php
    if (isset($_POST['editlabor'])) {

        $name = $_POST['name']  ;
        $dob = $_POST['dob']  ;
     $address  =$_POST['adrs'];
     $contact =$_POST['contact'];
     $gender =$_POST['gender'];
     $hiringc = $_POST['hc'];

        $insert_staff = "update  labor set name='$name',dob='$dob', gender='$gender', contact='$contact', address='$address',hiring_company='$hiringc' where laborId = '$edit_id'";
               

        $run_staff = mysqli_query($conn, $insert_staff);

        if ($conn->query($insert_staff) === TRUE) {
          echo "<script> alert('Record Updated')</script>";
         
          echo "<script> window.open('viewlabor.php?viewlabor ','_self')</script>";
        }

       /* if ($conn->query($insert_staff) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $insert_staff . "<br>" . $conn->error;
          }*/

      }
        

        
        
    
    ?>
