<?php
  include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style-min.css">

  <title>Blood Donor List</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
        <a class="navbar-brand" href="./">
            <img src="assets/images/logo.png" alt="Logo" style="width:160px; height: 60px;">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Campaign</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Blood Donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">About Us</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                        aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

  <!-- Navigation -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" target="_blank" >Feydel.com</a>
    </div>
  </nav> -->
  <br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-md-12 card">
        <div>
          <div class="head-title">
            <h4 class="text-center">রক্ত দিতে নিচের ফর্ম পূরণ করুন আপনার সঠিক তথ্য দিয়ে</h4>
            <hr>
          </div>
          <div class="col-md-3 m-auto add-new-button">
            <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addModal">
              <i class="fas fa-plus"></i> তথ্য দিন
            </a>
          </div>
          <div class="col-md-3 m-auto add-new-button"  style="display:none;">
            <a href="pdf.php" target="_blank" class="btn btn-success btn-block">
              <i class="fas fa-print"></i> Print
            </a>
          </div>
          <br>
          <table class="table table-striped"  style="display:none;">
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
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
          <form action="update.php" method="POST">
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
        <form action="delete.php" method="POST">

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

<?php

    // Insert the content of connection.php file
    include('connection.php');
    
    // Insert data into the database
    if(ISSET($_POST['insertData']))
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $bloodgroup = $_POST['bloodgroup'];
        $address = $_POST['address'];
        $mobilenumber = $_POST['mobilenumber'];
        $lastdonationdate = $_POST['lastdonationdate'];
        // $joindate = $_POST['joindate'];

        $sql = "INSERT INTO donor(name, age, bloodgroup, address, mobilenumber, lastdonationdate, joindate) VALUES('$name', '$age', '$bloodgroup', '$address', '$mobilenumber','$lastdonationdate', NOW())";       
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<script> alert("Data saved."); </script>';
            // header('Location:#');
        }else{
            echo '<script> alert("Data Not saved."); </script>';
        }
    }
?>




</body>

</html>