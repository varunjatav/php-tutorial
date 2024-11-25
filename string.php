<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in PHP</title>
</head>
<body>
    <h1>Strings in PHP</h1>

    <?php 
    // strings can be created by using double quotes or single quotes as well.


    echo "Hello World!!";
    echo '<br>';
    echo 'Hello World!!';
    echo '<br>';

    // Double quotes string process characters
    // Single quote string does not process characters

    // eg:-
    $a = 5;
    echo "Hello World $a";
    echo "<br>";
    echo 'Hello World $a';
    echo '<br>';

    // String Length;

    echo strlen("Hello World!"); // 12
    echo '<br>';


    // Word count in string;

    echo str_word_count("Hello World!"); // 2 
    echo '<br>';

    //search for a string in specified word

    echo strrpos("Hello World", "World");

    echo "<br>";

    // Modify Strings
    echo "<h1>Modify Strings</h1>";
    echo '<br>';

    // to upper case
    echo strtoupper("Hello World!");
    echo '<br>';


    // to lower case
    echo strtolower("Hello World!");
    echo "<br>";

    // replace string;
    echo str_replace("World", "Varun", "Hello World!");
    echo "<br>";

    //reverse a string
    echo strrev("Hello World!");
    echo "<br>";

    // remove white spaces
    $x = " Hello World ";
    echo trim($x);
    echo "<br>";

    // convert string into array;
    $str = "Hello World";
    $str =  explode(" ", $str);
    //Use the print_r() function to display the result:
    print_r($str);
    echo "<br>";

    //String Concatenation
    echo "<h1>String Concatenation</h1>";

    $str1 = "Hello";
    $str2 = "World";
    echo $str1.' '.$str2;
    echo "<br>";

    $num1 = 5;
    $num2 = 10;
    echo "$num1 . $num2";
    echo "<br>";

    // Slicing Strings

    echo "<h1>Slicing Strings AKA Sub Strings</h1><br>";
    $q = "Hello World!";
    echo substr($q, 6)."<br>";
    ?>
</body>
</html>