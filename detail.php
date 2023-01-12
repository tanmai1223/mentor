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
	$stmt=$con->prepare("select * from loginparent where email = ?");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows > 0){
		while($data = $stmt_result->fetch_assoc())
		{
		if($data['password']==$pass and $data['name']==$name)
		{
?>
<html> 
    <head>
	<style>
	h2{
  margin-top: 3%;
}
	.grid-container-element { 
    display: grid; 
    grid-template-columns: 1fr 1fr; 
    grid-gap: 1px; 
    align:center;
    width: 50%; 
} 
.grid-child-element { 
    margin: 50px; 
    border: 2px solid black; 
}
table {
        margin-top: 3%;
        margin-left: 20%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}
td{
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    border:none;
} 

th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    background-color: #012b5ad8;
    color:#fff;
    border:none;
}
</style>
</head>
 <body>
 <h1>User Details</h1>
<table border="1" class="dataframe data">
  <tbody>
  <tr>
<td>Student Name</td>
      <td><?php echo $rows['name']; ?></td>
</tr>
<td>Attendance</td>
      <td><?php echo $rows['attendance']; ?></td>
</tr>
<td>CGPA</td>
      <td><?php echo $rows['cgpa']; ?></td>
</tr>
<td>Message</td>
      <td><?php echo $rows['message']; ?></td>
</tr>
  </tbody>
</table>
	<?php		
		}
	    
		else{
		header("location:index.php");
	}
		}
	}
	
}

?>
