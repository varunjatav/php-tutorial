<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <h1>Variables in PHP</h1>
    <?php
    // $age = 26;
    // $name = "varun";
    // echo "my name is " . $name . " I am " . $age . " years old";

    // $x = 5;
    // $y = 67;
    // echo " Sum of " . $x . " and " . $y . " is " . $x + $y;
    // $a = 55; // a is an integer;
    // $b = "John"; // b is string;
    // echo " ";
    // var_dump($b);
    // echo $a;
    // echo $b;

    // var_dump(5);
    // var_dump("John");
    // var_dump(3.14);
    // var_dump(true);
    // var_dump([2, 3, 56]);
    // var_dump(NULL);

    // // assigning same value to different variable;
    // $x = $y = $z = "Fruit";
    // echo " " . $x . " and " . $y . " and" . $z;

    // $k = 5;
    // $j = 10;
    // function myFunc() {
    //     global $k , $j;
    //     $j = $k + $j;
    //     echo $j;
    // };

    // myFunc();
    // echo $j;

    //$GLOBALS

    // $x = 5;
    // $y = 10;
    // function myFunc (){
    //     $GLOBALS['x'] = $GLOBALS['y'] + $GLOBALS['x'];
    // };
    // myFunc();
    // echo $x;

    //static helps variable to not get deleted after printing;

    // function myFunc() {
    //     static $x = 5;
    //     echo $x;
    //     $x++;
    // };

    // myFunc();
    // myFunc();
    // myFunc();
    ?>
</body>

</html>