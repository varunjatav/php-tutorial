<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>
    <h1>Data Types in PHP</h1>

    <?php 
    // Different types of Data Types in PHP.
    /*
     1) String --> stores characters using double quote ("") and single quote ('');
     2) Integer --> stores integer value (numbers);
     3) Float --> stores floating point numbers - also called double.
     4) Boolean --> true or false
     5) Array --> An array stores multiple values in single variable;
     6) Object --> A class is a template for objects, and an object is an instance of a class.
     7) NULL --> A variable of data type NULL is a variable that has no value assigned to it.
     8) Resourse --> It is the storing of a reference to functions and resources external to PHP
    */

    $x = 5;
    var_dump($x); // int(5)
    echo "<br>";

    $myName = "Varun";
    var_dump($myName); // string(5) "Varun"
    echo "<br>";

    $float = 3.14;
    var_dump($float); // float(3.14)
    echo "<br>";

    $bool = true;
    var_dump($bool); //bool(true)
    echo "<br>";

    $cars = array("Maruti", "Volvo", "Tata");
    var_dump($cars); //array(3) { [0]=> string(6) "Maruti" [1]=> string(5) "Volvo" [2]=> string(4) "Tata" }
    echo "<br>";

    // class Car;

    class Car {
        public $color;
        public $model;

        public function __construct($color,$model){
            $this->color = $color;
            $this->model = $model;
        }

        function printMessage(){
            echo "I have a car $this->model with color $this ->color";
        }
    }

    $myCar = new Car("Red", "Volvo");

    var_dump($myCar);  //object(Car)#1 (2) { ["color"]=> string(3) "Red" ["model"]=> string(5) "Volvo" }
    echo "<br>";


    $a = null;
    var_dump($a); // NULL
    echo "<br>";

    // Change Datatype
    $y = 5;
    var_dump($y); //int(5)
    echo "<br>";
    $y = "Varun";
    var_dump($y); // string(5)
    echo "<br>";

    // or

    $z= 5;
    var_dump($z); //int(5)
    echo "<br>";


    $z = (string) $z;
    var_dump($z); //string(1) "5"
    echo "<br>";
    ?>
</body>
</html>