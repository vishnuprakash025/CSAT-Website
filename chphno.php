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
 
 $v1=$_POST['curr_phno'];
 $v2=$_POST['new_phno'];
 $csatid=$_SESSION['csatid'];
 $v3=$_SESSION['phno'];
    
    if(empty($_POST['curr_phno']) || empty($_POST['new_phno'])) 
      {
        unset($_SESSION['phno']);
        header("Location:acc_settings.php?status=Fields are empty !");  
      }  
    
    
     if($v1==$v3)
 	      {
      		$_SESSION['phno']=$v2; 
      		$query="UPDATE member SET phno = '$v2' WHERE csatid = '$csatid'";
      		$response=mysql_query($query,$db) or die(mysql_error());
 	   		 if($response)
 		 		header("Location:acc_settings.php?status=Phone number updated");
 	   		 else
 		 		header("Location:acc_settings.php?status=Phone number update unsuccessful");
     	  }
     else 
 		 header("Location:acc_settings.php?status=Current phone entered is incorrect");    	     
?>