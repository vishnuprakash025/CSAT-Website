 <?php
 session_start();
//checks if upload is set and that size is >0 (to verify that a valid file is selected)
if($_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name']; // gets filename from the selected file
$tmpName  = $_FILES['userfile']['tmp_name'];//
$fileSize = $_FILES['userfile']['size']; //gets the size of the file selected
$fileType = $_FILES['userfile']['type']; //gets the type of file selected

$fp      = fopen($tmpName, 'r'); // opens file in read mode
$content = fread($fp, filesize($tmpName)); // reads content of the file
$content = addslashes($content);//adds slashes to file content
fclose($fp);

if(!get_magic_quotes_gpc())
{
  $fileName = addslashes($fileName);
}

$servername = "localhost";
$username = "root";
$password = "aishu";
$dbname = "csatweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error()) {
    die("Connection failed: ".mysqli_connect_error());
}

$eventname=$_POST['eventname'];
$description=$_POST['description'];
$eventtype=$_POST['eventtype'];
$csatid=$_SESSION['csatid'];
$sql = "INSERT INTO suggevents (title,body,csatid,img,imgname,imgtype,imgsize)
VALUES ('$eventname','$description','$csatid','$content','$fileName','$fileType','$fileSize')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
