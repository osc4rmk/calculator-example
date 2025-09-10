<!DOCTYPE html> <!-- membuat html -->
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title> <!-- judul halaman -->
</head>
<body>
    <h2>Kalkulator Sederhana</h2> <!-- judul di halaman -->
    <form action="proses.php" method="post"> <!-- mengirim data ke proses.php dengan metode post -->
        <label>Angka 1:</label> <!-- label untuk angka 1 -->
        <input type="number" name="angka1" required><br><br> <!-- input untuk angka 1 -->

        <label>Operator:</label> <!-- label untuk operator -->
        <select name="operator" required> <!-- dropdown untuk memilih operator -->
            <option value="+">+</option> <!-- opsi untuk penjumlahan -->
            <option value="-">-</option> <!-- opsi untuk pengurangan -->
            <option value="*">×</option>
            <option value="/">÷</option>
        </select><br><br>

        <label>Angka 2:</label>
        <input type="number" name="angka2" required><br><br>

        <button type="submit">Hitung</button> <!-- tombol untuk mengirim form -->
    </form>
</body>
</html>
