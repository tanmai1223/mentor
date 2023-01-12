<?php

$con = mysqli_connect("localhost","root","","mentor");
if(!$con){
  die("Failed to connect : ".$con->connect_error);
}
if(isset($_POST['submit']))
{
	$sname = $_POST['n1'];
	$fname = $_POST['n2'];
	$sql="UPDATE `student` SET `message`='$fname' WHERE sname='$sname'";
	$run=mysqli_query($con,$sql);
	if($run)
	{
              header("location:alert3.php");
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	
}
?>