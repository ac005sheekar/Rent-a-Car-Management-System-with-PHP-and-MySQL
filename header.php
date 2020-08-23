<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
header
{
    background-color:Tomato ;
	border-radius:10px;
}
.navbar {
    overflow: hidden;
	border-radius:10px;
    background-color: Khaki;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 18px;
    color: Maroon;
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
    color: Maroon;
    padding: 14px 18px;
    background-color: Khaki ;
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
<header>
<body style="text-align:center;color:Maroon;"; </body>
  <h1><b>Rent a Car Management System</b></h1>
  
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
</header>
</body>
</html>