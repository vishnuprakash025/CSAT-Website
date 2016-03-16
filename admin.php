<?php
  session_start();
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
    
      <!--php content for database connection-->
 <?php
 
 $db = mysql_connect('localhost','root','aishu'); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }

 //Step2
 $db_select = mysql_select_db('csatweb',$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
 $cdate=date("Y-m-d");
 $suggevents=mysql_query("SELECT * FROM suggevents",$db);
 $events=mysql_query("SELECT * FROM events WHERE edate < '$cdate'",$db);
 $member=mysql_query("SELECT * FROM member",$db);
?>
    
  
            
<header>
            <!-- For PC view -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="changepwdadmn.php">Change Password</a></li>
    <li class="divider"></li>
    <li><a href="logout.php">Sign Out</a></li>
  </ul>
            <!-- For mobile view -->
  <ul id="dropdown2" class="dropdown-content">
      <li><a href="changepwdadmn.php">Change Password</a></li>
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
         <a href="admin.php"><div class="card-panel blue darken-1 hoverable"> <font color='white'> Welcome Administrator</font></div></a>    
     </div>
       
      
    <div class="container">
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
              <li class="tab col s3"><a href="#test1">Event Approval</a></li>
              <li class="tab col s3"><a href="#test2">Approved Events</a></li>
              <li class="tab col s3"><a href="#test3">Gallery</a></li>
              <li class="tab col s3"><a href="#test4">Members</a></li>
          </ul>
        </div>
      </div>

      <div id="test1" class="col s12">
        <ul class="card-panel">
           <?php
            while($row=mysql_fetch_assoc($suggevents)){?>
            <li class="card-panel hoverable">
            <img src="images/yuna.jpg" alt="" class="circle">
            <span class="title"><a href="#" ><?php echo $row['title'];?></a></span>
            <p><br>
            <?php echo $row['body'];?>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            <div class="container">
              <a href="approve_events.php?sgno=<?php echo $row['sgno']; ?>" class="btn waves-effect waves-teal">Approve</a>
              <br> </br>      
              <a href="cancel_suggevent.php?sgno=<?php echo $row['sgno']; ?>" class="btn waves-effect waves-teal red lighten-1">Reject </a>
            </div>  
            </li>
            <?php  } ?>
        </ul>
      </div>



<div id="test2" class="col s12">
    <ul class="card-panel">
   <?php
    while($row=mysql_fetch_assoc($events)){?>
    <li class="card-panel hoverable">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title"><a href="#" ><?php echo $row['eventname'];?></a></span>
      <p><?php echo $row['edate'];?><br>
         <?php echo $row['venue'];?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      <div class="container"> 
        <a href="cancel_event.php?eventno=<?php echo $row['eventno']; ?>" class="btn waves-effect waves-teal red lighten-1">Cancel</a>
      </div>  
    </li>
   <?php  } ?>
   </ul>
</div>


<div id="test3" class="col s12">
    <ul class="card-panel">
    </ul>
</div>


<div id="test4" class="col s12">
    <ul class="card-panel">
   <?php
    while($row=mysql_fetch_assoc($member)){?>
    <li class="card-panel hoverable">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title"><a href="#" ><?php echo $row['fname']; echo " "; echo $row['lname']; ?></a></span>
      <p><?php if($row['membertype']==1)
                  echo "Student";
              else
                   echo "Faculty";?><br>
      </p>
      <p><?php echo "CSAT ID : ".$row['csatid'];?><br>
      </p>

      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      <div class="container" name=""> 
        <a href="member_delete.php?csatid=<?php echo $row['csatid']; ?>" class="btn waves-effect waves-teal red lighten-1">Remove</a>
      </div>  
    </li>
  <?php  } ?>
  </ul>
</div>
</div>            
</body>       
                      <!--importing js files -->   
 
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script> 
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
