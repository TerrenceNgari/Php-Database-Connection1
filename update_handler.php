<?php


if (isset($_POST['submit'])) {
    $Parking_Area = $_POST['Parking_Area'];
    $Ownername = $_POST['Ownername'];
    $Registration = $_POST['Registration'];
    $make = $_POST['make'];
    $Time = $_POST['Time'];
    $contact = $_POST['contact'];
    $connection = mysqli_connect("localhost", "root", "", "assignment");
    if ($connection) {
        $update_query = "UPDATE `slots` SET `area`='$Parking_Area',`registration`='$Registration',`make`='$make',`time_in`='$Time',`contact`='$contact' WHERE name = '$Ownername'";
        $save = mysqli_query($connection, $update_query);
        if ($save) {
            echo '<script>alert("Saved Successfully. <br> Now sign up")</script>';
            header('location:index.html');
        } else {
            echo "failed";
        }
    } else {
        echo "Failed. We gonna find some way :)";
    }
}



