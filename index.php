<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!--Font Google-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<!-- Style -->
<link rel="stylesheet" href="css/style.css">

<!-- resposnsive -->
<link rel="stylesheet" href="css/responsive.css">

<!-- Logo -->
<link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Recycle click</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" alt="" width="90" 
            class="d-inline-block align-text-top me-3">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Koleksi</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#" >Kategori</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Layanan</a>
              </li>
            </ul>
            <div>
                <button class="button-primary" type="submit" name="lgnvbtn" >Daftar </button>
                <button class="button-second"type="submit" name="lgnvregis">Masuk</button>
                <script>
                  <?php
                    if(isset($_SESSION['lgnvbtn'])){
                      header("Location: login.html");
                    }
                    if(isset($_SESSION['lgnvregis'])){
                      header("location: register.html");
                    }
                  ?>
                </script>
            </div>
          </div>
        </div>
      </nav>
<!-- Hero Section -->
<section id="hero">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-md-6 hero-tagline my-auto">
        <h1>
          Lestarikan Bumi 
          Bersama. </h1>
        <p><span class="fw-bold">RecyClick</span> hadir untuk mempermudah anda berbelanja fashion dengan bahan ramah lingkungan tanpa merusak bumi kita.</p>
        <button class="button-lg-primary">Temukan Barang</button>
        <a href="#">
          <img src="assets/img/arrorrg.png" alt="">
        </a>

      </div>
      
      <div>
        <img src="assets/img/lans.png" alt="" class="position-absolute end-0 buttom-0 img-hero" >
        <div>
        </div>
        
      
    
  </div>
</section>
<!-- Layanan Session -->
<section id="layanan">
  <div class="container">
  <div class="row">
    <div class="col-12 text-center">
      <h2>Layanan Kami</h2>
      <span class="sub-title">RecyClick hadir untuk mempermudah kebutuhan anda </span>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-4 text-center">
      <div class="card-layanan">
        <div class="circle-icon position-relative mx-auto">
          <img src="assets/img/properti baru icon.png" alt="" class="position-absolute top-50 start-50 translate-middle" >
        </div>
        <div>
          <h3 class="mt-4">Produk Daur Ulang</h3>
          <p class="mt-3">Dapatkan barang-barang produk ramah lingkungan melalui tangan kami.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="card-layanan">
        <div class="circle-icon position-relative mx-auto">
          <img src="assets/img/p1.png" alt="" class="position-absolute top-50 start-50 translate-middle" >
        </div>
        <div>
          <h3 class="mt-4">Mudah Didapatkan</h3>
          <p class="mt-3">Produk-produk yang kami buat sangat mudah didapatkan melalui pemesanan online.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="card-layanan">
        <div class="circle-icon position-relative mx-auto">
          <img src="assets/img/p2.png" alt="" class="position-absolute top-50 start-50 translate-middle" >
        </div>
        <div>
          <h3 class="mt-4">Murah & Hemat</h3>
          <p class="mt-3">Dapatkan produk-produk kami dengan harga yang murah dan ramah di kantong anda.</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- search section -->
<section id="search" class="d-flex align-items-center">
  

  <div class="col-10 mx-auto">

    <div class="container">
      <div class="row">
        <div class="col-12 text-center" >
          <h2 class="text-center">Temukan Barang Impian</h2>
          <p class="text-center">Temukan barang impianmu dengan harga ramah kantong dan mudah didapat</p>
        </div>
      </div>
    
    </div>
    <div class="input-group input-cari mb-3">
      <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Tipe Barang</button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Aksesoris</a></li>
        <li><a class="dropdown-item" href="#">Kain</a></li>
        <li><a class="dropdown-item" href="#">Perabotan Rumah Tangga</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Lainnya</a></li>
      </ul>
      <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Harga Barang</button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">0-10 Ribu</a></li>
        <li><a class="dropdown-item" href="#">11-80 Ribu</a></li>
        <li><a class="dropdown-item" href="#">Lebih 80 Ribu</a></li>
        <li><hr class="dropdown-divider"></li>
      
      </ul>
      <input type="text" class="form-control"  placeholder="Cari Berdasarkan Kategori, Nama Barang"aria-label="Text input with dropdown button">
      <button class="button-pmry" type="button" id="button-addon2">Cari</button>
    </div>
  </div> 
