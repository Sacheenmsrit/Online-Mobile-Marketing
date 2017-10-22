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
$ImageURL = $_POST["ImageURL"];
$ModelNo = $_POST["ModelNo"];
$ModelName = $_POST["ModelName"];
$Price = $_POST["Price"];
$WidthHeightDepthWeight = $_POST["WidthHeightDepthWeight"];
$Resolution = $_POST["Resolution"];
$ResolutionType = $_POST["ResolutionType"];
$OS = $_POST["OS"];
$OSType = $_POST["OSType"];
$InterStorage = $_POST["InterStorage"];
$ExpandStorage = $_POST["ExpandStorage"];
$RAM = $_POST["RAM"];
$Colour = $_POST["Colour"];

$sql = "INSERT INTO Mobile (ImageURL, ModelNo, ModelName, Price, WidthHeightDepthWeight, Resolution, ResolutionType, OS, OSType, InterStorage, ExpandStorage ,RAM ,Colour)
VALUES ('$ImageURL' ,'$ModelNo' ,'$ModelName' ,'$Price', '$WidthHeightDepthWeight', '$Resolution', '$ResolutionType', '$OS', '$OSType', '$InterStorage', '$ExpandStorage' , '$RAM' ,'$Colour')";
if ($conn->query($sql) === TRUE) {
 header("Location:AdminViewMobiles.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?> 

