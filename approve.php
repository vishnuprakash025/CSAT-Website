
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



$sgno=$_SESSION['sgno'];
$date=$_POST['date'];
$time=$_POST['time'];
$cemail=$_POST['cemail'];
$venue=$_POST['venue'];

 $result=mysql_query("SELECT * FROM suggevents WHERE sgno='$sgno'",$db);
 $row=mysql_fetch_array($result);
 $title= $row['title'];
 $body=$row['body'];

 $addqry="INSERT INTO events (eventname,edate,etime,description,venue,cordinator) VALUES ('$title','$date','$time','$body','$venue','$cemail')";
 mysql_query($addqry,$db);
 mysql_close($db);
 include 'rem_approved_event.php';
 header("Location:admin.php");  

?>



