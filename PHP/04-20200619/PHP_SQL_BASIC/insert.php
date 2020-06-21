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
$sql = "INSERT INTO aptech_php_23.customers(fullname,email)
VALUES ('Cao Thanh Bo','caothanhbo@gmail.com'),('Cap kim Thao','caocoicot@gmail.com');";
$sql .= "INSERT INTO aptech_php_23.customers(fullname,email)
VALUES ('Pham Hong Son','SonPham@gmail.com'),('Vo Tien Nam','NamVo@gmail.com');";
if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>