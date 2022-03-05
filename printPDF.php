<?php

  // Insert the content of connection.php file
  require_once 'connection.php';

  use Dompdf\Dompdf;

?>	

  <img src="assets/images/printlogo.png" width="150px" height="70px">

  <head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;

    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    td.a {
      text-align: right;
      font-weight: bold;
    }
  </style>
  </head>
<body>

  <table width='100%'>
    <tr>
      <th>ALL RECORDS</th>
    </tr>
  </table>
  <table width='100%'>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      <th>Blood Group</th>
      <th>Address</th>
      <th>Mobile Number</th>
      <th>Last Donation Date</th>
    </tr>
    <?php
        
    $sql = "SELECT * FROM donor";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_row($result)) {
    
      ?>
        <tr>
          <td><?php echo $row[0] ?></td>
          <td><?php echo $row[1] ?></td>
          <td><?php echo $row[2] ?></td>
          <td><?php echo $row[3] ?></td>
          <td><?php echo $row[4] ?></td>
          <td><?php echo $row[5] ?></td>
          <td><?php echo $row[6] ?></td>
        </tr>
      <?php
      
     }
    ?>
  </table>

