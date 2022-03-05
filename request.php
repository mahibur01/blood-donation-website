<?php

    // Insert the content of connection.php file
    include('connection.php');
    //echo 'heell';   
     // Insert data into the database
    if(ISSET($_POST['insertData']))
    {
        $name = $_POST['username'];

        
        $age = $_POST['userage'];
        $bloodgroup = $_POST['userbloodgroup'];
        $address = $_POST['useraddress'];
        $mobilenumber = $_POST['usermobilenumber'];
        $email = $_POST['useremail'];
        // $date = $_POST['donationdate'];
        // $time = $_POST['donationtime'];
        $massage = $_POST['usermessage'];
      //  echo $massage;
//donationdate, donationtime, $date','$time',
$sql = "INSERT INTO request(name, age, bloodgroup, address, mobilenumber, email,  massage) VALUES('$name', '$age', '$bloodgroup', '$address', '$mobilenumber','$email','$massage')";       
        
        
        if ($conn->query($sql) === TRUE) {
           // echo "New record created successfully";
           header('Location: index.php');
               echo '<script> alert("Data saved."); </script>';
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
        
    }
?>