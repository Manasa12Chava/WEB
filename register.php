<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register1";

//$title=$_REQUEST['sel1'];

if(isset($_POST['name']))
{ 	
	$name=$_POST['name'];
}
else
{
	$name = null;
}
if(isset($_POST['birthday']))
{
	$birthdate=$_POST['birthday'];
}
else
{
	$birthdate = null;
}
if(isset($_POST['gender']))
{
	$gen=$_POST['gender'];
}
else
{
	$gen = null;
}
if(isset($_POST['email']))
{	
	$emailid=$_POST['email'];
}
else
{
	$emailid = null;
}
if(isset($_POST['phone']))
{
	$phone=$_POST['phone'];
}
else
{
	$phone = null;
}
if(isset($_POST['usn']))
{
	$usn=$_POST['usn'];
}
else
{
	$usn = null;
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO register (name, birthday, gender, email, phone, usn)
VALUES ('$name', '$birthdate', '$gen', '$emailid', '$phone', '$usn')";

if (mysqli_query($conn, $sql)) {
    echo "Insert successful";
} else {
    echo "magic failed: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
