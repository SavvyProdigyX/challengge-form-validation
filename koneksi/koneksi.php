<html>

<head>

<body>
<?php
$namaserver = "localhost";
$username = "root";
$katasandi = "";
$database = "koneksiDB";

// Buat koneksi ke MySQL
$koneksi = mysqli_connect($namaserver, $username, $katasandi);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi ke MySQL gagal: " . mysqli_connect_error());
}
echo "Koneksi ke MySQL berhasil";

echo "<br>";

// membuat table ""
$sqlDatabase = "CREATE DATABASE IF NOT EXISTS $database";
if (mysqli_query($koneksi, $sqlDatabase)) {
    echo "Database berhasil dibuat atau sudah ada";
} else {
    echo "Database gagal dibuat: " . mysqli_error($koneksi);
}

echo "<br>";

// untuk memilih database yang akan digunakan
mysqli_select_db($koneksi, $database);

// membuat tabel
$sqlTabel = "CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_depan VARCHAR(30) NOT NULL,
    nama_belakang VARCHAR(30) NOT NULL,
    nim INT(10),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if (mysqli_query($koneksi, $sqlTabel)) {
    echo "Tabel mahasiswa berhasil dibuat atau sudah ada";
} else {
    echo "Tabel mahasiswa gagal dibuat: " . mysqli_error($koneksi);
}

echo "<br>";

// memasukkan data
$sqlInsert = "INSERT INTO mahasiswa (id, nama_depan, nama_belakang, nim) VALUES (1, 'Deny', 'Faishal', 22090116)";
$sqlInsert = "INSERT INTO mahasiswa (id, nama_depan, nama_belakang, nim) VALUES (2, 'Naufal', 'Farros', 22090051)";
if (mysqli_query($koneksi, $sqlInsert)) {
    echo "Data mahasiswa berhasil ditambahkan";
} else {
    echo "Data mahasiswa gagal ditambahkan: " . mysqli_error($koneksi);
}

echo "<br>";
// select data
$sqlSelect = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $sqlSelect);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama_depan"] . " " . $row["nama_belakang"] . " - NIM: " . $row["nim"] . "<br>";
    }
} else {
    echo "Tidak ada data yang ditemukan";
}


// Tutup koneksi
mysqli_close($koneksi);


?>


</body>
</head>

</html>