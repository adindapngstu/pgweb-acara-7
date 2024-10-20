<!DOCTYPE html>
<html>

<body>

    <?php
    // Check if the type of a variable is integer   
    $x = 0.777;
    var_dump(is_int($x));

    echo "<br>";

    // Check again... 
    $x = 1234;
    var_dump(is_int($x));
    ?>

</body>

</html>