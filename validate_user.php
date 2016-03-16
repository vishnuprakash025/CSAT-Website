
<!DOCTYPE>
<html>
<body>
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

 //Step3
 
 $v1=$_POST['email'];
 $v2=$_POST['pwd'];


 //Step4
 $admin=mysql_query("SELECT * FROM admin WHERE username='$v1'",$db);
 $arow=mysql_fetch_array($admin);
 $aname=$arow['username'];
 $apwd=$arow['apwd'];
 
 $result=mysql_query("SELECT * FROM member WHERE email='$v1'",$db);
 $row=mysql_fetch_array($result);
 $email= $row['email'];
 $pwd=$row['pwd'];
 $fname=$row['fname'];
 $csatid=$row['csatid'];
 $memtype=$row['membertype'];
 $phno=$row['phno'];
 
 if(empty($_POST['email']) || empty($_POST['pwd'])) 
     {
     unset($_SESSION['email']);
     unset($_SESSION['pwd']);
     header("Location:login.php?status=Credentials Empty");  
     
     }  
 
 
 else if($aname==$v1)
    {
       if($apwd==$v2)
         {
          session_start();
          $_SESSION['username']=$aname;
          $_SESSION['apwd']=$apwd;
          header("Location:admin.php");
         }
 
       else
        {
          unset($_SESSION['email']);
          unset($_SESSION['pwd']);
          header("Location: login.php?status=Incorrect Password"); 
        }
    }


 else if($email==$v1)
    {
       if($pwd==$v2)
         {
         //echo "LOGIN SUCCESSFUL ";
          session_start();
	        $_SESSION['email']=$email;
          $_SESSION['fname']=$fname;
          $_SESSION['pwd']=$pwd;
          $_SESSION['csatid']=$csatid;
          $_SESSION['phno']=$phno;
	      header("Location:home.php");
         }
 
       else
        {
          unset($_SESSION['email']);
          unset($_SESSION['pwd']);
          header("Location: login.php?status=Incorrect Password"); 
        }
    }


?>
</body>
</html>
