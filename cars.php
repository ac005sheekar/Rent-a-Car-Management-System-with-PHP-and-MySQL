
<?php
 include 'header.php';
 ?>
<html lang="en">
<head>
<style>
table, th, td {
    border: 1px solid black;
	text-align: center;
	 font-size: 25px;
}
</style>

</head>
<body>
<div class="flex-container">
<div id="header">
</div>


<form method="POST" style="text-align:center">
<h1>Car Information Search</h1>
<b>Search By Car_No:</b><br>
<input name="search_id" value="" type="number"><br><br>
<input value="Go" type="submit">
</form>
<article class="article">
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_car";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Car_No,Pick_Location,Pick_Time,Drop_Location,Drop_Time FROM tbl_car where Car_No='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
	echo "<tr><th>car_No</th><th>Pick_Location</th><th>Pick_Time</th><th>Drop_Location</th><th>Drop_Time</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>". $row["Car_No"]. "</td><td>" . $row["Pick_Location"]."</td><td>" .$row["Pick_Time"]."</td><td>" .$row["Drop_Location"]."</td><td>" .$row["Drop_Time"]."</td>";
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
</div>
<br><br><br><br><br>
</article>



</body>
</html>
<?php
 include 'footer.php';
 ?>

