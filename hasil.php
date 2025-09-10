<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>
    <?php // proses menampilkan hasil perhitungan
    if (isset($_GET['hasil'])) { // memeriksa apakah parameter hasil ada
        $angka1 = $_GET['angka1']; // mengambil nilai angka1 dari parameter
        $angka2 = $_GET['angka2']; // mengambil nilai angka2 dari parameter
        $operator = $_GET['operator']; // mengambil nilai operator dari parameter
        $hasil = $_GET['hasil']; // mengambil nilai hasil dari parameter
        // menampilkan hasil perhitungan
        echo "<p>$angka1 $operator $angka2 = <b>$hasil</b></p>";
    } else { // jika parameter hasil tidak ada
        echo "<p>Belum ada perhitungan.</p>";
    }
    ?>
    <br>
    <a href="form.php">Kembali ke Kalkulator</a> <!-- link untuk kembali ke form.php -->
</body>
</html>
