<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Guests</title>
</head>
<body>
    <?php
    //create query to fetch all students
        $query = "SELECT * FROM guest_table";
    //execute query
        $guest_table = mysqli_query($conn, $query);
    //store student info
        // $all_students = mysqli_fetch_array($students);
    //display the students in the browser
        // print_r($all_students);

    ?>

<!-- Insert bootstrap table here -->
    <div class="container">
        <h1 class="text-center text-primary">All Guests</h1>
        <a style="float: right; margin: bottom 24px;" href="book.php"></a>
        <div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Guest_Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">email</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($guest =  mysqli_fetch_assoc($guest_table)): ?>
                    <tr>
                        <td><?=$guest ["Guest_Id"];?></td>
                        <td><?=$guest ["Frst_name"];?></td>
                        <td><?=$guest ["Last_name"];?></td>
                        <td><?=$guest ["Phone"];?></td>
                        <td><?=$guest ["email"];?></td>
                        <td><?=$guest ["Address"];?></td>
                        <td><a href="checkIn.php?Guest_Id=<?=$guest["Guest_Id"];?>" class="btn btn-success">Check In</a>
                        <a href="checkOut.php?Guest_id=<?=$guest["Guest_Id"];?>" class="btn btn-danger">Check Out</a>
                        </td>
                    </tr>

                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>






</body>
</html>