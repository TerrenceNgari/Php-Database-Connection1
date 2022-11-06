<?php
include 'connect.php'; ?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Fixed table header</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


    <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-5"><a href="user_sign_up_handler.php" class="text-light">Add user</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SI no</th>
      <th scope="col">Name</th>
      <th scope="col">Registration</th>
      <th scope="col">Make</th>
      <th scope="col">time_in</th>
      <th scope="col">contact</th>
      <th scope="col">slot</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>

  <?php
  
  $sql="Select * from `slots`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $registration=$row['registration'];
        $make=$row['make'];
        $time_in=$row['time_in'];
        $contact=$row['contact'];
        $slot=$row['slot'];

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$registration.'</td>
        <td>'.$make.'</td>
        <td>'.$time_in.'</td>
        <td>'.$contact.'</td>
        <td>'.$slot.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?
        updateid='.$id.'"class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" 
        class="text-light">Delete</a></button>
        </td>
      </tr>';
    }
}
  ?>
  
    
  </tbody>
</table>
  </div>  
</body>
</html>
