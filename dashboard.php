<?php

include "include/db.php";
?>
<?php

$get_labor = "select count(laborid) from labor ";
$run_labor = mysqli_query($conn,$get_labor);
$row_labor=mysqli_fetch_array($run_labor);
$alllabor = $row_labor['count(laborid)'];

$get_staff = "select count(staffid) from staff ";
$run_staff = mysqli_query($conn,$get_staff);
$row_staff=mysqli_fetch_array($run_staff);
$allstaff = $row_staff['count(staffid)'];

$get_child = "select count(id) from childdetails ";
$run_child = mysqli_query($conn,$get_child);
$row_child=mysqli_fetch_array($run_child);
$allchild = $row_child['count(id)'];

$get_donation = "select sum(cash) from donars ";
$run_donation = mysqli_query($conn,$get_donation);
$row_donation=mysqli_fetch_array($run_donation);
$alldonation = $row_donation['sum(cash)'];

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
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-child text-warning"></i>
                    </div>
                  </div>
                  <a href="viewschild.php">
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Children</p>
                      </a>
                      <p class="card-title"><?php echo $allchild?> <p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-money text-success"></i>
                    </div>
                  </div>
                  <a href="viewdonation.php">
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total Donations</p>
                      </a>
                      <p class="card-title"> RS.<?php echo $alldonation?> <p>
                    </div>
                  </div>
                </div>
              </div>
   
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-address-card-o text-danger"></i>
                    </div>
                  </div>
                  <a href="viewlabor.php">
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total Labors</p>
                      </a>
                      <p class="card-title"><?php echo $alllabor?><p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-users text-primary"></i>
                    </div>
                  </div>
                  <a href="viewstaff.php">
                  <div class="col-7 col-md-8">
                    <div class="numbers"> 
                      <p class="card-category">Total Staff</p>
                      </a>
                      <p class="card-title"><?php echo $allstaff?><p><p>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
       
              <div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Cash Donation Details

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Donar Name:</th>
<th>Fund Amount:</th>
<th>Contact Number:</th>
<th>Date:</th>

</tr>

</thead><!-- thead Ends -->
<?php
  
  
$get_order = "select * from donars order by date DESC limit 5 ";
$run_order = mysqli_query($conn,$get_order);

while($row_order=mysqli_fetch_array($run_order)){
$id = $row_order['donarId'];
$name = $row_order['donarName'];

$contact = $row_order['contactNo'];

$address = $row_order['Address'];
$date = $row_order['date'];
$amount = $row_order['cash'];
?>
<tbody><!-- tbody Starts -->


 <tr>
    <td><?php echo $name?></td>
      <td><?php echo $amount?></td>
    <td><?php echo $contact?></td>
   <td><?php echo substr($date, 0,10) ?></td>
   
   
 </tr>

<?php }?>
</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->
<div class="text-right" ><!-- text-right Starts -->

<a href="viewdonation.php.?viewdonation" >

View All Donations <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->



</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-12 Ends -->

 
        
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
  <script src=".js/core/popper.min.js"></script>
  <script src="./js/core/bootstrap.min.js"></script>
  <script src="./js/plugins/perfect-scrollbar.jquery.min.js"></script>
 
  <!-- Chart JS -->
  <script src="./js/plugins/chartjs.min.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./js/dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="./demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  
</body>

</html>
