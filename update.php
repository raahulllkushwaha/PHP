<?php
include("connection.php");
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Initialize variables with default values or empty strings
$rn = isset($_GET['rollno']) ? $_GET['rollno'] : '';
$na = isset($_GET['name']) ? $_GET['name'] : '';
$cl = isset($_GET['cls']) ? $_GET['cls'] : '';
$ag = isset($_GET['age']) ? $_GET['age'] : '';
$mn = isset($_GET['mobno']) ? $_GET['mobno'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <form action="" method="GET">
        <label for="">Roll No</label>
        <input type="number" name="rollno" value="<?php echo $_GET['rn']; ?>"><br><br>

        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $_GET['na']; ?>"><br><br>

        <label for="">Class</label>
        <input type="text" name="cls" value="<?php echo $_GET['cl']; ?>"><br><br>

        <label for="">Age</label>
        <input type="number" name="age" value="<?php echo $_GET['ag']; ?>"><br><br>

        <label for="">Mobile Number</label>
        <input type="text" name="mobno" value="<?php echo $_GET['mn']; ?>"><br><br>

        <input type="submit" name="submit" value="Update">

    </form>
    <?php
    if (isset($_GET['submit'])) {
        $rn = isset($_GET['rollno']) ? $_GET['rollno'] : '';
        $na = isset($_GET['name']) ? $_GET['name'] : '';
        $cl = isset($_GET['cls']) ? $_GET['cls'] : '';
        $ag = isset($_GET['age']) ? $_GET['age'] : '';
        $mn = isset($_GET['mobno']) ? $_GET['mobno'] : '';

        $query = "UPDATE stu_data SET `NAME`='$na', `Class`='$cl', `Age`='$ag', `Mobile Number`='$mn' WHERE `Roll No`='$rn'";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "Record Updated Successfully. <a href='display.php'> Check update list </a>";
        } else {
            echo "Record not updated: " . mysqli_error($conn);
        }
    } else {
        echo "<font color='red'>Click on the Update button to save the changes.";
    }
    ?>
</body>

</html>
