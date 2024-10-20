<!DOCTYPE html>
<html>

<body>

    <?php
    $favcolor = "merah";

    switch ($favcolor) {
        case "merah":
            echo "Buah favoritmu adalah apel";
            break;
        case "kuning":
            echo "Buah favoritmu adalah pisang!";
            break;
        case "pink":
            echo "Buah favoritmu adalah stroberi!";
            break;
        default:
            echo "Buah favoritmu bukanlah apel, pisang, ataupun stroberi";
    }
    ?>

</body>

</html>