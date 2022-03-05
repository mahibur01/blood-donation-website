<?php

    // Insert the content of connection.php file
    include('connection.php');

    // Update data into the database
    if(ISSET($_POST['updateData']))
    {   
        $id = $_POST['updateid'];
        $name = $_POST['updatename'];
        $age = $_POST['updateage'];
        $bloodgroup = $_POST['updatebloodgroup'];
        $address = $_POST['updateaddress'];
        $mobilenumber = $_POST['updatemobilenumber'];
        $lastdonationdate = $_POST['updatelastdonationdate'];
        

        $sql = "UPDATE donor SET name='$name',
                                        age='$age', 
                                        bloodgroup='$bloodgroup',
                                        address = '$address',
                                        mobilenumber = '$mobilenumber',
                                        lastdonationdate = '$lastdonationdate'
                                        WHERE id='$id'";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<script> alert("Data Updated Successfully."); </script>';
            header("Location:home.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>