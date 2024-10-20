<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 20;
    $y = 16;

    echo $x % $y;
    ?>

</body>

#IDENTICAL

<body>

    <?php
    $x = 10;
    $y = "50.50";

    var_dump($x === $y); // returns false because types are not equal
    ?>

</body>

#EQUAL

<body>

    <?php
    $x = 1000;
    $y = "1000";

    var_dump($x == $y); // returns true because values are equal
    ?>

</body>

</html>