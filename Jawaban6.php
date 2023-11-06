#########################################################################################
Koneksi database adalah hubungan logis antara aplikasi dan database yang memungkinkan 
aplikasi mengirim pertanyaan dan perintah, serta menerima data dan hasil. Untuk membuat 
koneksi database, perlu memberikan beberapa informasi, seperti nama database, host, port, 
nama pengguna, kata sandi, dan driver. Driver adalah komponen perangkat lunak yang 
memungkinkan aplikasi berkomunikasi dengan sistem basis data tertentu, 
seperti MySQL, Oracle, atau MongoDB.
#########################################################################################

<?php
$servername = "localhost";
$database = "dyah";
$username = "root";
$password = "p455w0rd";

$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
?>