<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form</title>
</head>

<body>
    <form action="" method="GET">
        <label for="">Roll No</label>
        <input type="number" name="rollno" value=""><br><br>

        <label for="">Name</label>
        <input type="text" name="name" value=""><br><br>

        <label for="">Class</label>
        <input type="text" name="cls" value=""><br><br>

        <label for="">Age</label>
        <input type="number" name="age" value=""><br><br>

        <label for="">Mobile Number</label>
        <input type="text" name="mobno" value=""><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if ($_GET['submit']) {

        $rn = $_GET['rollno'];
        $na = $_GET['name'];
        $cl = $_GET['cls'];
        $ag = $_GET['age'];
        $mn = $_GET['mobno'];

        if ($rn != "" && $na != "" && $cl != "" && $ag != "" && $mn != "") {
            $query = "INSERT INTO stu_data VALUES ('$rn', '$na', '$cl', '$ag', '$mn')";
            $data = mysqli_query($conn, $query);

            if ($data) {
                echo "Data inserted into Database";
            }
        } 
        else {
            echo "All fields are required";
        }
    }
    ?>
</body>

</html>