<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $nilai = $_POST["nilai"]; // nilai ujian

        echo "<h2>Hasil evaluasi:</h2>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>"; 
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Nilai: " . htmlspecialchars($nilai) . "<br>";

        if ($nilai > 70) {
            echo "<strong>Status: Lulus</strong>";
        } else {
            echo "<strong>Status: Remedial</strong>";}}
?>