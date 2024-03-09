<style>
    td{
        padding: 10px;
    }
</style>
<?php
include("connection.php");
// error_reporting(0);

echo "<br>";
$query = "SELECT * FROM stu_data ";
$data =  mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
    echo "<table border='1'>
            <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Class</th>
                <th>Age</th>
                <th>Mobile Number</th>
                <th colspan=2> Operations</th>
            </tr>";

    while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
        <td>".$result['Roll No']."</td>
        <td>".$result['Name']."</td>
        <td>".$result['Class']."</td>
        <td>".$result['Age']."</td>
        <td>".$result['Mobile Number']."</td>
        <td><a href='update.php?rn=".$result['Roll No']."&na=".$result['Name']."&cl=".$result['Class']."&ag=".$result['Age']."&mn=".$result['Mobile Number']."'>Edit</a></td>
        <td><a href='delete.php?rn=".$result['Roll No']."&na=".$result['Name']."&cl=".$result['Class']."&ag=".$result['Age']."&mn=".$result['Mobile Number']."'>Delete</a></td>
      </tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}
?>
