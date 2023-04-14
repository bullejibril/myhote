<?php
//include the db.php file
require_once 'config/db.php';


//get the student_id from the urlof the edit-student.php page

$guest = mysqli_real_escape_string($conn, $_GET['Guest_Id']);

//create query t o delete student whose id we got from url
$deleteguest = "DELETE FROM guest_table WHERE Guest_Id = '{$guest}'";

//execute query
if (mysqli_query($conn, $deleteguest)) {
    header("Location: guest.php");
} else {
    header("Location: checkIn.php");
    echo "Guest was not updated.";
}