</section>
<!-- Rekomendasi -->
<section id="rekomendasi">
  <div class="contrainer">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Rekomendasi Barang Untuk Mu</h2>
      </div>
    </div>
    <div class="row justify-content-between">
      <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
        <div class="card p-2" style="width: 20rem;">
          <img src="assets/img/tas1.png" alt="">
          <div class="card-body">
            <h4>Rp 45.000</h4>
            <p>Tas Jinjing Rotan</p>
            <p>Merupakan tas alami yang dibuat dari rotan dan kain perca</p>
          </div>

        </div>
        
          </div>
          <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
            <div class="card p-2" style="width: 20rem;">
              <img src="assets/img/tas1.png" alt="">
              <div class="card-body">
                <h4>Rp 45.000</h4>
                <p>Tas Jinjing Rotan</p>
                <p>Merupakan tas alami yang dibuat dari rotan dan kain perca</p>
              </div>
    
            </div>
            
              </div>
              <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                <div class="card p-2" style="width: 20rem;">
                  <img src="assets/img/tas1.png" alt="">
                  <div class="card-body">
                    <h4>Rp 45.000</h4>
                    <p>Tas Jinjing Rotan</p>
                    <p>Merupakan tas alami yang dibuat dari rotan dan kain perca</p>
                  </div>
        
                </div>
                
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                    <div class="card p-2" style="width: 20rem;">
                      <img src="assets/img/tas1.png" alt="">
                      <div class="card-body">
                        <h4>Rp 45.000</h4>
                        <p>Tas Jinjing Rotan</p>
                        <p>Merupakan tas alami yang dibuat dari rotan dan kain perca</p>
                      </div>
            
                    </div>
                    
                      </div>
                      <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <div class="card p-2" style="width: 20rem;">
                          <img src="assets/img/tas1.png" alt="">
                          <div class="card-body">
                            <h4>Rp 45.000</h4>
                            <p>Tas Jinjing Rotan</p>
                            <p>Merupakan tas alami yang dibuat dari rotan dan kain perca</p>
                          </div>
                
                        </div>
                        
                          </div><div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                            <div class="card p-2" style="width: 20rem;">
                              <img src="assets/img/tas1.png" alt="">
                              <div class="card-body">
                                <h4>Rp 45.000</h4>
                                <p>Tas Jinjing Rotan</p>
                                <p>Merupakan tas alami yang dibuat dari rotan dan kain perca</p>
                              </div>
                    
                            </div>
                            
                              </div>
                              <div class="text-center ms-5">
                                <p>lihat selengkapnya</p>
                                </div>
                                 
                  
      </div>
      
    </div>
  </div>
  

</section>

