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
        margin-top: 5%;
       
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}
td{
    border: 1px solid #dddddd;
    text-align: center;
    padding: 6px;
    border:none;
	text-size:25px;
} 

th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    background-color: #012b5ad8;
    color:#fff;
    border:none;
}


}

</style>
</head><?php
$email=$_POST['n1'];
$pass=$_POST['n2'];
$name=$_POST['n4'];
$con=mysqli_connect("localhost","root","","mentor");
if(!$con){
	die("Sorry we failed to connect: ".mysqli_connect_error());
	}
	else
	{
		$sql="SELECT * FROM `student`";
		$result=mysqli_query($con,$sql);
		$num= mysqli_num_rows($result);
		if($num>0)
		{
			while($row= mysqli_fetch_assoc($result)){
				if($row['sname']==$name and $row['password']==$pass){
					?><br><br><br>
					<h1><center>Student Details</center></h1>
					<center><table class="dataframe data">
					<tr style="text-align: right;">
					<td>Student Name</td>
					<td><?php echo $row['sname']?></td>
					</tr>
					<tr>
					<td>CGPA</td>
					<td><?php echo $row['cgpa']?></td>
					</tr>
					<tr>
					<td>Attendance</td>
					<td><?php echo $row['attendance']?></td>
					</tr>
					<tr>
					<td>Message</td>
					<td><?php echo $row['message']?></td>
					</tr>
					</table>
					<?php
				
			}
		}
	}
	}
?>