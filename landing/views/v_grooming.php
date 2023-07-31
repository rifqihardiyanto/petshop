<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Petshop Palagan</span>
          <h1 class="text-capitalize mb-5 text-lg">Grooming Hewan</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="single-blog-item">
              <div class="blog-item-content">

                <h2 class="mb-4 text-md"><a href="index.php?page=1">Pendaftaran Grooming Hewan</a></h2>

                <?php if (isset($_GET['alert'])): ?>
                  <div class="alert alert-danger" role="alert">
                    Gagal melakukan booking!
                  </div>
                <?php endif; ?>

                <form action="controller/addGrooming.php" method="post">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Pemesan</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Pemesan" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Penitipan</label>

                    <?php $penitipan = $connect->query("SELECT * FROM tb_grooming"); ?>
                    <select class="form-control" name="id_grooming">
                      <?php while ($value = $penitipan->fetch_object()) { ?>
                        <option value="<?= $value->id_grooming; ?>"><?= $value->jenis_grooming; ?> - Rp.<?= number_format($value->harga_grooming); ?>;-/Hari (<?= $value->keterangan; ?>)</option>
                      <?php  } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal Grooming</label>
                    <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" name="mulai" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat Antar/Jemput</label>
                    <textarea name="alamat" value="<?=  AesCtr::decrypt($pelanggan->alamat, 'rifqi', 128); ?>"  class="form-control" rows="8" cols="80"><?=  AesCtr::decrypt($pelanggan->alamat, 'rifqi', 128); ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="">Pembayaran</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="pembayaran" value="1" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Bayar Ditempat
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="pembayaran" value="0" id="exampleRadios2" value="option2">
                      <label class="form-check-label" for="exampleRadios2">
                        Bayar Transfer - (092783790 BNI a/n Rifqi Hardiyanto Nugroho)
                      </label>
                    </div>
                  </div>

                  <?php if (!isset($_SESSION['pelanggan'])): ?>
                    <a class="btn btn-info float-right" href="../login.php">Booking</a>
                  <?php else: ?>
                    <button class="btn btn-info float-right" name="button">Booking</button>
                  <?php endif; ?>
                </form>

              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="col-lg-4">
        <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
          <div class="sidebar-widget schedule-widget mb-3">
            <h5 class="mb-4">Jadwal Grooming Hewan</h5>

            <ul class="list-unstyled">
              <li class="d-flex justify-content-between align-items-center">
                <a href="#">Senin - Jumat</a>
                <span>9:00 - 17:00</span>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <a href="#">Sabtu - Minggu</a>
                <span>9:00 - 16:00</span>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <a href="#">Hari Raya</a>
                <span>Tutup</span>
              </li>
            </ul>

            <div class="sidebar-contatct-info mt-4">
              <p class="mb-0">Costumer Service</p>
              <h3>+62 813-9368-8138</h3>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
