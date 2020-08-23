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
      <a href="">Car information</a>
	  <a href="">Driver information</a>
	  <a href="">Passenger information</a>
      <a href="">Bill information</a>
	  <a href="">Organization information</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">View 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="">Car Information View</a>
	  <a href="">Driver Information View</a>
	  <a href="">Passenger Information View</a>
	  <a href="">Bill Information View</a>
	  <a href="">Organization information View</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Search
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="">Car information Search</a>
	  <a href="">Driver Information Search</a>
	  <a href="">Passenger Information Search</a>
	  <a href="">Bill Information Search</a>
	  <a href="">Organization Information Search</a>
	
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
                                                     
                                                                      <h1> <b>Bill Information </b> </h1><br>
																	  


  <b>Bill_No:<b><br>
  <input type="text" name="Bill_No" value=" ">
  <br>
  <b>Total_KM_Journey:<b><br>
  <input type="text" name="Total_KM_Journey" value=" ">
<br>

Per_KM_Cost:<br>
  <input type="text" name="Per_KM_Cost" value=" ">
<br>
  Total_Cost:<br>
  <input type="text" name=" Total_Cost" value=" ">
 <br>
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

$Bill_No = $_POST['Bill_No'];
$Total_KM_Journey = $_POST['Total_KM_Journey'];
$Per_KM_Cost = $_POST['Per_KM_Cost'];
$Total_Cost = $_POST['Total_Cost'];


$sql = "INSERT INTO tbl_bill (Bill_No, Total_KM_Journey, Per_KM_Cost, Total_Cost) VALUES('$Bill_No','$Total_KM_Journey','$Per_KM_Cost','$Total_Cost')";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($Bill_No== "" || $Total_KM_Journey== "" || $Per_KM_Cost== "" || $Total_Cost== "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

header("refresh:4;url=bill.php");
?>
