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
        $joindate = $_POST['joindate'];

        $sql = "INSERT INTO donor(name, age, bloodgroup, address, mobilenumber, lastdonationdate, joindate) VALUES('$name', '$age', '$bloodgroup', '$address', '$mobilenumber','$lastdonationdate', NOW())";       
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<script> alert("Data saved."); </script>';
            header('Location:#');
        }else{
            echo '<script> alert("Data Not saved."); </script>';
        }
    }
?>