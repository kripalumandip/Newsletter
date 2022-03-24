<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsletter";
$table = "news";

$first_name= $_POST['firstname']; 
$last_name= $_POST['lastname']; 
$email= $_POST['email']; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $table (firstname, lastname, email)
VALUES ('$first_name', '$last_name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsubscribed</title>
</head>
<body>
    <h3>Go Back to <a href = "index.html">home page</a></h3>

</body>
</html>