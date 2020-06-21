<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

$sql = "CREATE TABLE aptech_php_23.Customers(
  id int AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  echo "Table customer create succesfully";
} else {
  if(mysqli_error($conn)=="Table 'customers' already exists"){
  }
  else {echo "Error create custumers table: ". mysqli_error($conn);}
 }
$sql = "ALTER TABLE aptech_php_23.Customer
 ADD email UNIQUE";
 
mysqli_close($conn);
?>