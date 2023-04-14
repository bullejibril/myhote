<?php 
// Import the db.php file - to allow for acces to variables for connection
require_once 'config/db.php';

// create a query to insert a student into the database 
// Give all the inputs the "name attribute" icluding the submit button
if (isset($_POST['create_guest'])){
    // create variable to store variables from the form inputs
    $Guest_Id = mysqli_real_escape_string($conn, $_POST['Guest_Id']);
    $First_name = mysqli_real_escape_string($conn, $_POST['Frst_name']);
    $Last_name = mysqli_real_escape_string($conn, $_POST['Last_name']);
    $Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $Address = mysqli_real_escape_string($conn, $_POST['Address']);
    
    // Create a quesry to insert a student into out database
    $query = "INSERT INTO guest_table (Guest_Id, Frst_name, Last_name, Phone, email, Address) VALUES ('$Guest_Id', '$First_name', '$Last_name', '$Phone', '$email', '$Address' )";
    // Execute the query
    
    if (mysqli_query($conn, $query)) {
        header("Location:guest.php");
    }else{
        echo "Record was not inserted into the database!";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Book a Room</title>
    <style>
        label{
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div style="margin-top: 20px; margin-bottom:20px;" class="container">
        <h1 class="text-center text-primary">Add a Guest</h1>
        <div class="text-center">
        <!-- <a style=" align-items:center; margin-bottom:24px; margin-top:24px;" href="statusofroom.php" class="btn btn-primary text-center">Availability of Room</a> -->
        <a style=" align-items:center; margin-bottom:24px; margin-top:24px;" href="guest.php" class="btn btn-primary text-center">View Guests</a>
        </div>
        <div>
<form action="" method="POST" style="width:60%; margin:0 auto;">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Guest_Id</label>
            <input type="text" class="form-control" id="exampleInputPassword1"  name="Guest_Id">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">First_name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Frst_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Last_name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Last_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Phone">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Address">
        </div>
        
        <button type="submit" class="btn btn-primary form-control" name="create_guest">Add Guest</button>
</form> 
        </div>
    </div>
    
</body>
</html>
