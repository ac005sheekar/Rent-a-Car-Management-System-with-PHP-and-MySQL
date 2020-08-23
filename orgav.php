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
<h1><b>Organization Information View</b></h1>
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

$sql = "SELECT * FROM tbl_org";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center><tr><th>Organization_Id</th><th>Organization_Name</th><th>Organization_Area</th><th>Organization_Contact</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Organization_Id"]. "</td><td>" . $row["Organization_Name"]."</td><td>" .$row["Organization_Area"]."</td><td>" .$row["Organization_Contact"]."</td></tr>";
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

