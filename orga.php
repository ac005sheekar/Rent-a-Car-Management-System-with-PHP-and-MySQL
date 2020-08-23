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
      <a href="bike.php">Car information</a>
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
      <a href="bikev.php">Car Information View</a>
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
      <a href="bikes.php">Car information Search</a>
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
                                                     
                                                                      <h1> <b>Organization Information </b> </h1>


<form action="org.php" method="post">
  <b>Organization_Id:<b><br>
  <input type="text" name="Organization_Id" value=" ">
  <br>
  <b>Organization_Name:<b><br>
  <input type="text" name="Organization_Name" value=" ">
<br>

 Organization_Area:<br>
  <input type="text" name="Organization_Area" value=" ">
<br>
  Organization_Contact:<br>
  <input type="text" name=" Organization_Contact" value=" ">
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
