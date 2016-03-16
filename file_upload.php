

<?php

//checks if upload is set and that size is >0 (to verify that a valid file is selected)
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
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

$dbLink = new mysqli('localhost', 'root', 'aishu', 'csatweb');

if(mysqli_connect_errno()) 
{
  die("MySQL connection failed: ". mysqli_connect_error());
}

// Query for a list of all existing files

 // Check if it was successfull

  	
   
        

		$qry = "INSERT INTO suggevents (img,imgname,imgsize,imgtype) VALUES ('$content','$filename','$fileSize','$fileType');";
		//mysql_query($qry, $db) or die('Error, query failed'.mysql_error());
		$dbLink->query($qry);
			//include 'library/closedb.php';
			// Free the result
			//$result->free();
		mysql_close($db);
		$message ="Your file $fileName has been uploaded";
		//header("Location: student.php?msg=".$message);
		echo "<script type='text/javascript'>alert('$message');</script>";
    
} 
?>

