<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color:dimgray;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color:darkgray;
   color: white;
    }
      
  tr:nth-child(even) {background-color: lightgray}
 </style>
</head>
<body>

<table>
 <tr>
     <th>id</th>
  <th>name</th> 
  <th>email</th> 
  <th>feedback</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "project");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT id,name, email, comment FROM feedback";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["comment"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
    
    
    
   <button><b><a href="profile.php" style="text-decoration:none">Back</a></b></button> 
</body>
</html>

