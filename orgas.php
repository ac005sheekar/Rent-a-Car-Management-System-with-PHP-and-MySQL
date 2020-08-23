
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
<h1>Organization Information Search</h1>
<b>Search By Organization_Id :</b><br>
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

$sql = "SELECT Organization_Id,Organization_Name,Organization_Area,Organization_Contact FROM tbl_org where Organization_Id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
	echo "<tr><th>Organization_Id</th><th>Organization_Name</th><th>Organization_Area</th><th>Organization_Contact</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>". $row["Organization_Id"]. "</td><td>" . $row["Organization_Name"]."</td><td>" .$row["Organization_Area"]."</td><td>" .$row["Organization_Contact"]."</td>";
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

