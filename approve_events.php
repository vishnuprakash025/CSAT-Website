<?php
  session_start();
  $sgno=$_GET['sgno'];
  $_SESSION['sgno']=$sgno;
  if(is_null($_SESSION['username']))
    header("Location:login.php");

 ?> 

<!DOCTYPE html>
<html>
    <head>
        <title>CSAT</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/materialize.css"/>
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css"/>
        <link rel="stylesheet" type="text/css" href="font/roboto"/>
        <link rel="stylesheet" type="text/css" href="css/social.css"/>
                      <!--Pulling Awesome Font -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
                      <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                      <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<header>
   <!-- For PC view -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="chpwdadmn.php">Change Password</a></li>
    <li class="divider"></li>
    <li><a href="logout.php">Sign Out</a></li>
  </ul>
         <!-- For mobile view -->
  <ul id="dropdown2" class="dropdown-content">
      <li><a href="chpwdadmn.php">Change Password</a></li>
      <li class="divider"></li>
      <li><a href="logout.php">Sign Out</a></li>
  </ul>
  <nav>
      <div class="nav-wrapper red lighten-1">
        <a href="admin.php" class="brand-logo">&nbsp;&nbsp;&nbsp;&nbsp;CSAT</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="">Gallery</a></li>
          <li><a href="talkcsat/index.php">TalkCSAT</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
       </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="">Gallery</a></li>
          <li><a href="talkcsat/index.php">TalkCSAT</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Account<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>
</header>
   
<body>    
     <div class="container">
         <a href="admin.php"><div class="card-panel blue darken-1 hoverable"> <font color='white'> Welcome Administrator</font></div>  </a>  
     </div>
   <div class="card-panel hoverable">
     <div class="row">
       <form class="col s12" method="POST" action="approve.php">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input name="cemail" type="email" class="validate">
              <label for="cemail">Coordinator's email</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">person_pin</i>
              <input name="date" type="date" class="datepicker">
              <label for="date">Date of event</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">schedule</i>
              <input name="time" type="tel" class="validate">
              <label for="time">Time of event</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">location_on</i>
              <input name="venue" type="tel" class="validate">
              <label for="venue">Venue</label>
            </div>
          </div>    
               <div class="container"> 
                 <input type="submit" value="Approve"  class="btn waves-effect waves-teal">
               </div>
       </form>
     </div>
   </div>

</body>   
   
   
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>  
      <script type="text/javascript">
          $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
         selectYears: 15 // Creates a dropdown of 15 years to control year
           });
      
      </script> 
      <script type="text/javascript">
             $(".button-collapse").sideNav();
      </script>  
      <script type="text/javascript">
          $(document).ready(function(){
          $('.slider').slider({half_width: true});
           });
      </script>       
    
     
    <footer class="page-footer red lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Department of CSE</h5>
                <p class="grey-text text-lighten-4">Official Website hosted in coordination with CSAT</p>
              </div>
               <div class="col-md-12">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="http://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www,twitter.com" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.plus.google.com" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://www.linkedin.com" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>       
              </div>

              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="aboutus.php">About US</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright red lighten-1">
            <div class="container">© 2005-2015 CSAT, All rights reserved.
            <a class="grey-text text-lighten-4 right" href="http://www.tistcochin.edu.in/">Website by TIST</a>
            </div>
          </div>
        </footer>
</html>