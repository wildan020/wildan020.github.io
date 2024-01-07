<?php
// Load file koneksi.php
include "koneksi_guru.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];
// Query untuk menampilkan data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("SELECT foto FROM ilkomjuhdi WHERE id=:id");
$sql->bindParam(':id', $id);
$sql->execute(); // Eksekusi query insert
$data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
// Cek apakah file fotonya ada di folder images
if(is_file("foto/".$data['foto'])) // Jika foto ada
unlink("foto/".$data['foto']); // Hapus foto yang telah diupload dari folder images
// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM ilkomjuhdi WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
// Jika Sukses, Lakukan :
header("location: guru.php"); // Redirect ke halaman index.php
}else{
// Jika Gagal, Lakukan :
echo "Data gagal dihapus. <a href='guru.php'>Kembali</a>";
}
?>