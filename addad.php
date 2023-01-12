<?php

$con = mysqli_connect("localhost","root","","mentor");
if(!$con){
  die("Failed to connect : ".$con->connect_error);
}
if(isset($_POST['submit']))
{
	$sname = $_POST['n1'];
	$fname = $_POST['n2'];
        $name=$_POST['n3'];
	$sql="UPDATE `student` SET `email`='$sname',`password`='$fname' WHERE sname='$name'";
	$run=mysqli_query($con,$sql);
	if($run)
	{
              header("location:alert.php");
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	
}
?>