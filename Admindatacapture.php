
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
$sql = "DELETE FROM Mobile  WHERE ModelNo = '$BatchNo' ";
$result = $conn->query($sql);
?>
	

</head>
<body>
 <?php
    
	    



   
  $_SESSION['CurrentUser']=$uname;
    header("Location:AdminDeleteMobiles.php"); 



 

  $conn->close();
?>


	
</body>
</html>
