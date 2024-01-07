<?php
include "system/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags 
-->
<meta name="description" content="">
<meta name="author" content="">
<title>Login + Hak Akses (PHP)</title>
<!-- Load File CSS Bootstrap -->
<link href="<?php echo $base_url.'css/bootstrap.min.css'; ?>" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
body {
min-height: 2000px;
padding-top: 70px;
}
.crud-pencarian {
width: 100%;
background-image: linear-gradient(to bottom right, #61ba6d, #82c332);
}
.a-btn[href] {
color: white;
text-decoration: none;
}
.navbar-brand {
    float: left;
    height: 50px;
    width: 1199px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
    border-color: #080808;
    border-radius: 4px;
}
.tengah {
  padding-left:150px;
}


</style>
</head>
<body>
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
    /* FOOTER AKHIR */
  </style>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark nv-baru">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/20035135-30f5-e011-93df-030f18e28268">SD 5 Palangkaraya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url.'index.php?page=home'; ?>">Home</a>
            
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $base_url.'index.php?page=profil'; ?>">Profil;</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $base_url.'index.php?page=kontak'; ?>">Kontak</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo $base_url.'index.php?page=lainnya'; ?>">Lainnya</a>
              <ul class="dropdown-menu">
              <a class="nav-link" href="<?php echo $base_url.'index.php?page=visi&misi'; ?>">Visi & Misi</a>
              <a class="nav-link" href="<?php echo $base_url.'index.php?page=guru'; ?>">Guru</a>
              <a class="nav-link" href="<?php echo $base_url.'index.php?page=siswa'; ?>">Siswa</a>
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

    <!-- colarasel awal -->

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/1.jpg" alt="Los Angeles" class="d-block" style="width: 100%" />
          <div class="carousel-caption">
            <h3>Indonesia</h3>
            <p>Kita punya waktu yang banyak di sekolah</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/2.jpg" alt="Chicago" class="d-block" style="width: 100%" />
          <div class="carousel-caption">
            <h3>SD 5 Palangkaraya</h3>
            <p>Thank you, SD 5 Palangkaraya!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/3.jpg" alt="New York" class="d-block" style="width: 100%" />
          <div class="carousel-caption">
            <h3>Palangkaraya</h3>
            <p>We love Palangkaraya!</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    <!-- colarasel akhir -->
<div id="navbar" class="navbar-collapse collapse tengah">
<ul class="nav navbar-nav">
<?php
// Cek role user
if($_SESSION['role'] == 'admin'){ // Jika role-nya admin
?>
<li>
  <div class="container-fluid crud-pencarian">
  <a class="navbar-brand text-center use1" style="color: white;" href="<?php echo $base_url.'index.php?page=pengguna'; ?>"><h2>Pengguna</h2></a>
</li>

<?php
}
?>
</div><!--/.nav-collapse -->
</div>
</nav>
<div class="container">
<?php include "config.php"; // Load file config.php ?>
</div>
<!-- Load file Javascript Bootstrap & jQuery -->
<script src="<?php echo $base_url.'js/jquery.min.js'; ?>"></script>
<script src="<?php echo $base_url.'js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo $base_url.'js/index.js'; ?>"></script>
</body>
</html>