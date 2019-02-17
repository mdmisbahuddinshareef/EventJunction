<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- header-->
  <title>Vasavi Event Junction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--for icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--for css-->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">VASAVI EVENTJUNCTION </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">ABOUT</a></li>
        <li><a href="#tour">EVENT</a></li>
        <li><a href="#contact">FEEDBACK</a></li>
        <li><a data-toggle="modal" data-target="#myLogin">ADMIN</a></li>
                                 <!-- <li class="dropdown">
                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                                 <span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                 <li><a href="#">Photos</a></li>
                                 <li><a href="#">Videous</a></li>
                                 <li><a href="#">Help</a></li>
                                 </ul>
                                 </li>
                                 <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
      </ul>
    </div>
  </div>
</nav>



    

    
    
    
     <!--login -->
    
    
  <div class="modal fade" id="myLogin" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>ADMIN LOGIN</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="">
               
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> USERNAME </label>
              <input type="text" class="form-control" id="usrname" placeholder="username" name="username">
            </div>
              
                 
            <div class="form-group">
              <label for="rollno"><span class="glyphicon glyphicon-pencil"></span>PASSWORD</label>
              <input type="password" class="form-control" id="rollno" placeholder="password" name="password">
            </div>
               <span><?php echo $error; ?></span>
              
            <button type="submit" class="btn btn-block" value="Login" name="submit">login
                <span class="glyphicon glyphicon-ok"></span>
            </button>
            
         </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
         
        </div>
      </div>
    </div>
  </div>
    
    
    <!--logout-->
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
<!--home slides-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="web1.jpg" alt="Euphoria" width="1200" height="700">
        <div class="carousel-caption">
          <h3>WEB DEVELOPMENT</h3>
          <p>Your technical partner towards web success.</p>
        </div>
      </div>

      <div class="item">
        <img src="app.jpg" alt="Euphoria" width="1200" height="700">
        <div class="carousel-caption">
          <h3>ANDROID APP DEVELOPMENT</h3>
          <p>We are a guiding tool, we make your mobile app idea a reality.</p>
        </div>
      </div>

      <div class="item">
        <img src="cyber.jpg" alt="Euphoria" width="1200" height="700">
        <div class="carousel-caption">
          <h3>CYBER SECURITY</h3>
          <p>Prepare for Disaster: Recover Faster.</p>
        </div>
      </div>
    </div>
    <!-- L n R carousels -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>







    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

<!-- About -->
<div id="band" class="container text-center">
  <h3>ABOUT</h3>
  <p><em>Event Junction</em></p>
  <p>The Event Junction has been the driving force behind some of the greatest corporate, 
institutional and private events in Vasavi. It is recognized for producing some of the largest, 
most sophisticated, innovative and memorable events for students. The Event Junction is working in two segments of events, 
Technical and Cultural events. 
  
But in The Event Junction case we have chosen to Customize as per Viewer's choice. 
The Event Junction haven’t form big group and have not included Vendors in our site.
 By doing so, in any event we can provide Number of varieties which you will not find with other Companies. 
The Event Junction division is one of Vasavis's premier and trusted event organizers.

College event describes private events held by college for their fellow students.
 These events can be for large audiences such conferences,fests, or smaller events such as freshers tech events.
 It is also commonly used to mean college hospitality, the process of entertaining guests at college events. </p>
  <br>
    <h3>TUTORS</h3>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Mustafa Al Husainy</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="tutor1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
          <p> <center><b>web developer</b></center>I can help students in their homework and assignment. I am a dedicated and committed tutor. My main object is to help students by tutoring so that they could achieve higher grades. Feel free to ask for help.</p>

      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Marlowe Smith</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="tutor2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p><center><b>app developer</b></center>The best thing about them is handling all issues and taking care of students very carefully. They do very hard for achieving high possible grades and do a committed job with honest efforts. I thank a lot to them for guiding and mentoring me in my study.</p>

      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Felician thomas</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="tutor3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p> <center><b>security specialist</b></center>I love this website and it is extremely helpful. I recommend it to students who are looking for help in their studies from a honest and reliable team.</p>

      </div>
    </div>
  </div>
</div>
















