<!DOCTYPE html>
<html>
<head>
    <title>Strings</title>
</head>
<body>
<?php
    echo ("String is : Hello PHP world!");
    echo "<br>";
    echo ("String length: ");
    echo strlen("Hello PHP world!"); //Return the Length of a String
    echo "<br><br>";
    echo ("Words in a string: ");
    echo str_word_count("Hello php world!"); //Count Words in a String
    echo "<br><br>";
    echo ("Reverse of a string: ");
    echo strrev("Hello PHP world!"); //Reverse a String
    echo "<br><br>";
    echo ("Search of a word \"PHP\" in a string: ");
    echo strpos("Hello PHP world!", "PHP"); //Search For a Text Within a String
    echo "<br><br>";
    echo ("Replace Word in a string: ");
    echo "<br><br>";
    echo ("Before string: Hello world!");
    echo "<br><br>";
    echo ("After string: ");
    echo str_replace("world", "PHP", "Hello world!");//Replace Text Within a String
    echo "<br><br>";
?>
</body>
</html>
