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
 $username=$_SESSION['username'];
 if($v1==$_SESSION['apwd'])
 {
 	if($v3==$v2)
 	{
     $_SESSION['apwd']=$v2; 
     $query="UPDATE admin SET apwd = '$v2' WHERE username = '$username'";
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
   header("Location:admin.php");     	    

?>