
<!DOCTYPE html>
<html>
<head>
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
$BatchNo = $_POST["batch"];
$uname = $_SESSION['CurrentUser'];
$sql = "DELETE FROM Cart WHERE ModelNo = '$BatchNo' ";
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
<title>KulankarTours</title>
		<link rel="icon" type="image/gif/png" href="http://cities.nu/files/2016/02/travel.png">
		<link rel="stylesheet" type="text/css" href="login.css"></link>
<meta charset="UTF-8">
<style>
		#footer {
    				background-color:black;
    				color:white;
    				clear:both;
    				text-align:center;
    				padding:5px;
			}
			.st
{
	border:3px solid black;
	margin-left:180px;
	 height:400px;
	  width:900px;
	 
} 
		</style>
		
<title>Insert title here</title>
</head>
<body>
<h1 id="h"><img src="http://www.locuskrushi.com/images/mobile1.gif" alt="logo" height="60px" 			width="100"><i><b><span style="color:#FF8C00">sell</span><span style="color:white">ph<img 			src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Spinning_Ashoka_Chakra.gif" 			alt="O" height="40px" width="40px"><span style="color:white">ne</span>.<span 			style="color:green">com<img src="http://static.dnaindia.com/sites/default/files/2015/01/10/300648-make-in-india.jpg" alt="logo" height="60px" 			width="100"></span></b></i></h1><br>
 <?php
header("Location:UserViewCart.php");

  $conn->close();
?>
<div id="footer">
Copyright © AgriInform.com<br>
designed by Sacheen,Sachin and Rahul.<br>
 AgriInfo is optimized for learning, testing, and training.While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.
Powered by AgriInfo.com.
</div>

	
</body>
</html>