<!-- Event and Regestration section -->
    
    
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Events And Regestration</h3>
    <p class="text-center">Remember to Register to our events!</p>
   <!-- <ul class="list-group">
      <li class="list-group-item">26<sup>th</sup> March <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">27<sup>th</sup> March<span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">28<sup>th</sup> March<span class="badge">3</span></li>
    </ul>  -->

    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="web.jpg" alt="webdevelopment" width="400" height="300">
          <p><strong>WEB DEVELOPMENT</strong></p>
          <p>Friday 26 March</p>
          <button class="btn" data-toggle="modal" data-target="#myAbout1">About</button>
          <button class="btn" data-toggle="modal" data-target="#myModal1">Register</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="android.jpg" alt="androiddevelop,ent" width="400" height="300">
          <p><strong>ANDROID APP DEVELOPMENT</strong></p>
          <p>saturday 27 March</p>
          <button class="btn" data-toggle="modal" data-target="#myAbout2">About</button>
            <button class="btn" data-toggle="modal" data-target="#myModal2">Register</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="cyber1.jpg" alt="cybersecurity" width="400" height="300">
          <p><strong>CYBER SECURITY</strong></p>
          <p>Sunday 28 March</p>
          <button class="btn" data-toggle="modal" data-target="#myAbout3">About</button>
            <button class="btn" data-toggle="modal" data-target="#myModal3">Register</button>
            
        </div>
      </div>
    </div>
      
    </div>
 <!-- Event and Regestration section end -->
    
    
    
    
    
    
    
    
     
    <!--event1 about -->
    
    
  <div class="modal fade" id="myAbout1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>WebDevelopment</h4>
        </div>
        <div class="modal-body">
          <p>Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing the simplest static single page of plain text to the most complex web-based internet applications.<br><b>VENUE:</b>R104,vasavi college of engineering.</p>
            
         
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
         
        </div>
      </div>
    </div>
  </div>
    
    
    <!-- about event -->
    
    
    
    
    

  <!-- Registeration form -->
    
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Registration</h4>
        </div>
        <div class="modal-body">
          
            
          <form role="form" method="post" action="register1.php">
            
              
            
           
              
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name </label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter name" name="name" required>
            </div>
              
                 
            <div class="form-group">
              <label for="rollno"><span class="glyphicon glyphicon-pencil"></span>Roll No</label>
              <input type="text" class="form-control" id="rollno" placeholder="Enter RollNo" name="rollno" required>
            </div>
              
              
              <div class="form-group">
              <label for="branch"><span class="glyphicon glyphicon-pencil"></span>Branch</label>
              <input type="text" class="form-control" id="branch" placeholder="Enter branch" name="branch" required>
            </div>
              
              
              
               <div class="form-group">
              <label for="year"><span class="glyphicon glyphicon-pencil"></span> year</label>
              <input type="number" class="form-control" id="year" placeholder="Select year" min="1" max="4" name="year" required>
            </div>
              
              
              
               <div class="form-group">
              <label for="mobno"><span class="glyphicon glyphicon-phone-alt"></span>phone no</label>
              <input type="text" class="form-control" id="mobno" placeholder="Enter phone no" name="phone" required>
            </div>
              
              
                <div class="form-group">
              <label for="mail"><span class="glyphicon glyphicon-envelope"></span>Email</label>
              <input type="email" class="form-control" id="mail" placeholder="Enter email id " name="email" required>
            </div>
              
          <!--  <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Registeration 500 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?" min="1">
            </div> 
            -->
              
              
              
            <button type="submit" class="btn btn-block">Register
                <span class="glyphicon glyphicon-ok"></span>
            </button>
              
              
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
    
    
    
    
       <!--event2 about -->
    
    
  <div class="modal fade" id="myAbout2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>AndriodApp<br>Development</h4>
        </div>
        <div class="modal-body">
          <p>The Android software development kit (SDK) includes a comprehensive set of development tools.[5] These include a debugger, libraries, a handset emulator based on QEMU, documentation, sample code, and tutorials.<br><b>VENUE:</b>R105,vasavi college of engineering.</p>
            
         
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
         
        </div>
      </div>
    </div>
  </div>
    
    
    <!-- about event -->
    
    
    
    
    

  <!-- Registeration form -->
    
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Registration</h4>
        </div>
        <div class="modal-body">
          
            
          <form role="form" method="post" action="register2.php">
            
              
            
           
              
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name </label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter name" name="name" required >
            </div>
              
                 
            <div class="form-group">
              <label for="rollno"><span class="glyphicon glyphicon-pencil"></span>Roll No</label>
              <input type="text" class="form-control" id="rollno" placeholder="Enter RollNo" name="rollno" required>
            </div>
              
              
              <div class="form-group">
              <label for="branch"><span class="glyphicon glyphicon-pencil"></span>Branch</label>
              <input type="text" class="form-control" id="branch" placeholder="Enter branch"name="branch" required>
            </div>
              
              
              
               <div class="form-group">
              <label for="year"><span class="glyphicon glyphicon-pencil"></span> year</label>
              <input type="number" class="form-control" id="year" placeholder="Select year" min="1" max="4" name="year" required>
            </div>
              
              
              
               <div class="form-group">
              <label for="mobno"><span class="glyphicon glyphicon-phone-alt"></span>phone no</label>
              <input type="text" class="form-control" id="mobno" placeholder="Enter phone no" name="phone" required>
            </div>
              
              
                <div class="form-group">
              <label for="mail"><span class="glyphicon glyphicon-envelope"></span>Email</label>
              <input type="email" class="form-control" id="mail" placeholder="Enter email id " name="email" required>
            </div>
              
         <!--   <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Registeration 500 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?" min="1">
            </div>
              -->
              
              
            <button type="submit" class="btn btn-block">Register
                <span class="glyphicon glyphicon-ok"></span>
            </button>
              
              
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
    
    
    
       <!--event3 about -->
    
    
  <div class="modal fade" id="myAbout3" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>CyberSecurity</h4>
        </div>
        <div class="modal-body">
          <p>Cybersecurity, computer security or IT security is the protection of computer systems from the theft and damage to their hardware, software or information, as well as from disruption or misdirection of the services they provide.<br><b>VENUE:</b>R106,vasavi college of engineering.</p>
            
         
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
         
        </div>
      </div>
    </div>
  </div>
    
    
    <!-- about event -->
    
    
    
    
    

  <!-- Registeration form -->
    
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Registration</h4>
        </div>
        <div class="modal-body">
          
            
          <form role="form" method="post" action="register3.php">
            
              
            
           
              
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name </label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter name" name="name" required>
            </div>
              
                 
            <div class="form-group">
              <label for="rollno"><span class="glyphicon glyphicon-pencil"></span>Roll No</label>
              <input type="text" class="form-control" id="rollno" placeholder="Enter RollNo" name="rollno" required>
            </div>
              
              
              <div class="form-group">
              <label for="branch"><span class="glyphicon glyphicon-pencil"></span>Branch</label>
              <input type="text" class="form-control" id="branch" placeholder="Enter branch" name="branch" required>
            </div>
              
              
              
               <div class="form-group">
              <label for="year"><span class="glyphicon glyphicon-pencil"></span> year</label>
              <input type="number" class="form-control" id="year" placeholder="Select year" min="1" max="4" name="year" required>
            </div>
              
              
              
               <div class="form-group">
              <label for="mobno"><span class="glyphicon glyphicon-phone-alt"></span>phone no</label>
              <input type="text" class="form-control" id="mobno" placeholder="Enter phone no" name="phone" required>
            </div>
              
              
                <div class="form-group">
              <label for="mail"><span class="glyphicon glyphicon-envelope"></span>Email</label>
              <input type="email" class="form-control" id="mail" placeholder="Enter email id " name="email" required>
            </div>
              
            <!--<div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Registeration 500 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?" min="1">
            </div>-->
              
              
              
            <button type="submit" class="btn btn-block">Register
                <span class="glyphicon glyphicon-ok"></span>
            </button>
              
              
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
    
    
</div>
        <!-- Registeration form end -->
    
    
    
    
    
    
    







