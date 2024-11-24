<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo / Print</title>
</head>

<body>
    <h1>Print and Echo statement in PHP</h1>
    <?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    //echo statement;
    print "<h2>This is Echo Statement</h2>";
    echo "Echo <br>";
    echo ("Echo wit paranthesis <br>");
    echo "Hello, world! <br>";
    echo "Pinting with Echo <br>";
    echo "I am about to learn PHP <br>";
    echo "This ", "string ", "is ", "with ", "multiple ", "parameters. <br>";

    echo "<h2>$txt1</h2>";
    echo "<p>Study PHP at $txt2</p>";

    //print statement;
    print "<h2>This is Print Statement</h2>";
    print "Print Statement <br>";
    print("Print statement with parathesis <br>");
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";




    print "<h2>$txt1</h2>";
    print "<p>Study PHP at $txt2</p>";


    // Using Single Quote
    print "<h2>This is Single Quote</h2>";
    print '<h2>' . $txt1 . '</h2>';
    print '<p>Study PHP at ' . $txt2 . '</p>';

    ?>
</body>

</html>