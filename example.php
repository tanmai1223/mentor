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

tr:nth-child(even) {
    background-color: #dbf3f3bb;
}

</style>
</head>
<?php
$email=$_POST['n1'];
$pass=$_POST['n2'];
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
		if($data['email']==$email)
		{
			 
  
  <tr>
      
	  <td><?php echo $rows['name']; ?></td>
      <td><?php echo $rows['cgpa']; ?></td>
<td><?php echo $rows['attendance']; ?></td>
      <td><?php echo $rows['message']; ?></td>
   </tr>
   
		}
	    	else{
		header("location:parentlogin.php");
	}
		}
	}
	
}
?>
<body>
 <h1>User Details</h1>
<table border="1" class="dataframe data">
  <thead>
    <tr style="text-align: right;">
      <th>First Name</th>
      <th>Last Name</th>
	  <th>Role</th>
      <th>Email</th>
      <th>Password</th>
      
    </tr>
  </thead>
  <tbody>
<body>