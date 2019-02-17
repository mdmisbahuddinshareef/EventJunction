<?php
include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Your Home Page</title>
  <!--<link href="style.css" rel="stylesheet" type="text/css">-->
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
 <div id="profile">
     <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br>
     
     <table>
         <tr>
         <th>id</th>
         <th>table type</th>
         <th>link</th>
         </tr>
         
         
          <tr>
         <td>1</td>
         <td>login details</td>
         <td> <a href="table.php" style="text-decoration:none">gototable</a></td>
         </tr>
         
         
          <tr>
         <td>2</td>
         <td>registeration for web development</td>
         <td>  <a href="table1.php" style="text-decoration:none">registeration details</a></td>
         </tr>
         
         
          <tr>
         <td>3</td>
         <td>registration for app development</td>
         <td> <a href="table2.php" style="text-decoration:none">registeration details</a></td>
         </tr>
         
         
          <tr>
         <td>4</td>
         <td>registeration for cyber security</td>
         <td><a href="table3.php" style="text-decoration:none">registeration details</a></td>
         </tr>
          <tr>
         <td>5</td>
         <td>feed back details</td>
         <td><a href="table4.php" style="text-decoration:none">gototable feedback</a></td>
         </tr>
     
    
     </table>
  <b id="logout"><button><b><a href="logout.php" style="text-decoration:none">LogOut</a></b></button> </b>
 </div>
</body>
</html>






<?php
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>