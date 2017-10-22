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
$BatchNo = $_POST["BatchNo"];

$uname = $_SESSION['CurrentUser'];
$sql = "INSERT INTO Cart (ModelNo ,UserName) VALUES ('$BatchNo', '$uname')";
if ($conn->query($sql) === TRUE) {
   
   header("Location:UserViewCart.php"); 
exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?> 
