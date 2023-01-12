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
input[type=password], select {
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

<h1><center>Delete Details<center></h1>

<div><center>
  <form method="post" action="deletes.php">
    <br>
    <label for="lname">Name</label><br>
    <input type="text" id="lname" name="n1">
<br>



<br>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>


