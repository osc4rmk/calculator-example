<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form action="proses.php" method="post">
        <label>Angka 1:</label>
        <input type="number" name="angka1" required><br><br>

        <label>Operator:</label>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select><br><br>

        <label>Angka 2:</label>
        <input type="number" name="angka2" required><br><br>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>
