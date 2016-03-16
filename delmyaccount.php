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
 
 $v1=$_POST['password'];
 $csatid=$_SESSION['csatid'];
 $pwd=$_SESSION['pwd'];
    
    if(empty($_POST['password'])) 
      {
        unset($_SESSION['pwd']);
        header("Location:acc_settings.php?status=Field is empty !");  
      }  
    
    
     if($v1==$pwd)
 	      {
      		$query="DELETE FROM member WHERE csatid = '$csatid'";
      		$response=mysql_query($query,$db) or die(mysql_error());
 	   		 if($response)
 		 		header("Location:login.php?status=Member deleted successfully");
 	   		 else
 		 		header("Location:acc_settings.php?status=Failed to delete member");
     	  }
     else 
 		 header("Location:acc_settings.php?status=Incorrect Password");    	     
?>