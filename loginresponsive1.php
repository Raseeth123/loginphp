<?php
$servername="localhost";
$username="root";
$password="";
$database_name="loginresponsive1";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());

}
if(isset($_POST['LOGIN']))
{
	$user=$_POST['user'];
	$password=$_POST['password'];

	$sql_query="INSERT INTO entrydetails (user,password)
	VALUES ('$user','$password')";

	if(mysqli_query($conn, $sql_query))
	{
		echo "New Details Entry inserted successfully !";

	}
	else{
       echo "error: " .$sql ."". mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>


