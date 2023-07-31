<!-- Slider Start -->
<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-xl-7">
        <div class="block">
          <div class="divider mb-3"></div>
          <span class="text-uppercase text-sm letter-spacing ">Rawat Hewan Anda Dengan Kasih Sayang</span>
          <h1 class="mb-3 mt-3">Palagan Petshop Sahabat Hewan</h1>

          <p class="mb-4 pr-5">Lakukan Perawatan Hewan anda bersama Palagan Petshop mitra terbaik untuk perawatan hewan </p>
          <div class="btn-container ">
            <a href="../register.php" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Daftar Sekarang Juga<i class="icofont-simple-right ml-2  "></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="feature-block d-lg-flex">
          <div class="feature-item mb-5 mb-lg-0">
            <div class="feature-icon mb-4">
              <i class="icofont-surgeon-alt"></i>
            </div>
            <span>24 Jam Pelayanan</span>
            <h4 class="mb-3">Online Playanan</h4>
            <p class="mb-4">Dapatkan pelayanan terbaik 24 Jam dalam melakukan Grooming dan Penitipan</p>

            <?php if (isset($_SESSION['pelanggan'])): ?>
              <a href="index.php?page=1" class="btn btn-main btn-round-full">Penitipan</a>
            <?php else: ?>
              <a href="../login.php" class="btn btn-main btn-round-full">Login Sekarang</a>
            <?php endif; ?>
          </div>

          <div class="feature-item mb-5 mb-lg-0">
            <div class="feature-icon mb-4">
              <i class="icofont-ui-clock"></i>
            </div>
            <span>Jadwal Aktif</span>
            <h4 class="mb-3">7 Hari Kerja selalu Aktif</h4>
            <ul class="w-hours list-unstyled">
              <li class="d-flex justify-content-between">Senin - Rabu : <span>8:00 - 17:00</span></li>
              <li class="d-flex justify-content-between">Kamis - Jumat : <span>9:00 - 17:00</span></li>
              <li class="d-flex justify-content-between">Sabtu - Minggu : <span>10:00 - 17:00</span></li>
            </ul>
          </div>

          <div class="feature-item mb-5 mb-lg-0">
            <div class="feature-icon mb-4">
              <i class="icofont-support"></i>
            </div>
            <span>Costumer Service</span>
            <h4 class="mb-3">+62 813-9368-8138</h4>
            <p>Respone Cepat dan tanggap serta melayani dengan baik, melayani 24 Jam Online telpone ataupun whatsapp</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-sm-6">
        <div class="about-img">
          <img src="../vendor/landing/images/about/img-1.jpg" alt="" class="img-fluid">
          <img src="../vendor/landing/images/about/img-2.jpg" alt="" class="img-fluid mt-4">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="about-img mt-4 mt-lg-0">
          <img src="../vendor/landing/images/about/img-3.jpg" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="about-content pl-4 mt-4 mt-lg-0">
          <h2 class="title-color">Palagan <br>Petshop</h2>
          <p class="mt-4 mb-5">
            Palagan petshop adalah sebuah petshop untuk penitipan dan juga Grooming hewan peliharan khusus kucing dan juga anjing peliharaan.
          </p>

          <?php if (isset($_SESSION['pelanggan'])): ?>
            <a href="index.php?page=2" class="btn btn-main-2 btn-round-full btn-icon">Grooming Hewan<i class="icofont-simple-right ml-3"></i></a>
          <?php else: ?>
            <a href="../login.php" class="btn btn-main-2 btn-round-full btn-icon">Daftar Akun<i class="icofont-simple-right ml-3"></i></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
