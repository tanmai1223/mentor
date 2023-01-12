<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 70%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  
  padding: 20px;
}
form {
   max-width: 42em;
   margin: auto;
 }

</style>
<body>

<center><h1>Update Details </h1></center>
<center>
<div>

  <form method="post" action="updates.php" >
    Student Name<br>
    <input type="text" id="fname" name="n1">
<br>
<br>
    <label for="lname">Father Name</label><br>
    <input type="text" id="lname" name="n2">
<br>
<br>
    <label for="lname">CGPA</label><br>
    <input type="text" id="lname" name="n3" >
<br>
<br>
    <label for="lname">Attendance</label><br>
    <input type="text" id="lname" name="n4" >
<br>

<br>
    <input type="submit" name="submit" value="Submit">
  </form>

</div>
</center>


</body>
</html>


