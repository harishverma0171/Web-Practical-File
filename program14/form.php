<!DOCTYPE html>
<html>
<head>
   <title>Enter name</title>
   </head>
   <body>
   <form method='POST'>
   <h2>Please enter your name:</h2>
 <input type="text" name="uname">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST["uname"];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>
