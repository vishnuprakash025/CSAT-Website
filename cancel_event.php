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
 $eventno=$_GET['eventno'];
 $remqry="DELETE from events where eventno = '$eventno' ";
 mysql_query($remqry,$db);
 mysql_close($db);
 header("Location:admin.php");
 ?>