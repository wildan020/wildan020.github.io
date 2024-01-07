<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SD Al-Furqon</title>
    <!-- link Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <!-- link Bootstrap 5 -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="profil.css" />
    <style>
      .crud-pencarian {
        background-image: linear-gradient(to bottom right, #61ba6d, #82c332);
      }
      .a-btn[href] {
        color: white;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <!-- Nav AWAL -->
    <header class="header">
      <div class="container">
        <div class="header-main">
          <div class="logo">
            <img src="img/sd.jpeg" alt="" />
            <a href="#">SD Al-Furqon</a>
          </div>
          <div class="open-nav-menu">
            <span></span>
          </div>
          <div class="menu-overlay"></div>
          <!-- navigation menu start -->
          <nav class="nav-menu">
            <div class="close-nav-menu">
              <img src="img/close.svg" alt="close" />
            </div>
            <ul class="menu">
              <li class="menu-item menu-item-has-children">
                <a href="#" data-toggle="sub-menu">Home <i class="plus"></i></a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="index.html">Home Slide</a></li>
                  <li class="menu-item"><a href="#Maps">Maps</a></li>
                  <li class="menu-item"><a href="#News">Berita</a></li>
                  <li class="menu-item"><a href="#Footer">Footer</a></li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="profil.html">Profil</a>
              </li>
              <li class="menu-item">
                <a href="siswa.php">Siswa</a>
              </li>
              <li class="menu-item menu-item-has-children">
                <a href="#" data-toggle="sub-menu">Lainnya <i class="plus"></i></a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="visi.html">Visi, Misi, & Ekskul</a></li>
                  <li class="menu-item"><a href="guru.php">Guru</a></li>
                  <li class="menu-item"><a href="form.html">Pendaftaran </a></li>
                  <li class="menu-item"><a href="singkat.html">Sejarah Singkat</a></li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="news.html">News</a>
              </li>
              <li class="menu-item">
                <a href="kontak.html">Contact</a>
              </li>
            </ul>
          </nav>
          <!-- navigation menu end -->
        </div>
      </div>
    </header>
    <!-- Nav AKHIR -->
    <!-- SECTION GAMBAR AWAL -->
    <div class="breadcumb-area bg-img">
      <div class="bradcumbContent profil">
        <h1>Guru</h1>
      </div>
    </div>
    <!-- SECTION GAMBAR AKHIR -->
    <!-- MAIN UTAMA AWAL -->
    <section id="section">
      <div class="container">
        <div class="row">
          <div id="Kontak" class="col-md-4 mb-2 mt-3 widget text-center">
            <h2>Kontak</h2>
            <b>Alamat :</b>
            <p>Jl. Murai No.1 B, Palangka, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah</p>
            <b>Telepon :</b>
            <p>0823 1129 1980</p>
            <b>Email :</b>
            <p>sdit.alfurqan@gmail.com.</p>
            <h3>Media Sosial</h3>
            <ul>
              <li>
                <a href="https://web.facebook.com/people/Sdit-Al-Furqon-Palangka-Raya/100013584107512/?paipv=0&eav=AfYDxJjgGwXXl1Vh9WDaE1PNlPjkpKfDq0Iww8yTVPc11pqUX43jDNdo7yhU-OfLpU4&_rdc=1&_rdr">Facebook</a>
              </li>
              <li>
                <a href="https://www.youtube.com/@sdital-furqon5220">Youtube</a>
              </li>
              <li>
                <a href="https://wa.me/6282311291980">WA</a>
              </li>
            </ul>
          </div>
          <div id="Kepala" class="col-md-4 mb-2 mt-3 .kepsek">
            <h2 style="text-align: start">Guru</h2>
            <img src="img/guruujumlah.PNG" width="370px" height="370px" alt="" />
            <a href="http://www.sditalfurqon-palangkaraya.sch.id/html/guru.php?id=dbguru" style="color: #61ba6d">Selepkapnya</a>
          </div>
          <div id="Maps" class="col-md-4 mb-2 mt-3 text-center">
            <h2>Maps</h2>
            <div class="maps">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8960539440077!2d113.89525631475533!3d-2.1930446984014993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb3c9a3277bd5%3A0xdf9a747f740c9845!2sSD%20Islam%20Terpadu%20Al%20Furqan!5e0!3m2!1sen!2sid!4v1685251253948!5m2!1sen!2sid"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              >
              </iframe>
            </div>
          </div>
          <!-- awal crud -->
          <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pencarian Data Siswa</title>
<!-- Load File bootstrap.min.css yang ada difolder css -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.align-middle{
vertical-align: middle !important;
}
</style>
</head>
<body>
<!-- Membuat Menu Header / Navbar -->
<nav class="navbar navbar-inverse crud-pencarian" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#" style="color: white;"><b>Pencarian Data Guru</b></a>
</div>
</div>
</nav>
<div style="padding: 0 15px;">
<button type="button" class="btn btn-primary btn-lg"><a class="a-btn" href="form_simpan_guru.php">Tambah Data</a></button><br><br>

<!--
-- Buatsebuah div dengan class row
-- class row ini berfungsi untuk membagi-bagi layar
-- di dalam bootstrap, 1 layar penuh (dari kiri ke kanan) dibagi menjadi 12 bagian / Kolom
-- Atau lebih tepatnya sering disebut dengan GRID
-- col-xs-12 artinya jika ukuran layar < 768px, maka gunakan 12 kolom
-- col-sm-6 artinya jika ukuran layar >= 768px, maka gunakan 6 kolom
-- Untuk lebih jelasnya soal Grid, silahkan buka link ini : http://viid.me/qb4V8P
-->
<div class="row">
<div class="col-xs-12 col-sm-6">
<!--
-- Input Group adalah salah satu komponen yang disediakan bootstrap
-- Untuk lebih jelasnya soal Input Group, silahkan buka link ini : http://viid.me/qb4Mup
-->
<div class="input-group">
<!-- Buatsebuah textbox dan beri id keyword -->
<input type="text" class="form-control" placeholder="Pencarian..." id="keyword">
<span class="input-group-btn">
<!-- Buatsebuah tombolsearch dan beri id btn-search -->
<button class="btn btn-primary" type="button" id="btn-search">SEARCH</button>
<a href="" class="btn btn-warning">RESET</a>
</span>
</div>
</div>
</div>
<br>
<!--
-- Buatsebuah div dengan id="view" yang digunakan untuk menampung data 
-- yang ada pada tabelsiswa di database
-->
<div id="view"><?php include "view_guru.php"; ?></div>
</div>
<!-- Load File jquery.min.js yang ada difolderjs -->
<script src="js/jquery.min.js"></script>
<!-- Load File bootstrap.min.js yang ada difolderjs -->
<script src="js/bootstrap.min.js"></script>
<!-- Load file ajax.js yang ada di folder js-->
<script src="js/ajax.js"></script>
</body>
</html>
          <!-- akhir crud -->
          <div id="News" class="col-md-4 mb-2 mt-2 widget text-center list-berita">
            <h2>Berita Terbaru</h2>
            <div class="berita">
              <img src="img/JUARA DAICILIK.jpg" alt="" />
              <a href="news.html">JUARA 2 DA'I CILIK DALAM RANGKA GEBYAR RAMADHAN JILID III</a>
            </div>
            <div class="berita">
              <img src="img/JUARA FASHION SHOW.jpg" alt="" />
              <a href="news.html">JUARA 2 FASHION SHOW LOMBA GEBYAR RAMADHAN JILID III</a>
            </div>
            <div class="berita">
              <img src="img/PESANTREN RAMADHAN.jpg" alt="" />
              <a href="news.html">KEGIATAN PESANTERN RAMADHAN JILID II SD IT AL-FURQON PALANGKARAYA</a>
            </div>
            <div class="berita">
              <img src="img/LOMBA OSN.jpg" alt="" />
              <a href="news.html">LOMBA OSN (OLIMPIADE SAINS NASIONAL) TINGKAT KABUPATEN/KOTA</a>
            </div>
            <div class="berita">
              <img src="img/JUARA TARI.jpg" alt="" />
              <a href="news.html">JUARA 1 TARI KREASI ISLAMI LOMBA GEBYAR RAMADHAN JILID III</a>
            </div>
            <div class="berita">
              <img src="img/UN.jpg" alt="" />
              <a href="news.html">UJIAN PRAKTIK MEMASAK KELAS VI "TEMA MASAKAN DAYAK</a>
            </div>
            <div class="berita">
              <img src="img/UPACARA HARDIKNAS.jpg" alt="" />
              <a href="news.html">UPACARA BENDERA DALAM RANGKA MEMPERINGATI HARDIKNAS 2 MEI 2023</a>
            </div>
          </div>
          <div id="Kalenderr" class="col-md-4 mb-2 mt-3 text-center">
            <h2>Kalender</h2>
            <div class="kalender">
              <iframe src="https://calendar.google.com/calendar/embed?src=shirozenitsu%40gmail.com&ctz=UTC" style="border: 0" width="285" height="410" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
          <div id="Artikel" class="col-md-4 mb-2 mt-3 artikel text-center">
            <div class="row widget">
              <h2>Artikel</h2>
              <a href="news.html">artikel</a>
              <div class="col-md-4 text-center">
                <div class="card" style="width: 10 rem">
                  <img src="img/UPACARA.jpg" class="card-img-top" alt="..." />
                  <div class="card-body cardd">
                    <p class="card-text">UPACARA PEMBUKAAN & SIMBOLIS PELAKSANAAN PENILAIAN SUMATIF</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card" style="width: 10 rem">
                  <img src="img/FREE CLASS.jpg" class="card-img-top" alt="..." />
                  <div class="card-body cardd">
                    <p class="card-text">FREE CLASS GELOMBANG 3 BERTEMAKAN "JOY FULL LEARNING"</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card" style="width: 10 rem">
                  <img src="img/JUARA KALIGRAFRI.jpg" class="card-img-top" alt="..." />
                  <div class="card-body cardd">
                    <p class="card-text">JUARA 1 KALIGRAFRI ANAK LOMBA BAZAR RAMADHAN DI PALMA></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card" style="width: 10 rem">
                  <img src="img/LOMBApRAMUKA.jpg" class="card-img-top" alt="..." />
                  <div class="card-body cardd">
                    <p class="card-text">DELEGASI SD IT AL-FURQON DALAM MENGIKUTI LOMBA PRAMUKA</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card" style="width: 10 rem">
                  <img src="img/LOMBA SEPATU RODA.jpg" class="card-img-top" alt="..." />
                  <div class="card-body cardd">
                    <p class="card-text">LOMBA CABANG SEPATU RODA OLEH BAHALAP SKATE CLUB (BSC)</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card" style="width: 10 rem">
                  <img src="img/KEGIATAN PESANTREN.jpg" class="card-img-top" alt="..." />
                  <div class="card-body cardd">
                    <p class="card-text">KEGIATAN PESANTREN RAMADHAN JILID 1 SD IT AL-FURQON PALANGKARAYA</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card" style="width: 10 rem">
                  <img src="img/RAPAT GURU.jpg" class="card-img-top" alt="..." />
                  <div class="card-body cardd">
                    <p class="card-text">KEGIATAN RUTIN RAPAT BERSAMA GURU DAN KEPALA SEKOLAH</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card" style="width: 10 rem">
                  <img src="img/PAMERAN.jpg" class="card-img-top" alt="..." />
                  <div class="card-body cardd">
                    <p class="card-text">KEGIATAN PAMERAN P5 KURIKULUM MERDEKA SEKOTA PALANGKARAYA/p></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card" style="width: 10 rem">
                  <img src="img/PRAMUKA.jpg" class="card-img-top" alt="..." />
                  <div class="card-body cardd">
                    <p class="card-text">UPACARA SEKALIGUS PENYEMATAN LAMBANG TKU & UPACARA</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- MAIN UTAMA AKHIR -->
    <!-- FOOTER -->
    <footer id="Footer" class="text-center text-white pb-5">
      <div class="foot"></div>
      <div class="footer">
        <p>Copyright -@2023-SD Al-Alfurqon Palangka Raya</p>
      </div>
    </footer>
    <!-- FOOTER -->
    <!-- script Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- script Bootstrap 5 -->
    <script src="index.js"></script>
  </body>
</html>
