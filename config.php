<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';
if(isset($_SESSION['username'])){ // Jika sudah login
if($_SESSION['role'] == 'admin'){ // Jika user yang login adalah admin
// Berikut halaman yang bisa di akses:
switch($page){
case 'login': // $page == login (jika isi dari $page adalah home)
include "views/login.php"; // load file login.php yang ada di folder views
break;
case 'home': // $page == home (jika isi dari $page adalah home)
include "views/home.php"; // load file home.php yang ada di folder views
break;
case 'berita': // $page == berita (jika isi dari $page adalah berita)
include "views/berita.php"; // load file berita.php yang ada di folder views
break;
case 'pengguna': // $page == pengguna (jika isi dari $page adalah pengguna)
include "views/pengguna.php"; // load file pengguna.php yang ada di folder views
break;
case 'profil': // $page == kontak (jika isi dari $page adalah kontak)
include "profil.php"; // load file kontak.php yang ada di folder views
break;
case 'form_simpan_guru': // $page == kontak (jika isi dari $page adalah kontak)
include "from_simpan_guru.php"; // load file kontak.php yang ada di folder views
break; 
case 'form_simpan': // $page == kontak (jika isi dari $page adalah kontak)
include "form_simpan.php"; // load file kontak.php yang ada di folder views
break; 
case 'form_ubah_guru': // $page == kontak (jika isi dari $page adalah kontak)
include "form_ubah_guru.php"; // load file kontak.php yang ada di folder views
break;
case 'form_ubah': // $page == kontak (jika isi dari $page adalah kontak)
include "form_ubah.php"; // load file kontak.php yang ada di folder views
break;
case 'guru': // $page == kontak (jika isi dari $page adalah kontak)
include "guru.php"; // load file kontak.php yang ada di folder views
break;
case 'koneksi_guru': // $page == profil (jika isi dari $page adalah profil)
include "koneksi_guru.php"; // load file kontak.php yang ada di folder views
break;
case 'koneksi': // $page == profil (jika isi dari $page adalah profil)
include "koneksi.php"; // load file kontak.php yang ada di folder views
break;
case 'kontak': // $page == profil (jika isi dari $page adalah profil)
include "kontak.html"; // load file kontak.php yang ada di folder views
break;
case 'profil': // $page == profil (jika isi dari $page adalah profil)
include "profil.php"; // load file kontak.php yang ada di folder views
break;
case 'proses_hapus': // $page == profil (jika isi dari $page adalah profil)
    include "proses_hapus.php"; // load file kontak.php yang ada di folder views
    break;
case 'proses_simpan': // $page == profil (jika isi dari $page adalah profil)
include "proses_simpan.php"; // load file kontak.php yang ada di folder views
break;
case 'proses_ubah': // $page == profil (jika isi dari $page adalah profil)
include "proses_ubah.php"; // load file kontak.php yang ada di folder views
break;
case 'proses_hapus': // $page == profil (jika isi dari $page adalah profil)
include "proses_hapus.php"; // load file kontak.php yang ada di folder views
break;
case 'search': // $page == profil (jika isi dari $page adalah profil)
include "search.php"; // load file kontak.php yang ada di folder views
break;
case 'view': // $page == profil (jika isi dari $page adalah profil)
include "view.php"; // load file kontak.php yang ada di folder views
break;
case 'guru': // $page == profil (jika isi dari $page adalah profil)
include "guru.php"; // load file kontak.php yang ada di folder views
break;
case 'form_simpan_guru': // $page == profil (jika isi dari $page adalah profil)
include "form_simpan_guru.php"; // load file kontak.php yang ada di folder views
break;
case 'form_ubah_guru': // $page == profil (jika isi dari $page adalah profil)
include "form_ubah_guru.php"; // load file kontak.php yang ada di folder views
break;
case 'koneksi_guru': // $page == profil (jika isi dari $page adalah profil)
include "koneksi_guru.php"; // load file kontak.php yang ada di folder views
break;
case 'proses_simpan_guru': // $page == profil (jika isi dari $page adalah profil)
include "proses_simpan_guru.php"; // load file kontak.php yang ada di folder views
break;
case 'proses_ubah_guru': // $page == profil (jika isi dari $page adalah profil)
include "proses_ubah_guru.php"; // load file kontak.php yang ada di folder views
break;
case 'proses_hapus_guru': // $page == profil (jika isi dari $page adalah profil)
include "proses_hapus_guru.php"; // load file kontak.php yang ada di folder views
break;
case 'search_guru_guru': // $page == profil (jika isi dari $page adalah profil)
include "search_guru.php"; // load file kontak.php yang ada di folder views
break;
case 'view_guru': // $page == profil (jika isi dari $page adalah profil)
include "view_guru.php"; // load file kontak.php yang ada di folder views
break;
// case 'case_selanjutnya':
// include "views/case_selanjutnya.php";
// break;
// case 'case_selanjutnya':
// include "views/case_selanjutnya.php";
// break;
// case 'case_selanjutnya':
// include "views/case_selanjutnya.php";
// break;
default: // Ini untuk set default jika isi dari $page tidak ada
// Set halaman 404 Not Found
header("HTTP/1.0 404 Not Found");
echo "<h1>404 Not Found</h1>";
echo "The page that you have requested could not be found.";
exit();
}
}else{ // Jika user yang login adalah operator
    // Berikut halaman yang bisa di akses :

    switch($page){
// JANGAN HAPUS
    case 'login': // $page == login (jika isi dari $page adalah home)
    include "views/login.php"; // load file login.php yang ada di folder views
    break;
    case 'home': // $page == home (jika isi dari $page adalah home)
    include "views/home.php"; // load file home.php yang ada di folder views
    break;
    case 'berita': // $page == berita (jika isi dari $page adalah berita)
    include "views/berita.php"; // load file berita.php yang ada di folder views
    break;
    case 'pengguna': // $page == pengguna (jika isi dari $page adalah pengguna)
    include "views/pengguna.php"; // load file pengguna.php yang ada di folder views
    break;
    case 'kontak': // $page == kontak (jika isi dari $page adalah kontak)
    include "views/kontak.php"; // load file kontak.php yang ada di folder views
    break;
    case 'profil': // $page == kontak (jika isi dari $page adalah kontak)
    include "profil.php"; // load file kontak.php yang ada di folder views
    break;
    case 'news': // $page == kontak (jika isi dari $page adalah kontak)
    include "news.php"; // load file kontak.php yang ada di folder views
    break; 
    case 'visi': // $page == kontak (jika isi dari $page adalah kontak)
    include "visi.html"; // load file kontak.php yang ada di folder views
    break; 
    case 'form': // $page == kontak (jika isi dari $page adalah kontak)
    include "form.html"; // load file kontak.php yang ada di folder views
    break;
    case 'kontak': // $page == kontak (jika isi dari $page adalah kontak)
    include "kontak.html"; // load file kontak.php yang ada di folder views
    break;
    case 'singkat': // $page == kontak (jika isi dari $page adalah kontak)
    include "singkat.html"; // load file kontak.php yang ada di folder views
    break;
    case 'siswa': // $page == profil (jika isi dari $page adalah profil)
    include "siswa.php"; // load file kontak.php yang ada di folder views
    break;
    case 'form_simpan': // $page == profil (jika isi dari $page adalah profil)
    include "form_simpan.php"; // load file kontak.php yang ada di folder views
    break;
    case 'form_ubah': // $page == profil (jika isi dari $page adalah profil)
    include "form_ubah.php"; // load file kontak.php yang ada di folder views
    break;
    case 'koneksi': // $page == profil (jika isi dari $page adalah profil)
    include "koneksi.php"; // load file kontak.php yang ada di folder views
    break;
    case 'proses_simpan': // $page == profil (jika isi dari $page adalah profil)
    include "proses_simpan.php"; // load file kontak.php yang ada di folder views
    break;
    case 'proses_ubah': // $page == profil (jika isi dari $page adalah profil)
    include "proses_ubah.php"; // load file kontak.php yang ada di folder views
    break;
    case 'proses_hapus': // $page == profil (jika isi dari $page adalah profil)
    include "proses_hapus.php"; // load file kontak.php yang ada di folder views
    break;
    case 'search': // $page == profil (jika isi dari $page adalah profil)
    include "search.php"; // load file kontak.php yang ada di folder views
    break;
    case 'view': // $page == profil (jika isi dari $page adalah profil)
    include "view.php"; // load file kontak.php yang ada di folder views
    break;
    case 'guru': // $page == profil (jika isi dari $page adalah profil)
    include "guru.php"; // load file kontak.php yang ada di folder views
    break;
    case 'form_simpan_guru': // $page == profil (jika isi dari $page adalah profil)
    include "form_simpan_guru.php"; // load file kontak.php yang ada di folder views
    break;
    case 'form_ubah_guru': // $page == profil (jika isi dari $page adalah profil)
    include "form_ubah_guru.php"; // load file kontak.php yang ada di folder views
    break;
    case 'koneksi_guru': // $page == profil (jika isi dari $page adalah profil)
    include "koneksi_guru.php"; // load file kontak.php yang ada di folder views
    break;
    case 'proses_simpan_guru': // $page == profil (jika isi dari $page adalah profil)
    include "proses_simpan_guru.php"; // load file kontak.php yang ada di folder views
    break;
    case 'proses_ubah_guru': // $page == profil (jika isi dari $page adalah profil)
    include "proses_ubah_guru.php"; // load file kontak.php yang ada di folder views
    break;
    case 'proses_hapus_guru': // $page == profil (jika isi dari $page adalah profil)
    include "proses_hapus_guru.php"; // load file kontak.php yang ada di folder views
    break;
    case 'search_guru_guru': // $page == profil (jika isi dari $page adalah profil)
    include "search_guru.php"; // load file kontak.php yang ada di folder views
    break;
    case 'view_guru': // $page == profil (jika isi dari $page adalah profil)
    include "view_guru.php"; // load file kontak.php yang ada di folder views
    break;
    // case 'login': // $page == login (jika isi dari $page adalah home)
    // include "views/login.php"; // load file login.php yang ada di folder views
    // break;
    // case 'home': // $page == home (jika isi dari $page adalah home)
    // include "views/home.php"; // load file home.php yang ada di folder views
    // break;
    // case 'berita': // $page == berita (jika isi dari $page adalah berita)
    // include "views/berita.php"; // load file berita.php yang ada di folder views
    // break;
    // case 'kontak': // $page == kontak (jika isi dari $page adalah kontak)
    // include "views/kontak.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'profil': // $page == profil (jika isi dari $page adalah profil)
    // include "views/profil.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'siswa': // $page == profil (jika isi dari $page adalah profil)
    // include "views/siswa.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'news': // $page == profil (jika isi dari $page adalah profil)
    // include "views/news.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'visi': // $page == profil (jika isi dari $page adalah profil)
    // include "views/visi.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'guru': // $page == profil (jika isi dari $page adalah profil)
    // include "views/guru.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'sejarah': // $page == profil (jika isi dari $page adalah profil)
    // include "views/sejarah.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'form_simpan': // $page == profil (jika isi dari $page adalah profil)
    // include "views/form_simpan.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'form_ubah': // $page == profil (jika isi dari $page adalah profil)
    // include "views/form_ubah.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'indexx': // $page == profil (jika isi dari $page adalah profil)
    // include "views/indexx.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'koneksi': // $page == profil (jika isi dari $page adalah profil)
    // include "views/koneksi.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'proses_simpan': // $page == profil (jika isi dari $page adalah profil)
    // include "views/proses_simpan.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'proses_ubah': // $page == profil (jika isi dari $page adalah profil)
    // include "views/proses_ubah.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'proses_hapus': // $page == profil (jika isi dari $page adalah profil)
    // include "views/proses_hapus.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'search': // $page == profil (jika isi dari $page adalah profil)
    // include "views/search.php"; // load file kontak.php yang ada di folder views
    // break;
    // case 'view': // $page == profil (jika isi dari $page adalah profil)
    // include "views/view.php"; // load file kontak.php yang ada di folder views
    // break;
// JANGAN HAPUS
    
    // case 'case_selanjutnya':
    // include "views/case_selanjutnya.php";
    // break;
    // case 'case_selanjutnya':
    // include "views/case_selanjutnya.php";
    // break;
    // case 'case_selanjutnya':
    // include "views/case_selanjutnya.php";
    // break;
    default: // Ini untuk set default jika isi dari $page tidak ada
    // Set halaman 404 Not Found
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
    exit();
    }
    }
    }else // Jika belum login
    include "views/login.php"; // Set default halamannya adalah "login"
    ?>
    
    