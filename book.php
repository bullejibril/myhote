<?php 
// Import the db.php file - to allow for acces to variables for connection
require_once 'config/db.php';

// create a query to insert a student into the database 
// Give all the inputs the "name attribute" icluding the submit button
if (isset($_POST['create_guest'])){
    // create variable to store variables from the form inputs
    $Reservation_Id = mysqli_real_escape_string($conn, $_POST['Reservation_Id']);
    $Guest_Id = mysqli_real_escape_string($conn, $_POST['Guest_Id']);
    $Room_Id = mysqli_real_escape_string($conn, $_POST['Room_Id']);
    $CheckIn_Date = mysqli_real_escape_string($conn, $_POST['CheckIn_Date']);
    $CheckOut_Date = mysqli_real_escape_string($conn, $_POST['CheckOut_Date']);
    $Total_Cost = mysqli_real_escape_string($conn, $_POST['Total_Cost']);
    
    // Create a quesry to insert a student into out database
    $query = "INSERT INTO reservation_table (Reservation_Id,Guest_Id, Room_Id, CheckIn_Date, CheckOut_Date, Total_Cost) VALUES ('$Reservation_Id', '$Guest_Id', '$Room_Id', '$CheckIn_Date', '$CheckOut_Date', '$Total_Cost' )";
    // Execute the query
    
    if (mysqli_query($conn, $query)) {
        header("Location:addguest.php");
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
        <h1 class="text-center text-primary">Book a Room</h1>
        <div class="text-center">
        <a style=" align-items:center; margin-bottom:24px; margin-top:24px;" href="statusofroom.php" class="btn btn-primary text-center">Availability of Room</a>
        <a style=" align-items:center; margin-bottom:24px; margin-top:24px;" href="guest.php" class="btn btn-primary text-center">View Guests</a>
        </div>
        <div>
<form action="" method="POST" style="width:60%; margin:0 auto;">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Reservation_Id</label>
            <input type="text" class="form-control" id="exampleInputPassword1"  name="Reservation_Id">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Guest_Id</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Guest_Id">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Room_Id</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Room_Id">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">CheckIn_Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="CheckIn_Date">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">CheckOut_Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="CheckOut_Date">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Total_Cost</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Total_Cost">
        </div>
        
        <button type="submit" class="btn btn-primary form-control" name="create_guest">BOOK</button>
</form> 
        </div>
    </div>
    
</body>
</html>
