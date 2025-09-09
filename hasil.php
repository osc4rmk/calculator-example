<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>
    <?php
    if (isset($_GET['hasil'])) {
        $angka1 = $_GET['angka1'];
        $angka2 = $_GET['angka2'];
        $operator = $_GET['operator'];
        $hasil = $_GET['hasil'];

        echo "<p>$angka1 $operator $angka2 = <b>$hasil</b></p>";
    } else {
        echo "<p>Belum ada perhitungan.</p>";
    }
    ?>
    <br>
    <a href="form.php">Kembali ke Kalkulator</a>
</body>
</html>
