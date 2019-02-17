<!DOCTYPE HTML>  
<html>
    <body>
<?php
$name = filter_input(INPUT_POST, 'name');
$rollno = filter_input(INPUT_POST, 'rollno');
$branch = filter_input(INPUT_POST, 'branch');
$year = filter_input(INPUT_POST, 'year');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
//$comment = filter_input(INPUT_POST, 'comment');



if (!empty($name)){
if (!empty($rollno)){
if (!empty($branch)){
if (!empty($year)){
if (!empty($phone)){
if (!empty($email)){

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
  $sql = "INSERT INTO register3 (name,rollno,branch,year,phone,email)
  values ('$name','$rollno','$branch','$year','$phone','$email')";
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
  echo "email should not be empty";
  die();
}
 }
 else{
  echo "phone should not be empty";
  die();
 }
     }
 else{
  echo "year should not be empty";
  die();
 }
     }
else{
  echo "branch should not be empty";
  die();
 }
     }
    else{
  echo "rollno should not be empty";
  die();
 }    }
    else{
  echo "name should not be empty";
  die();
 }
    
    
?>

        <center><h3>your seat will get reserved only after making payment</h3></center>
        <center><a href="https://www.instamojo.com/@misbahshareef/le7b6510c87a943a29b2d12535c86412d/" rel="im-checkout" data-behaviour="remote" data-style="flat-dark" data-text="Checkout With Instamojo"></a></center>
<script src="https://js.instamojo.com/v1/button.js"></script>
        
        
        
        
        
         <a href="index.php">go back</a>
    </body>
</html>