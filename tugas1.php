<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ujian</title>
</head>
<body>
    <h2>Form Ujian</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Nilai Ujian: <input type="number" name="nilai" required><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai yang diinput oleh user
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        // Menentukan apakah Lulus atau Remedial
        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }

        // Menampilkan hasil ke halaman
        echo "<h3>Hasil:</h3>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Nilai Ujian: " . $nilai . "<br>";
        echo "Status: " . $status . "<br>";
    }
    ?>
</body>
</html>