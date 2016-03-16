<?php
session_start();
if(is_null($_SESSION['csatid']))
    header("Location:login.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Papercut | Store</title>
        <link rel="stylesheet" type="text/css" href="css/social.css"/>
        <link rel="stylesheet" type="text/css" href="css/materialize.css"/>
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css"/>
        <link rel="stylesheet" type="text/css" href="font/roboto"/>
                        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
                        <!--Pulling Awesome Font -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
<header>
   <!-- For PC view -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="chpwd.php">Change Password</a></li>
    <li class="divider"></li>
    <li><a href="acc_settings.php">Account Settings</a></li>
    <li class="divider"></li>
    <li><a href="logout.php">Sign Out</a></li>
  </ul>
         <!-- For mobile view -->
  <ul id="dropdown2" class="dropdown-content">
      <li><a href="chpwd.php">Change Password</a></li>
      <li class="divider"></li>
      <li><a href="acc_settings.php">Account Settings</a></li>
      <li class="divider"></li>
      <li><a href="logout.php">Sign Out</a></li>
  </ul>
  <nav>
      <div class="nav-wrapper red lighten-1">
        <a href="home.php" class="brand-logo">&nbsp;&nbsp;&nbsp;&nbsp;CSAT</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="">Gallery</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="talkcsat/index.php">TalkCSAT</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
       </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="events.php">Events</a></li>
          <li><a href="talkcsat/index.php">TalkCSAT</a></li>
          <li><a href="">Gallery</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Account<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>
</header>

<body>    
     <div class="container">
         <a href="home.php"><div class="card-panel blue darken-1 hoverable"> <font color='white'> Hi&nbsp; <?php  echo $_SESSION['fname'];?></font></div></a>    
     </div>


    <div class="container">      
        <div align="center" class="card-panel grey lighten-4 hoverable">
            <div class="container">
                <div class="card-panel blue lighten-1 hoverable"> <font color='white'>Manage Account</font>
                </div>  
            </div>
           
            <ul class="collapsible popout" data-collapsible="accordion">
            <li>
              <div class="collapsible-header"><i class="material-icons">https</i><font type="bold"> Password </font></div>
                <div class="collapsible-body"><p>Change your account password
                      <div class="container" align="left">
                            <a href="chpwd.php" class="waves-effect waves-light btn-large"><i class="material-icons right">lock_outline</i>CHANGE</a>
                      </div></p>

                </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">contact_phone</i>Phone number</div>
                <div class="collapsible-body"><p>Change your phone number

                      <!--Form for phno change -->

                      <div class="row">
                        <form class="col s12" method="POST" action="chphno.php">
                          <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input name="curr_phno" id="curr_phno" type="text" class="validate">
                                <label for="curr_phno">Current phone number</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input name="new_phno" id="new_phno" type="tel" class="validate">
                                <label for="new_phno">New phone number</label>
                            </div>
                          </div>
                         
                                                 <!--Submit Button for Ph number change -->

                              <button class="btn waves-effect waves-light" type="submit" name="action" onclick="Materialize.toast('<p><?php echo $_GET['status']; ?></p>', 150000000)">Change
                                  <i class="material-icons right">send</i>
                              </button>
                        </form>
                      </div>
                 
                    </p>
                </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">perm_identity</i>Delete Account</div>
                 <div class="collapsible-body"><p>Delete your CSAT account permanently</p>

                                    <!-- Modal Trigger -->
                      <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Confirm</a>

                                    <!-- Modal Structure -->
                      <div id="modal1" class="modal">
                        <div class="modal-content">
                            <p><font size="4px">Enter your CSAT password to confirm identity</font></p>
                      <div class="row">
                        <form class="col s12" method="POST" action="delmyaccount.php">
                          <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">https</i>
                                <input name="password" id="password" type="password">
                                <label for="password">Password</label>
                            </div>
                          </div>
                         
                                                 <!--Submit Button for Ph number change -->
                            <div class="container">
                              <button class="btn waves-effect waves-light red" type="submit" name="action" onclick="Materialize.toast('<p><?php echo $_GET['status']; ?></p>', 150000000)">DELETE
                                  <i class="material-icons right">send</i>
                              </button>
                            </div>
                        </form>
                      </div>

                            <!--   -->
                        </div>
                        
                      </div>
                 
                 </div>
            </li>
            </ul>

        </div>
    </div>        
<br><br><br><br><br>
</br></br></br></br></br>

</body>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
            $(document).ready(function(){
            $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
                });
              });
      </script> 
      <script type="text/javascript">
           $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
             });
      </script>    
      <script type="text/javascript">
          $(document).ready(function(){
          $('.slider').slider({half_width: true});
           });
      </script>     
      <script type="text/javascript">
             $(".button-collapse").sideNav();
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