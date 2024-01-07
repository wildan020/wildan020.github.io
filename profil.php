<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>
    /* FOOTER AWAL */
    footer {
      background-color: #dea7a8;
      padding-top: 65px;
    }
    .img1 {
      width: 100%;
      height: 50%;
    }
    .profil {
      display: grid;
      grid-template-columns: 1fr 1fr;
      column-gap: 5px;
    }
    .crud-pencarian {
        background-image: linear-gradient(to bottom right, #3540cd, #82d332);
        padding: 1Px;
        border-radius: 5px;
        border: solid 1px;
    }
    .h2-mul {
    font-size: 30px;
    margin: 0px
    }

    /* FOOTER AKHIR */
  </style>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/20035135-30f5-e011-93df-030f18e28268">SD 5 Palangkaraya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil.php">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.html">Kontak</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Lainnya</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="visi.html">Visi & Misi</a></li>
                <li><a class="dropdown-item" href="guru.php">Guru</a></li>
                <li><a class="dropdown-item" href="siswa.php">Siswa</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Login</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">Login</a></li>
                <li><a class="dropdown-item" href="<?php echo $base_url.'system/logout.php'; ?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- jumbotron -->
    <div class="img1">
      <img class="img1" src="image/5.jpg" alt="" srcset="" />
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="jumbotron">
            <h1 class="display-4">Motivasi Sekolah</h1>
            <p class="lead">Jangan pernah berhenti belajar, karena hidup tak pernah berhenti mengajarkan.</p>
            <hr class="my-4" />
          </div>
        </div>
        <div class="col">
          <div class="jumbotron">
            <h1 class="display-4">Profil Sekolah</h1>
            <div class="profil">
              <img src="image/2.jpg" width="150px" height="150px" alt="" />
              <p class="lead">Sekolah Dasar Negeri 5 menyelenggarakan pendidikan umum pada jenjang pendidikan</p>
            </div>
            <p class="lead">
              Era globalisasi dengan segala implikasinya menjadi salah satu pemicu cepatnya perubahan yang terjadi pada berbagai aspek kehidupan masyarakat, dan bila tidak ada upaya sungguh-sungguh untuk mengantisipasinya maka hal tersebut
              akan menjadi maslah yang sangat serius. Dalam hal ini dunia pendidikan mempunyai tanggung jawab yang besar.
            </p>
            <hr class="my-4" />
          </div>
        </div>
        <div class="col">
          <div class="jumbotron">
            <h1 class="display-4 text-center">Lokasi Sekolah</h1>
            <div class="profil">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15947.422003037358!2d113.90691308465574!3d-2.2082109165251107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb2534f17247f%3A0x6bcf11635768b894!2sSD%20Negeri%205%20Palangkaraya!5e0!3m2!1sid!2sid!4v1701072651371!5m2!1sid!2sid"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <hr class="my-4" />
          </div>
        </div>
      </div>
    </div>

    <!-- jumbotron -->
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Pencarian Plus Pagination Dengan PHP dan AJAX</title>

        <!-- Load File bootstrap.min.css yang ada difolder css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
          .align-middle {
            vertical-align: middle !important;
          }
        </style>
      </head>
      <body>
        <div style="padding: 0 15px">
          <h2>Pencarian Kelas Siswa</h2>
          <hr />

          <!--
          -- Buat sebuah div dengan class row
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
                <!-- Buat sebuah textbox dan beri id keyword -->
                <input type="text" class="form-control" placeholder="Pencarian..." id="keyword" />

                <span class="input-group-btn">
                  <!-- Buat sebuah tombol search dan beri id btn-search -->
                  <button class="btn btn-primary" type="button" id="btn-search">SEARCH</button>
                  <a href="" class="btn btn-warning">RESET</a>
                </span>
              </div>
            </div>
          </div>
          <br />

          <!--
          -- Beri atribut id="view" pada tag div yang akan digunakan untuk menampung data 
          -- yang ada pada tabel siswa di database dan paginationnya
          -->
          <div id="view"><?php include "view_page.php"; ?></div>
        </div>

        <!-- Load File jquery.min.js yang ada difolder js -->
        <script src="js/jquery.min.js"></script>

        <!-- Load File bootstrap.min.js yang ada difolder js -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Load file ajax.js yang ada di folder js -->
        <script src="js/ajax_page.js"></script>
      </body>
    </html>
    <!-- Import -->
    <div class="crud-pencarian"><h1><a style="color:white;" href="import/index_import.php">Import</a></h1></div><br><br><br><hr>

    <!-- Ixport -->
    <!-- export -->
    <div class="crud-pencarian"><h1><a style="color:white;" href="dika/index_export.php">Export</a></h1></div><br><br><br><hr>
    <!-- export -->

    <!-- FOOTER -->
    <footer id="Footer" class="text-center text-white pb-5">
      <div class="foot"></div>
      <div class="footer">
        <p>Copyright -@2023-SD5 Palangka Raya</p>
      </div>
    </footer>
     <!-- FOOTER -->
  </body>
</html>
