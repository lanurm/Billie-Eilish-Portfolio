<?php

$Fname= $_POST['name'];
$Email= $_POST['email'];
$Contact = $_POST['contact'];
$comment = $_POST['comment'];



//database connection 
$servername = "localhost";
$username = "root";
$password = "";
$mydb="myDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$mydb);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



// sql to create table
/*$sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  FullName VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }*/

  $sql = "INSERT INTO MyGuests (FullName, email , contact , comment) VALUES ('$Fname','$Email','$Contact','$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>