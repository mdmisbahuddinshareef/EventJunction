<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$comment = filter_input(INPUT_POST, 'comment');



if (!empty($name)){
if (!empty($email)){
if (!empty($comment)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO feedback (name, email, comment)
  values ('$name','$email','$comment')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "comment should not be empty";
  die();
}
 }
 else{
  echo "email should not be empty";
  die();
 }
     }
 else{
  echo "name should not be empty";
  die();
 }
    
    
?>