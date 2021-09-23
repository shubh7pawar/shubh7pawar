<?php
$servername = "localhost";
$username = "root";

// Create connection
$conn = new mysqli($servername, $username);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

mysqli_select_db($conn,'classic website');

$user = $_POST['User'];
$email = $_POST['Email'];
$mobile = $_POST['Mobile'];
$comments = $_POST['Comments'];

$query = " insert into userinfodata (user , email, mobile, comments) 
values ('$user', '$email', '$mobile', '$comments') ";

echo "$query";

//mysqli_query($con, $query);
if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
header('location: index.php');
?>