<?php
echo("Coffee you choosed: ");
echo $coffee = $_POST['coffee'];
echo"</br>";
echo("You have car ");
if (isset($_POST['car1'])){
echo $car1= $_POST['car1'];
}
else{
    echo "no";
}
?>
