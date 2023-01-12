<?php
$email=$_POST['n1'];
$pass=$_POST['n2'];
$name=$_POST['n4'];
$con = mysqli_connect("localhost","root","","mentor");
if($con->connect_error){
  die("Failed to connect : ".$con->connect_error);
}
else
{
	$query="SELECT * FROM `loginparent`";
$result=mysqli_query($con,$query);
while($rows=mysqli_fetch_assoc($result))
  {
		
		if($data['password']==$pass and $data['email']==$email)
		{
echo $rows['name'];
		
		}
	    
		else{
		header("location:index.php");
	}
		}
	
}

?>
