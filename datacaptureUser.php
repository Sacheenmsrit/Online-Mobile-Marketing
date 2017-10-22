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
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$country = $_POST["country"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$uname = $_POST["uname"];
$pward = $_POST["pword"];
$hint = $_POST["hint"];
$value = 0;
$sql = "INSERT INTO UserDetails (FirstName , LastName, DOB, Gender, Nationality, MobileNo, EmailId, UserName, Password, Hint, value)
VALUES ('$firstname', '$lastname', '$dob', '$gender', '$country', '$mobile', '$email', '$uname', '$pward', '$hint' , '$value')";
if ($conn->query($sql) === TRUE) {
 header("Location:Userloginaftersignin.html"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?> 
