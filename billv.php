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
<h1><b>Bill Information View</b></h1>
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

$sql = "SELECT * FROM tbl_bill";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center><tr><th>Bill_No</th><th>Total_KM_Journey</th><th>Per_KM_Cost</th><th>Total_Cost</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Bill_No"]. "</td><td>" . $row["Total_KM_Journey"]."</td><td>" .$row["Per_KM_Cost"]."</td><td>" .$row["Total_Cost"]."</td></tr>";
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

