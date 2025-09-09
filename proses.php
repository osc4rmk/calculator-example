<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $angka1 = (float) $_POST['angka1'];
    $angka2 = (float) $_POST['angka2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $hasil = $angka1 + $angka2;
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            break;
        case '/':
            $hasil = ($angka2 != 0) ? $angka1 / $angka2 : "Error: Pembagian dengan nol!";
            break;
        default:
            $hasil = "Operator tidak valid!";
    }

    // Kirim hasil ke halaman hasil.php
    header("Location: hasil.php?hasil=" . urlencode($hasil) . "&angka1=$angka1&angka2=$angka2&operator=" . urlencode($operator));
    exit();
} else {
    echo "Akses tidak valid!";
}
