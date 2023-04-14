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
    <title>Rooms Available</title>
</head>
<body>
    <?php
    //create query to fetch all students
        $query = "SELECT * FROM roomavailability_table";
    //execute query
        $roomavailability_table = mysqli_query($conn, $query);
    //store student info
        // $all_students = mysqli_fetch_array($students);
    //display the students in the browser
        // print_r($all_students);

    ?>

<!-- Insert bootstrap table here -->
    <div class="container">
        <h1 class="text-center text-primary">Availablity Of Rooms</h1>
        <a style="float: right; margin: bottom 24px;" href="create-student.php"></a>
        <div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Roomavailability_Id</th>
                        <th scope="col">Room_Id</th>
                        <th scope="col">Date</th>
                        <th scope="col">Availability</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($roomavailability=  mysqli_fetch_assoc($roomavailability_table)): ?>
                    <tr>
                        <td><?= $roomavailability["Roomavailability_Id"];?></td>
                        <td><?= $roomavailability["Room_Id"];?></td>
                        <td><?=$roomavailability["Date"];?></td>
                        <td><?=$roomavailability["Availability"];?></td>
                        <!-- <td><a href="edit-student.php?Guest_Id=<?=$Guest_Id["Guest_Id"];?>" class="btn btn-success">Edit</a>
                        <a href="delete-student.php?student_id=<?=$student["student_id"];?>" class="btn btn-danger">Delete</a>
                        </td> -->
                    </tr>

                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>


</body>
</html>