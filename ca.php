<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
header
{
    background-color:Khaki ;
	border-radius:10px;
}
.navbar {
    overflow: hidden;
	border-radius:10px;
    background-color: Salmon ;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 18px;
    color: white;
    text-align: center;
    padding: 14px 18px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 18px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 18px;
    background-color: Salmon ;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: OrangeRed  ;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: OrangeRed ;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: SandyBrown;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
<body bgcolor="Violet" style="text-align:center"; </body>
<div class="navbar">
  <a href="home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Insert 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="car.php">Car information</a>
	  <a href="driver.php">Driver information</a>
	  <a href="passen.php">Passenger information</a>
      <a href="bill.php">Bill information</a>
	  <a href="orga.php">Organization information</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">View 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="carv.php">Car Information View</a>
	  <a href="driverv.php">Driver Information View</a>
	  <a href="passenv.php">Passenger Information View</a>
	  <a href="billv.php">Bill Information View</a>
	  <a href="orgav.php">Organization information View</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Search
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cars.php">Car information Search</a>
	  <a href="drivers.php">Driver Information Search</a>
	  <a href="passens.php">Passenger Information Search</a>
	  <a href="bills.php">Bill Information Search</a>
	  <a href="orgas.php">Organization Information Search</a>
	
    </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn">Report
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href=""></a>
	
    </div>
  </div>  
</div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" 
                                                     
                                                                      <h1> <b>Car Information </b> </h1><br>
																	  


  <b>Car_No:<b><br>
  <input type="text" name="Car_No" value=" ">
  <br>
  <b>Pick_Location:<b><br>
  <input type="text" name="Pick_Location" value=" ">
<br>

 Pick_Time:<br>
  <input type="text" name="Pick_Time" value=" ">
<br>
  Drop_Location:<br>
  <input type="text" name="Drop_Location" value=" ">
 <br>
   Drop_Time:<br>
  <input type="text" name="Drop_Time" value=" ">
 <br>
  <input type="submit" value="Submit">
  <br><br>
</form> 
<br><br>

<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   border-radius:15px;
   background-color: Tomato  ;
   color: white;
   text-align: center;
}
</style>
</head>
<body>



<div class="footer">
  <p><b>Sheekar Banerjee</b></p>
</div>


</body>
</html>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_car";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}

$Bike_No = $_POST['Car_No'];
$Pick_Location = $_POST['Pick_Location'];
$Pick_Time = $_POST['Pick_Time'];
$Drop_Location = $_POST['Drop_Location'];
$Drop_Time = $_POST['Drop_Time'];

$sql = "INSERT INTO tbl_car (Car_No, Pick_Location, Pick_Time, Drop_Location, Drop_Time) VALUES('$Car_No','$Pick_Location','$Pick_Location','$Drop_Location','$Drop_Time')";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($Car_No== "" || $Pick_Location== "" || $Pick_Time== "" || $Drop_Location== "" || $Drop_Time== "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

header("refresh:4;url=car.php");
?>
