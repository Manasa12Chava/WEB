<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register1";


if(isset($_POST['email']))
	$email=$_POST['email'];
else
	$email = null;
if(isset($_POST['usn']))
	$usn=$_POST['usn'];
else
	$usn = null;
if(isset($_POST['name']))
	$name=$_POST['name'];
else
	$name = null;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT usn, email ,name FROM register WHERE usn='$usn' AND email='$email'AND name='$name'";
//SELECT usn, email ,name FROM register WHERE usn='1PE15CS033' AND email='test1@gmail.com' AND name='test2'
if(!($email==null&&$name==null&&$usn==null)){
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    	include"home.php";
} 
else {
    echo '<script>alert("Check Again")</script>';
}
}
else
	echo '<script>alert("No values entered")</script>';
mysqli_close($conn);
?>
