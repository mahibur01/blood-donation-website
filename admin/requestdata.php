<?php
  include('../connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
        <!-- favicon -->
        <link rel="shortcut icon" type="../assets/images/png" href="../assets/images/favicon.ico" />
        <!-- stylesheet -->
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style-min.css"> 
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <title>হ্যালো রক্ত | এক ফোঁটা রক্ত, একটি জীবন </title>
    </head>
       
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
            <a class="navbar-brand" href="./">
                <img src="../assets/images/logo.png" alt="Logo" style="width:130px; height: 50px;">
              </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control mt-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary mt-0" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                ড্যাশবোর্ড
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                           
                
                            <a class="nav-link" href="donordata.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                রক্তদাতার তালিকা
                            </a>
                            <a class="nav-link" href="requestdata.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-inbox"></i></div>
                                রক্তের আবেদন
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Settings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.php">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.php">401 Page</a>
                                            <a class="nav-link" href="404.php">404 Page</a>
                                            <a class="nav-link" href="500.php">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
    
            

            
            <div id="layoutSidenav_content">
                <main>
                <div class="container pt-5">
    <div class="row">
      <div class="col-md-12 card">
        <div>
          <div class="head-title">
            <h4 class="text-center">রক্তাদানে আগ্রহীদের তালিকা</h4>
            <hr>
          </div>
          <div class="col-md-3 m-auto add-new-button">
            <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addModal">
              <i class="fas fa-plus"></i> নতুন তথ্য যোগ করুন
            </a>
          </div>
          <div class="col-md-3 m-auto add-new-button">
            <a href="../pdf.php" target="_blank" class="btn btn-success btn-block mt-3">
              <i class="fas fa-print"></i> Print
            </a>
          </div>
          <br>
          <table class="table table-striped">
            <thead class="bg-danger text-white">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>Mobile Number</th>
                <th>Lat Donation Date</th>
                <th>Join Date</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>

            <?php

              $sql = "SELECT * FROM donor";
              $result = mysqli_query($conn, $sql);

            if($result)
            {
              while($row = mysqli_fetch_assoc($result)){
            ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['bloodgroup']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['mobilenumber']; ?></td>
                <td><?php echo $row['lastdonationdate']; ?></td>
                <td><?php echo $row['joindate']; ?></td>
                <td>
                  <button type="button" class="btn btn-info viewBtn"> <i class="fas fa-eye"></i> View </button>
                </td>
                <td>
                  <button type="button" class="btn btn-warning updateBtn"> <i class="fas fa-edit"></i> Update </button>
                </td>
                <td>
                  <button type="button" class="btn btn-danger deleteBtn"> <i class="fas fa-trash-alt"></i> Delete </button>
                </td>
              </tr>
            <?php
              }
            }else{
              echo "<script> alert('No Record Found');</script>";
            }
          ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- MODALS -->

  <!-- ADD RECORD MODAL -->
  <div class="modal fade" id="addModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title">ফর্ম পূরণ করুন</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../insert.php" method="POST">
            <div class="form-group">
              <label for="title">আপনার নাম</label>
              <input type="text" name="name" class="form-control" placeholder="আপনার নাম লিখুন" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">বয়স</label>
              <input type="number" name="age" class="form-control" placeholder="আপনার বয়স" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">রক্তের গ্রুপ</label>
              <input type="text" name="bloodgroup" class="form-control" placeholder="আপনার রক্তের গ্রুপ" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">ঠিকানা</label>
              <input type="text" name="address" class="form-control" placeholder="আপনার বর্তমান ঠিকানা" maxlength="50" required>
            </div>
            <div class="form-group">
              <label for="title">মোবাইল নাম্বার</label>
              <input type="number" name="mobilenumber" class="form-control" placeholder="আপনার মোবাইল নাম্বার" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">শেষ কবে রক্ত দিয়েছেন?</label>
              <input type="date" name="lastdonationdate" class="form-control" placeholder="যদি রক্ত দিয়ে থাকেন, তাহলে সর্বশেষ কবে দিয়েছেন? না দিয়ে থাকলে ফাঁকা রাখুন" maxlength="50">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger" name="insertData">জমা দিন</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- VIEW MODAL -->
  <div class="modal fade" id="viewModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title">View Record Information</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Name:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewname"></div>
            </div>
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Age:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewage"></div>
            </div>
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Blood Group:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewbloodgroup"></div>
            </div>
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Address:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewaddress"></div>
            </div>
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Mobile Number:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewmobilenumber"></div>
            </div>
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Last Donation Date:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewlastdonationdate"></div>
            </div> 
            <div class="col-sm-5 col-xs-6 tital " >
              <strong>Join Date:</strong>
            </div>
            <div class="col-sm-7 col-xs-6 ">
              <div id="viewjoindate"></div>
            </div> 
                      
          </div>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- UPDATE MODAL -->
  <div class="modal fade" id="updateModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Edit Record</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../update.php" method="POST">
            <input type="hidden" name="updateid" id="updateid">
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" name="updatename" id="updatename" class="form-control" placeholder="Enter Name" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Age</label>
              <input type="number" name="updateage" id="updateage" class="form-control" placeholder="Enter Age" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Blood Group</label>
              <input type="text" name="updatebloodgroup" id="updatebloodgroup" class="form-control" placeholder="Enter Your Blood Group" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Address</label>
              <input type="text" name="updateaddress" id="updateaddress" class="form-control" placeholder="Enter Your Address" maxlength="50" required>
            </div>
            <div class="form-group">
              <label for="title">Mobile Number</label>
              <input type="number" name="updatemobilenumber" id="updatemobilenumber" class="form-control" placeholder="Enter Your Mobile Number" maxlength="50"
                required>
            </div>
            <div class="form-group">
              <label for="title">Last Donation Date</label>
              <input type="date" name="updatelastdonationdate" id="updatelastdonationdate" class="form-control" placeholder="Enter Last Donation Date" maxlength="50"
                required>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="updateData">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- DELETE MODAL -->
  <div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="../delete.php" method="POST">

          <div class="modal-body">

            <input type="hidden" name="deleteId" id="deleteId">

            <h4>Are you sure want to delete?</h4>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary" name="deleteData">Yes</button>
        </div>

        </form>
      </div>
    </div>
  </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>

        
       

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

  <script>
    $(document).ready(function () {
      $('.updateBtn').on('click', function(){

        $('#updateModal').modal('show');

        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#updateid').val(data[0]);
        $('#updatename').val(data[1]);
        $('#updateage').val(data[2]);
        $('#updatebloodgroup').val(data[3]);
        $('#updateaddress').val(data[4]);
        $('#updatemobilenumber').val(data[5]); 
        $('#updatelastdonationdate').val(data[6]);      

        });
        
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.viewBtn').on('click', function(){

        $('#viewModal').modal('show');

        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#viewname').text(data[1]);
        $('#viewage').text(data[2]);
        $('#viewbloodgroup').text(data[3]);
        $('#viewaddress').text(data[4]);
        $('#viewmobilenumber').text(data[5]); 
        $('#viewlastdonationdate').text(data[6]);
        $('#viewjoindate').text(data[7]);      

        });
    
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.deleteBtn').on('click', function(){

        $('#deleteModal').modal('show');
        
        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#deleteid').val(data[0]);

        });
    
    });
  </script>
    </body>
</html>
