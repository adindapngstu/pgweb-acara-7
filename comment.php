<?php
// Ini adalah contoh penggunaan komentar satu baris dengan //

# Ini adalah contoh penggunaan komentar satu baris dengan #

/* Ini adalah contoh penggunaan komentar beberapa baris
    dengan */


// Fungsi untuk menambahkan dua angka
function tambah($a, $b) {
    return $a + $b; // Mengembalikan hasil penjumlahan
}

# Fungsi untuk mengurangi dua angka
function kurang($a, $b) {
    return $a - $b; # Mengembalikan hasil pengurangan
}

/*
    Fungsi utama untuk mengeksekusi operasi matematika dasar
*/
function main() {
    $x = 10;
    $y = 5;
    
    // Memanggil fungsi tambah
    $hasilTambah = tambah($x, $y);
    echo "Hasil tambah: " . $hasilTambah . "\n";
    
    # Memanggil fungsi kurang
    $hasilKurang = kurang($x, $y);
    echo "Hasil kurang: " . $hasilKurang . "\n";
}

// Memanggil fungsi utama
main();
?>
