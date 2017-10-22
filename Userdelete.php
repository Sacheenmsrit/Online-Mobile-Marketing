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
$uname = $_SESSION["username"];
$sql = "DELETE FROM UserDetails WHERE UserName = '$uname'";
$conn->query($sql);
$conn->close();
header("Location:Mainhomepage.html"); 
?>


