<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsletter";
$table = "news";

$email_entered = $_POST['emailentered'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM $table WHERE email = '$email_entered'";
if ($conn->query($sql) === TRUE) {
  echo "You have unsubscribed successfully. Sorry to see you go.";
} else {
  echo "Error unsubscribing: " . $conn->error;
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
    <h3>Go Back to <a href = "index.php">home page</a></h3>

</body>
</html>