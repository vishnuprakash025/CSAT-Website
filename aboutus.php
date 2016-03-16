
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

            <!-- Modal Trigger -->
         <li><a class="waves-effect modal-trigger" href="#modal1">TalkCSAT</a></li>   
        
   

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
       <li><font color="black" size="3px">You must Sign In to your CSAT Account to access TalkCSAT forum</font></li>
    </div>
    <div class="modal-footer">
      <a href="login.php" class=" modal-action modal-close waves-effect waves-blue btn-flat">Sign In</a>
    </div>
  </div>

        <li><a href="register.php">Sign Up</a></li>
        <li><a href="login.php">Sign In</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="events.php">Events</a></li>
        <li><a href="login.php">TalkCSAT</a></li> 
             

        <li><a href="">Gallery</a></li>
        <li><a href="register.php">Sign Up</a></li>
        <li><a href="login.php">Sign In</a></li>
      </ul>
    </div>
  </nav>
</header>    


<body>
          <div class="card-panel hoverable">
            <div id="container">
                <div id="container-info">
                    <img src="img/csatlogo.png"/>
                    <h1>Computer Society of Toc H</h1>
                    <p class="flow-text">Toc H Institute of Science and Technology (TIST) is not merely another Engineering College producing hordes of Engineering graduates every year.</p>
                </div>
            </div>
            <br><br>
            </br></br>  
          </div>

  <br><br>
  </br></br>        

</body>



      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
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

           