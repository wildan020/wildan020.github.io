<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th class="text-center">NO</th>
<th class="text-center">FOTO</th>
<th>NIS</th>
<th>NAMA</th>
<th>JENIS KELAMIN</th>
<th>TELP</th>
<th>ALAMAT</th>
<th>TANGGAL LAHIR</th>
<th>TEMPAT LAHIR</th>
<th colspan="2">AKSI</th>
</tr>
<?php
// Include / load file koneksi.php
include "koneksi_guru.php";
// Cek apakah variabel $keyword tersedia
// Artinya cek apakah user telah mengklik tombol search atau belum
// variabel $keyword ini berasal dari file search.php,
// dimana isinya adalah apa yang diinput oleh user pada textbox pencarian
if(isset($keyword)){ // Jika veriabel $keyword ada (user telah mengklik tombol search)
$param = '%'.$keyword.'%';
// Buat query untuk menampilkan data siswa berdasarkan NIS / Nama / Jenis Kelamin / Telp / Alamat
$sql = $pdo->prepare("SELECT * FROM ilkomjuhdi WHERE nis LIKE :ni OR nama LIKE :na OR jenis_kelamin LIKE :jk OR telp LIKE :t OR alamat LIKE :a  OR tanggal_lahir LIKE :tgl OR tempat_lahir LIKE :tmt ");
$sql->bindParam(':ni', $param);
$sql->bindParam(':na', $param);
$sql->bindParam(':jk', $param);
$sql->bindParam(':t', $param);
$sql->bindParam(':a', $param);
$sql->bindParam(':tgl', $param);
$sql->bindParam(':tmt', $param);
$sql->execute(); // Eksekusi querynya
}else{ // Jika user belum mengklik tombol search
// Buat query untuk menampilkan semua data siswa
$sql = $pdo->prepare("SELECT * FROM ilkomjuhdi");
$sql->execute(); // Eksekusi querynya
}
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
?>
<tr>
<td class="align-middle text-center"><?php echo $no; ?></td>
<td class="align-middle text-center">
<img src="foto/<?php echo $data['foto']; ?>" width="80" height="80">
</td>
<td class="align-middle"><?php echo $data['nis']; ?></td>
<td class="align-middle"><?php echo $data['nama']; ?></td>
<td class="align-middle"><?php echo $data['jenis_kelamin']; ?></td>
<td class="align-middle"><?php echo $data['telp']; ?></td>
<td class="align-middle"><?php echo $data['alamat']; ?></td>
<td class="align-middle"><?php echo $data['tanggal_lahir']; ?></td>
<td class="align-middle"><?php echo $data['tempat_lahir']; ?></td>
<td class="align-middle"><?php echo "<td><a href='form_ubah_guru.php?id=".$data['id']."'>Ubah</a</td>"?>;
<td class="align-middle"><?php echo "<td><a href='proses_hapus_guru.php?id=".$data['id']."'>Hapus</a</td>"?>;
</tr>
<?php
$no++; // Tambah 1 setiap kali looping
}
?> </table> </div>