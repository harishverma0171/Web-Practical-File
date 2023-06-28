<!DOCTYPE html>
<?php
    $cookie_name = "user";
	setcookie($cookie_name, "hardware", time() + 2 * 24 * 60 * 60);
?>
<html>
<body>
	<?php
		echo "cookie is created." . "</br>";
		echo "your cookie is  . $_COOKIE[$cookie_name]";
	?>
</body>
</html>
