<?php
$email=$_POST['n1'];
$pass=$_POST['n2'];
$con = mysqli_connect("localhost","root","","mentor");
if($con->connect_error){
  die("Failed to connect : ".$con->connect_error);
}
else
{
	$stmt=$con->prepare("select * from loginmentor where email = ?");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows > 0){
		while($data = $stmt_result->fetch_assoc())
		{
		if($data['password']==$pass)
		{
			header("location:secondpage.php");
		}
	    	else{
		header("location:mentorlogin.php");
	}
		}
	}
	
}

?>