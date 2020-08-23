<?php
 include 'header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<h1><b>Car Information View</b></h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_car";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_car";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center><tr><th>Car_No</th><th>Pick_Location</th><th>Pick_Time</th><th>Drop_Location</th><th>Drop_Time</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Car_No"]. "</td><td>" . $row["Pick_Location"]."</td><td>" .$row["Pick_Time"]."</td><td>" .$row["Drop_Location"]."</td><td>" .$row["Drop_Time"]."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>
<?php
 include 'footer.php';
 ?>

