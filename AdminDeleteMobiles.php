<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>UserHomepage</title>
<?php 
session_start();
		
?>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sellphone.com";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Mobile";
$result = $conn->query($sql);
?>
<script type="text/javascript">
window.onload = function(){
    window.displayImgCount = 0;
    function cycleImage(){
        if (displayImgCount !== 0) {
            document.getElementById("img" + displayImgCount).style.display = "none";
        }
        displayImgCount = displayImgCount === 6 ? 1 : displayImgCount + 1;
        document.getElementById("img" + displayImgCount).style.display = "block";
        setTimeout(cycleImage, 1500);
    }
    cycleImage();
}
</script>
<script>
function myFunction(int $i) {
    <?php $_SESSION['id']=i;?>
}
</script>

<style>

body{ background-image:url("http://hdwallpapers.org.in/uploads/burj_khalifa_dubai_photos_hd_wallpaper_160216085830.jpg");
	background-repeat:no-repeat;
	background-size:cover;
		background-attachment: fixed;
	background-position: right top;
	padding-top: 0px;
	padding-left:0px;
	padding-right:0px;
	padding-bottom:0px;
	background-opacity: 0.5;
    	filter: alpha(opacity=50);

     }
#h {
	overflow:auto;
	color:white;
	border-align:center;
	border:2px solid grey;  
	text-align:center;
	font-size:75px;	
	width:100%;
	height:auto;
	
	background-color:black;
	background: red; /* For browsers that do not support gradients */
  	background: -webkit-linear-gradient(left,rgba(255,0,0,0),rgba(0,255,0,1)); /*Safari 5.1-6*/
  	background: -o-linear-gradient(right,rgba(255,0,0,0),rgba(0,255,0,1)); /*Opera 11.1-12*/
  	background: -moz-linear-gradient(right,rgba(255,0,0,0),rgba(0,255,0,1)); /*Fx 3.6-15*/
  	background: linear-gradient(to right, rgba(255,0,0,0), rgba(0,255,0,1)); /*Standard*/
	text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px black;
	box-shadow: 10px 10px 5px green;
	}

.section {
    float: left;
    width: 1000px;
    height: 1175px;
    margin: 1px;
     

}

.after-box {
    clear: left;
	float:right;
     color:white;
	height:50px;     
}
ul.pagination1 {
    display: inline-block;
    padding: 0;
    margin: 1px;
   float:left;
background-color:black;
	background: red; /* For browsers that do not support gradients */
  	background: -webkit-linear-gradient(left,rgba(255,0,0,0),rgba(0,255,0,1)); /*Safari 5.1-6*/
  	background: -o-linear-gradient(right,rgba(255,0,0,0),rgba(0,255,0,1)); /*Opera 11.1-12*/
  	background: -moz-linear-gradient(right,rgba(255,0,0,0),rgba(0,255,0,1)); /*Fx 3.6-15*/
  	background: linear-gradient(to right, rgba(255,0,0,0), rgba(0,255,0,1)); /*Standard*/
	tex-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px black;
	box-shadow: 10px 10px 5px green;
}

ul.pagination1 li {display: inline;}

ul.pagination1 li a {
    color: black;
    float: left;
    padding: 8px 15px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid green;
border-bottom: 1px solid black;  
  
	font-size: 18px;
}

ul.pagination1 li  {
    background-color: #eee;
    color: black;
    border: 1px solid #ddd;
}
div.img {
    margin: 20px;
    border: 1px solid #ccc;
    float: left;
    width: 280px;
height: auto;
background-color:white;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
ul.pagination1 li a:hover:not(.active) {background-color: lightgrey;}
ul.pagination2 {
    float: left;
    width: 225px;
    height: 1150px;
    margin: 0px;
    
	text-align:center;
    
    display: inline-block;
    padding: 10px;
    margin: 3px;
float:left;
background: red; /* For browsers that do not support gradients */
  	background: -webkit-linear-gradient(left,rgba(200,0,0,0),rgba(0,200,0,1)); /*Safari 5.1-6*/
  	background: -o-linear-gradient(right,rgba(200,0,0,0),rgba(0,200,0,1)); /*Opera 11.1-12*/
  	background: -moz-linear-gradient(right,rgba(200,0,0,0),rgba(0,200,0,1)); /*Fx 3.6-15*/
  	background: linear-gradient(to right, rgba(200,0,0,0), rgba(0,200,0,1)); /*Standard*/
	tex-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px black;
	box-shadow: 10px 10px 5px green;
}

ul.pagination2 li {display: inline;}

ul.pagination2 li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    font-size: 18px;
	margin:4px 0px 4px 0px;
	width:190px;
}

