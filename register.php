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
  <nav>
    <div class="nav-wrapper red lighten-1">
      <a href="index.php" class="brand-logo">&nbsp;&nbsp;&nbsp;&nbsp;CSAT</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="">Gallery</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="register.php">Sign Up</a></li>
        <li><a href="login.php">Sign In</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="events.php">Events</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="register.php">Sign Up</a></li>
        <li><a href="login.php">Sign In</a></li>
      </ul>
    </div>
  </nav>
</header>

<body>

    <div class="container">      
        <div align="center" class="card-panel hoverable">
            <div class="container">
            <a href=""><div class="card-panel blue darken-1 hoverable"> <font color='white'>Create a CSAT Account</font></div></a>    
            </div>
        
                <div class="row">
                  <form class="col s12" method="POST" action="regist.php">
                    <div class="row">
                      <div class="input-field col s6">
                          <i class="material-icons prefix">person_pin</i>
                          <input name="fname"id="fname" type="text" class="validate">
                          <label for="fname">First Name</label>
                      </div>
                      <div class="input-field col s6">
                          <i class="material-icons prefix">person_pin</i>
                          <input name="lname"id="lname" type="text" class="validate">
                          <label for="lname">Last Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                          <i class="material-icons prefix">email</i>
                          <input name="email" id="email" type="email" class="validate">
                          <label for="email">Email</label>
                      </div>
                      <div class="input-field col s6">
                          <i class="material-icons prefix">phone</i>
                          <input name="phoneno" id="phoneno" type="text" class="validate">
                          <label for="phoneno">Phone</label>
                      </div>
                    </div>
                    <div class="row">
                       <div class="input-field col s6">
                          <i class="material-icons prefix">reorder</i>
                          <input name="dob" id="dob" type="text" class="datepicker">
                          <label for="dob">Date of Birth</label>
                      </div>
                      <div class="input-field col s6">
                          <i class="material-icons prefix">perm_identity</i>
                          <input name="secid" id="secid" type="text" class="validate">
                          <label for="secid">Institution ID</label>
                      </div>
                    </div>  
                    <div class="row">
                      <div class="input-field col s6">
                        <i class="material-icons prefix">https</i>
                        <input name="password" id="password" type="password" class="validate">
                        <label for="password">New Password</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">https</i>
                        <input name="confirmpassword" id="confirmpassword" type="password" class="validate">
                        <label for="confirmpassword">Confirm Password</label>
                      </div>
                    </div>
                    <div class="row">
                        <div align="center" class="input-field col s5">
                           <select name="membertype">
                                <option value='1'>Student</option>
                                <option value='0'>Faculty</option>
                           </select>
                          <label>Select type of member</label>
                        </div>
                    </div>   
                    <div class="row">
                      <button class="btn waves-effect waves-light" type="submit" name="action">Sign Up
                            <i class="material-icons right">send</i>
                      </button>
                    </div>  
                    <p><?php echo $_GET['status']; ?></P>
                  </form>
                </div>      
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