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

 session_start();

 //Step3
 
 $v1=$_POST['oldpwd'];
 $v2=$_POST['newpwd'];
 $v3=$_POST['pwdcon'];
 $mail=$_SESSION['email'];
 if(empty($_POST['oldpwd']) || empty($_POST['newpwd']) || empty($_POST['pwdcon'])) 
     {
     unset($_SESSION['oldpwd']);
     unset($_SESSION['newpwd']);
     unset($_SESSION['pwdcon']);
     header("Location:chpwd.php?status=Credentials Empty");  
     
     }  

 else if($v1==$_SESSION['pwd'])
 {
 	if($v3==$v2)
 	{
     $_SESSION['pwd']=$v2; 
     $query="UPDATE member SET pwd = '$v2' WHERE email = '$mail'";
     $response=mysql_query($query,$db) or die(mysql_error());
 	 if($response)
 		header("Location:chpwd.php?status=Password Changed");
 	 else
 		header("Location:chpwd.php?status=Failed to change Password");
 
 	}
    else 
 		header("Location:chpwd.php?status=Passwords do not match");
 }
  else
        header("Location:chpwd.php?status=Current password entered is wrong");  
   newt_delay(1000);
   header("Location:home.php");     	    

?>