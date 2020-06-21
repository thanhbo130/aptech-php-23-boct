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
$sql = "SELECT * FROM aptech_php_23.customers";
$sqlResult = mysqli_query($conn, $sql);
if (mysqli_num_rows($sqlResult) >0){
    while($row = mysqli_fetch_assoc($sqlResult)){
        echo "id :".$row['id']."- Name: ".$row['fullname']. " ".$row['email']."<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>