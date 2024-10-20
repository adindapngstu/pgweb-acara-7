<?php
// ARITHMETIC
$a = 20;
$b = 6;

$penjumlahan = $a + $b; // Penjumlahan
$pengurangan = $a - $b; // Pengurangan
$perkalian = $a * $b; // Perkalian
$pembagian = $a / $b; // Pembagian
$modulus = $a % $b; // Sisa hasil bagi (modulus)
$pangkat = $a ** $b; // Perpangkatan

echo "Penjumlahan: $penjumlahan\n<br><br>";
echo "Pengurangan: $pengurangan\n<br><br>";
echo "Perkalian: $perkalian\n<br><br>";
echo "Pembagian: $pembagian\n<br><br>";
echo "Modulus: $modulus\n<br><br>";
echo "Pangkat: $pangkat\n<br><br>";

// ASSIGNMENT (x=y dan x+=y)
$c = $a; // Menugaskan nilai $a ke $c
$c += $b; // Menambah $c dengan $b, sama dengan $c = $c + $b;

echo "Nilai c setelah penugasan: $c\n<br><br>";

// COMPARISON
$equal = ($a == $b); // EQUAL
$identical = ($a === $b); // IDENTICAL

echo "Apakah $a sama dengan $b? " . ($equal ? "Ya" : "Tidak") . "\n<br><br>";
echo "Apakah $a identik dengan $b? " . ($identical ? "Ya" : "Tidak") . "\n<br><br>";
?>