ul.pagination2 li a.active {
    background-color: green;
    color: black;
    border: 1px solid #ddd;
}

ul.pagination2 li a:hover:not(.active) {background-color: green;color:white;}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}
.dropbtn {
    background-color: #32CD32;
    color: Black;
    padding: 10px;
    font-size: 16px;
    border: 1px solid black;
    cursor: pointer;
    
}

.dropdown {
    position: relative;
    display: inline-block;
    height:0px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: lightgrey}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.st
{
	border:3px solid black;
	margin-left:29px;
	 height:400px;
	  width:900px;
}    
</style>
</head>
<body>
<div class="h">
<h1 id="h"><img src="http://ncovt.com/pictures/CropLogo.gif" alt="logo" height="60px" 			width="100"><i><b><span style="color:#FF8C00">Agri</span><span style="color:white">Inf<img 			src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Spinning_Ashoka_Chakra.gif" 			alt="O" height="65px" width="65px"><span style="color:white">rm</span>.<span style="color:green">com</span></b></i></h1>
</div>

<ul class="pagination1">
  <li><a href="AdminHomepage.php" class="active" checked>Home</a></li>
  <li><a href="Adminphotogalary.php">Photo Gallary</a></li>
  <li><a href="Adminaboutus.php">About us</a></li><li><a href="AdminHomepage.php" class="active" checked>Home</a></li>
  <li><a href="Adminphotogalary.php">Photo Gallary</a></li>
	<li><a href="Admincontactus.php" class="active" checked>Contact Us</a></li>
 <li><a href="Adminoffers.php">Offers</a></li>
  <li><a href="Adminnews.php">News</a></li>
  <li><a href="Adminfeedback.php">Feedback</a></li>

</ul>
<div class="dropdown">
  <button class="dropbtn"><b><?php echo " ".$_SESSION['CurrentUser']." " ?></b></button>
  <div class="dropdown-content">
    <a href="UserProfile.php">Profile</a>
    <a href="#">Update Profile</a>
    <a href="Userdelete.php">Delete Account</a>
     <a href="UserLogout.php">Log Out</a>
  </div>
</div><br><br>
<ul class="pagination2">
<li><a href="AdminViewMobiles.php">VIEW ALL MOBILES</a></li>
<li><a href="AdminNewMobiles.php">ADD NEW MOBILE</a></li>
<li><a href="AdminDeleteMobiles.php">DELETE MOBILE</a></li>
<li><a href="AdminViewOrderedMobiles.php">VIEW ORDERED MOBILE</a></li></ul>
<div class="section">
	<?php
    if ($result->num_rows > 0) 
{
     while($row = $result->fetch_assoc()) 
     {
		
?>
<form action="Admindatacapture.php" method="post">
<div class="img">
  <div class="desc"> Mobile Name :<?php echo $row["ModelName"]?></div>
  <div class="desc"> Model No :<?php echo $row["ModelNo"]?></div>
   <img src=<?php echo $row["ImageURL"];?> alt="Forest" width="300" height="200">
     
   <div class="desc" style="color:red;">MRP : <?php echo $row["Price"]?> /-</div>
<input type="text" name="batch" placeholder="Enter ModelNo">
<input type="image" src="http://www.clker.com/cliparts/j/b/S/O/2/2/red-delete-rectangle-button-hi.png" border="0" height="50" width="270" alt="Submit" />
   
</div>

</form>



<?php		
	 }
}
	$conn->close();
?>
</div>
<div id="footer">
Copyright © worldexplore.com
</div>



</body>





