<?php
  session_start();
  if(is_null($_SESSION['csatid']))
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
          <li><a href="events_user.php">Events</a></li>
          <li><a href="talkcsat/index.php">TalkCSAT</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
       </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="events_user.php">Events</a></li>
          <li><a href="talkcsat/index.php">TalkCSAT</a></li>
          <li><a href="">Gallery</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Account<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>

</header>

<body>


<div id="outer-body">    
     
     <div class="container">
         <a href=""><div class="card-panel blue darken-1 hoverable"> <font color='white'> Hello&nbsp; <?php  echo $_SESSION['fname'];?></font></div></a>    
     </div>

                           <!-- FORM  -->
    <div class="container">
     <div class="card-panel hoverable">  
         <div class="container">
            <div class="card-panel   teal darken-1 hoverable"> <font color='white'> Propose an Event</font></div> 
        </div>
        <div class="row">
          <form class="col s12" enctype="multipart/form-data" method="POST" action="evepro.php">
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">mode_edit</i>
                <input name="eventname" id="eventname" type="text" class="validate">
                <label for="eventname">Title</label>
              </div>
            </div>  
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">description</i>
                <textarea name="description" id="description" class="materialize-textarea"></textarea>
                <label for="description">Description of event</label>
              </div>
            </div>
            <div class="row">    
                <div class="input-field col s6">
                  <select name="eventtype">
                    <option value="" disabled selected>Choose from options</option>
                    <option value="1">Workshop</option>
                    <option value="2">Talks</option>
                    <option value="3">Gaming</option>
                  </select>
                  <label>Event Type</label>
                </div>

            </div> 
            <div class="row">
              <div class="file-field input-field col s6">
                    <div class="btn">
                      <span>File</span>
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
              </div>
            </div> 
              <div class="container" align="center">
                <button class="btn waves-effect waves-light  teal darken-1" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                </button>
              </div>  
            
          </form>
          <fieldset></fieldset>
          <form  enctype="multipart/form-data" method="POST" action="evepro.php">
          <input type="hidden" name="MAX_FILE_SIZE" value="2000000">                  
          <input name="userfile" type="file">
          <button class="btn waves-effect waves-light  teal darken-1" type="submit" name="action">send</button>
          </form>
        </div>
      </div>  
    </div>  
  </div>

        <div class="container" align="right">
                              <!-- Modal Trigger -->
                        <a class="waves-effect waves-light red waves-light btn-floating tooltipped btn-large modal-trigger" align="center" data-position="left" data-delay="50" data-tooltip="Add new Event Type"  href="#modal1"><i class="material-icons">add</i></a>
                              <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                               <p><font size="4px">Add new type of event</font></p>
                            
                                    <div class="row">
                                      <form class="col s8" method="POST" action="new_eve_type.php">
                                        <div class="row">
                                          <div class="input-field col s10">
                                             <i class="material-icons prefix">library_add</i>
                                             <input name="newevetype" id="newevetype" type="text">
                                             <label for="newevetype">Event Type</label>
                                          </div>
                                        </div>
                         
                                                 <!--Submit Button for new event type -->
                                          <div class="container">
                                              <button class="btn waves-effect waves-light teal darken-1" type="submit" name="action" onclick="Materialize.toast('<p><?php echo $_GET['status']; ?></p>', 150000000)">ADD
                                              <i class="material-icons right">send</i>
                                              </button>
                                          </div>
                                      </form>
                                    </div>
                            </div>
                        </div> 

                  </div>

</body>        
                <!--importing js files -->   
 
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>  
      <script type="text/javascript">
           $(document).ready(function() {
            $('select').material_select();
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
      <script type="text/javascript">
               $(document).ready(function(){
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
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