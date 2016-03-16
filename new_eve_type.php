<?php
$servername = "localhost";
$username = "root";
$password = "aishu";
$dbname = "csatweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$newevetype=$_POST['newevetype'];
$msd=date("Y/m/d");

if(empty($_POST['newevetype']))
     {
     unset($_SESSION['email']);
     header("Location:proposal.php?status=Field is Empty");  
     
     }  
else 
    {

      $sql = "INSERT INTO eventtype (type)
      VALUES ('$newevetype')";

        if ($conn->query($sql) === TRUE) 
          {
           header("Location:proposal.php?status=New Event Type included successfully"); 
          }
        else 
          {
           header("Location:proposal.php?status=Failed to include new event type");
          }
    }
     
$conn->close();
?>
