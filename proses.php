<?php // membuat php proses perhitungan
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // memeriksa apakah metode request adalah POST
    $angka1 = (float) $_POST['angka1']; // membuat variabel angka1 dari data yang dikirim
    $angka2 = (float) $_POST['angka2']; // membuat variabel angka2 dari data yang dikirim
    $operator = $_POST['operator']; // membuat variabel operator dari data yang dikirim

    switch ($operator) { // memeriksa operator yang dipilih
        case '+': // jika operator adalah +
            $hasil = $angka1 + $angka2; // lakukan penjumlahan
            break; // keluar dari switch
        case '-': // jika operator adalah -, dan kasus pertama tidak keluar
            $hasil = $angka1 - $angka2; // lakukan pengurangan
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            break;
        case '/':
            $hasil = ($angka2 != 0) ? $angka1 / $angka2 : "Error: Pembagian dengan nol!";
            break;
        default: // jika operator tidak valid
            $hasil = "Operator tidak valid!";
    }

    // Kirim hasil ke halaman hasil.php
    header("Location: hasil.php?hasil=" . urlencode($hasil) . "&angka1=$angka1&angka2=$angka2&operator=" . urlencode($operator));
    exit(); // pastikan script berhenti setelah redirect
} else { // jika metode request bukan POST
    echo "Akses tidak valid!"; // menampilkan pesan error
}
