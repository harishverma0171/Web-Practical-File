<!DOCTYPE html>
<html>
<head>
    <title>Current file name</title>
</head>
<body>
<?php
echo "<h3>Current file name</h3>";
// To Get the Current Filename.
$currentPage= $_SERVER['SCRIPT_NAME'];

echo $currentPage;
?>
</body>
</html>
