<!DOCTYPE html>
<html>

<body>

<?php
$ras = array("Ragdoll", "Munchkin", "British Short Hair", "Sphynx", "Maine Coon");
$warna = array("Putih", "Hitam", "Abu", "Golden", "Calico");

echo "<table border='1'>";
for($i=0; $i<=4; $i++) {
echo "<tr><td> $ras[$i] </td><td> $warna[$i] </td></tr>";
}
echo "</table>";
?>
</body>

</html>