<?php

if (isset($_POST['submit'])) {
    $Ownername = $_POST['Ownername'];
    $Registration = $_POST['Registration'];
    $make = $_POST['make'];
    $Time = $_POST['Time'];
    $contact = $_POST['contact'];
    $slot = $_POST['slot'];
    $connection = mysqli_connect("localhost","root","","assignment");
    if ($connection) {
        $insert = "INSERT INTO `slots`(`name`, `registration`, `make`, `time_in`, `contact`, `slot`) VALUES ('$Ownername','$Registration','$make','$Time','$contact','$slot')";
        $save = mysqli_query($connection,$insert);
        if ($save) {
            echo '<script>alert("Saved Successfully. <br> Now sign up")</script>';
            header('location:registered.html');
        } else {
            echo "failed";
        }
    }else {
        echo "Failed. We gonna find some way :)";
    }
}
?>