<!-- Information and Feedback -->
<div id="contact" class="container">
 <h3 class="text-center">Feedback</h3>
<p class="text-center"><em>We love our event fans!</em></p>
  <div class="row">
    <div class="col-md-4">
      <p>Attended? Drop a feedback.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Hyderabad, Telangana</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91-9052536501</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: misbahshareef19@gmail.com</p>
    </div>
   
      
<form action="feedback.php" method="post">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comment" placeholder="Comment" rows="5"required></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
</form>
  </div>
  <br>
    
    
    
    
    
    
    
    
    
  <h3 class="text-center">Event Coordinators And Organisers</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">MISBAH</a></li>
    <li><a data-toggle="tab" href="#menu1">SHREYA</a></li>
    <li><a data-toggle="tab" href="#menu2">VINITHA</a></li>
    <li><a data-toggle="tab" href="#menu3">SHAREEF</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Coordinator</h2>
      <p>phone no: 9052536501</p>
         
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Web Development,Organiser</h2>
      <p>phone no: 7075885090</p>
        
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>App Development,Organiser</h2>
      <p>phone no: 9515940219</p>
         
    </div>
    <div id="menu3" class="tab-pane fade">
      <h2>Cyber Security,Organiser</h2>
      <p>phone no: 9052536501</p>
        
    </div>
  </div>
</div>

<!-- Information and Feedback end-->



    
    
    
    

    
    
    
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
    <a style="font-size:150%;">Follow us on :</a><br>
                           <a href="#"><i class="fa fa-instagram" style="font-size:24px">insta</i></a><br>
                           <a href="#"><i class="fa fa-facebook-official" style="font-size:24px">facebook</i></a><br>
                           <a href="#"><i class="fa fa-google-plus-official" style="font-size:24px">google+</i></a><br>
                           <a href="#"><i class="fa fa-linkedin-square" style="font-size:24px">linkedin</i></a><br>
  
  <p>EventJunction  <a href="#" data-toggle="tooltip" title="All Rights Reserved">All Rights Reserved</a></p>
</footer>

<!-- Footer end  -->



    
    
    
    
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        window.location.hash = hash;
      });
    }
  });
})
</script>

</body>
</html>
