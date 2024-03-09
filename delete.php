<?php
include("connection.php");

// Assuming 'rn' is the correct parameter name in your URL
$rollno = $_GET['rn'];
$column_name = 'Roll No'; // Replace with the correct column name

// Using prepared statement to prevent SQL injection
$query = "DELETE FROM stu_data WHERE `$column_name` = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $rollno); // Assuming Roll No is a string, adjust "s" if it's a different type

// Execute the statement
mysqli_stmt_execute($stmt);

// Check if the deletion was successful
if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "<font color='green'>Record deleted from the table";
} else {
    echo "<font color='red'>Delete process failed";
}

// Close the statement
mysqli_stmt_close($stmt);
?>
