<?php

$con = mysqli_connect("localhost","root","","mentor");
if(!$con){
  die("Failed to connect : ".$con->connect_error);
}
if(isset($_POST['submit']))
{
	$sname = $_POST['n1'];
	$fname = $_POST['n2'];
	$cgpa = $_POST['n3'];
	$attendance = $_POST['n4'];
	$sql="INSERT INTO `student`(`sname`, `pname`, `cgpa`, `attendance`) VALUES ('$sname','$fname','$cgpa','$attendance')";
	$run=mysqli_query($con,$sql);
	if($run)
	{
              header("location:alert1.php");
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	
}
?>