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
<h1><b>Passenger Information View</b></h1>
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

$sql = "SELECT * FROM tbl_passenger";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center><tr><th>Passenger_Id</th><th>Journey_Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Passenger_Id"]. "</td><td>" .$row["Journey_Date"]."</td></tr>";
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

