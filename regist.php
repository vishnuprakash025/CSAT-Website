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

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$phno=$_POST['phoneno'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$conpwd=$_POST['confirmpassword'];
$memtype=$_POST['membertype'];
$secid=$_POST['secid'];
$msd=date("Y/m/d");

if(empty($_POST['email']) || empty($_POST['password']) || empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['phoneno']) || empty($_POST['password']) || empty($_POST['confirmpassword']) || empty($_POST['membertype'])) 
     {
     unset($_SESSION['email']);
     unset($_SESSION['fname']);
     unset($_SESSION['lname']);
     unset($_SESSION['dob']);
     unset($_SESSION['phoneno']);
     unset($_SESSION['password']);
     unset($_SESSION['confirmpassword']);
     unset($_SESSION['membertype']);
     unset($_SESSION['secid']);
     header("Location:register.php?status=Credentials Empty");  
     
     }  
else 
  {

    if($pwd==$conpwd)
      {	
      $sql = "INSERT INTO member (fname,lname,dob,phno,email,pwd,membertype,msd,secid)
      VALUES ('$fname','$lname','$dob','$phno','$email','$pwd','$memtype','$msd','$secid')";

        if ($conn->query($sql) === TRUE) 
          {
           header("Location:login.php?status=New Member created successfully"); 
          }
        else 
          {
           header("Location:register.php?status=Failed to create new member");
            //echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }
    else
      header("Location:register.php?status=Passwords do not match");
  }  
$conn->close();
?>
