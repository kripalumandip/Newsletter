<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsletter";
$table = "news";

$from= 'email_to_be_sent_from';//specify here the address that you want email to be sent from 
$subject = $_POST['subject'];
$body = $_POST['body'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM $table";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  //Output data of each row
  $first_name = $row['firstname'];
  $last_name = $row['lastname'];
  $email = $row['email'];
  //Message 
  $msg= "Dear $first_name $last_name,\n$body";
  //send email 
  mail($email, $subject, $msg, 'From:' .$from); 
  echo 'Email sent to: ' . $email. '<br>'; 
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
