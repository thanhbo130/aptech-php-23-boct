<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbase = "aptech_php_23";
$getName = $_GET["Name"];
$getEmail = $_GET["Email"];
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";
$sql = "INSERT INTO $dbase.customers(fullname,email)
VALUES ('$getName','$getEmail')";
if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


mysqli_close($conn);


?>