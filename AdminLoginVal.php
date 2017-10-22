  <?php
session_start();
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
$sql = "SELECT UserName ,Password FROM UserDetails WHERE value=1";
$result = $conn->query($sql);
$uname = $_POST["username"];
$pward = $_POST["password"];
$flag=0;
if ($result->num_rows > 0) 
{
     while($row = $result->fetch_assoc()) 
     {
        if($uname == $row["UserName"]&& $pward == $row["Password"])
		{
			$flag=1;
		}
	 }
}
if($flag == 1)
{
	echo "Valid User";
	$_SESSION['CurrentUser']=$uname;
	header("Location:AdminHomepage.php"); 
exit;
	
?>

<?php
}
else
	
	$conn->close();
header("Location:AdminLoginFail.html"); 
?>

