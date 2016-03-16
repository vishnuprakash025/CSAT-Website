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
 
 $csatid=$_SESSION['csatid'];
 $eventno=$_GET['eventno'];
 echo "string";
 //$result=mysql_query("SELECT * FROM register where csatid='$csatid' AND eventno='$eventno'",$db);
 //if(mysql_query("SELECT * FROM register where csatid='$csatid' AND eventno='$eventno'",$db))
  //header("Location:events_user.php?status=You have already given request for registration");
 //else
 //{
  //$insreg="INSERT INTO register (csatid,eventno,state) VALUES ('$csatid','$eventno',0)";
  //mysql_query($insreg,$db);
  //header("Location:events_user.php?status=Request registered");
 }
?>