<!-- Kategori Barang -->
<section id="fitur" class="ms-5" overflow-hidden>
  <div class="container position-relative">
    <div class="row mb-3">
      <div class="col-lg-9 col-md-12 text-center text-lg-start">
        <h2>Kategori Barang</h2>
      </div>
      <div class="col-lg-3 col-md-12">
        <button class="button-kategori">Lihat Selengkapnya
          <img src="assets/img/arrowfr.png" alt="" class="ms-2">
        </button>
      </div>
    </div>
    <div class="contrainer">
      <div class="row">
        <div class="col-12 d-flex justify-content-start">
          <div class="card-fitur me-3 position-relative" >
            <img src="assets/img/kategori2.png" alt="">
            <div class="overlay position-absolute top-0 buttom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>Aksesories Dan Fashion </h5>
              <span>Fashion Ramah Lingkungan</span>
              <h6>Rp 10.000-150.000</h6>
              <button>Lihat Barang</button>
              </div>
            </div>
        </div>
        <div class="card-fitur me-3 position-relative" >
          <img src="assets/img/kategori2.png" alt="">
          <div class="overlay position-absolute top-0 buttom-0 start-0 end-0 w-100 h-100">
            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
              <h5>Aksesories Dan Fashion </h5>
            <span>Fashion Ramah Lingkungan</span>
            <h6>Rp 10.000-150.000</h6>
            <button>Lihat Barang</button>
            </div>
          </div>
      </div>
      <div class="card-fitur me-3 position-relative" >
        <img src="assets/img/kategori2.png" alt="">
        <div class="overlay position-absolute top-0 buttom-0 start-0 end-0 w-100 h-100">
          <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
            <h5>Aksesories Dan Fashion </h5>
          <span>Fashion Ramah Lingkungan</span>
          <h6>Rp 10.000-150.000</h6>
          <button>Lihat Barang</button>
          </div>
        </div>
    </div><div class="card-fitur me-3 position-relative" >
      <img src="assets/img/kategori2.png" alt="">
      <div class="overlay position-absolute top-0 buttom-0 start-0 end-0 w-100 h-100">
        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
          <h5>Aksesories Dan Fashion </h5>
        <span>Fashion Ramah Lingkungan</span>
        <h6>Rp 10.000-150.000</h6>
        <button>Lihat Barang</button>
        </div>
      </div>
  </div>
        </div>
        
    </div>
    <button class="button-arrow-left position-absolute start-0 top-50 translate-middle-y">
      <img src="assets/img/arrorrg.png" alt="">
    </button>
    <button class="button-arrow-right position-absolute end-0 top-50 translate-middle-y">
      <img src="assets/img/arrowfr.png" alt="">
    </button>
  </div>
</section> 
<section id="contact">
<div class="contrainer-fluid overlay h-100">
  <div class="contrainer">
    <div class="row">
      <div class="col-md-6">
        <h3>Dapatkan Informasi Mengenai Kami Melalui : </h3>
        <div class="kontak">
          <h6>Kontak</h6>
          <div class="mb-lg-3 me-1 d-flex align-items-center"><img src="assets/img/lmt.png" alt="">
            <a href="#">Rumah Akhdan Robbani No 54 Blok 89 Nganjuk</a>
          </div>
          <div class="mb-lg-3 me-1"><img src="assets/img/tlp.png" alt="">
            <a href="#">022-6789-7778</a>
          </div>
          <div class="mb-lg-3 me-1"><img src="assets/img/eml.png" alt="">
            <a href="#">Recyclick@gmail.com</a>
          </div>
          <h6>Sosial Media</h6>
          <a href="#" class="linksosmed"><img src="assets/img/sosomed.png" alt="">RecyclickNganjuk</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-contact w-100">
          <form>
            <h2>Ada Pertanyaan?</h2>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput" class="d-flex align-items-center">Masukkan E-mail Anda</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput" class="d-flex align-items-center">Masukkan Komentar Anda</label>
            </div>
            <button type="submit"class="button-kirim">Kirim</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>

</div>
</section>
<footer class="d-flex align-items-center position-relative">
  <div class="container-fluid">
    <div class="container">
    <div class="row">
      <div class="col-md-7 d-flex align-items-center justify-content-lg-start justify-content-center">
        <img src="assets/img/imgfooter.png" alt="">
      </div>
      <div class="col-md-5 d-flex justify-content-evenly justify-content-center">
      <a href="#hero">Beranda</a>
      <a href="#layanan">Layanan</a>
      <a href="#rekomendasi">Rekomendasi</a>
      <a href="fitur">Fitur</a>
      <a href="contact">Kontak</a>
    </div>
    </div>
    <div class="row position-absolute copyright start-50 translate-middle">
      <div class="col-12 ">
        <p class="text-center">Copyright bg A3 Team all right reserved</p>
      </div>
    </div>
    </div>
    
  </div>
</footer>
<script src="js/script.js"></script>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>   