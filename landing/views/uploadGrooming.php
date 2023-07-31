<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Petshop Palagan</span>
          <h1 class="text-capitalize mb-5 text-lg">Upload Bukti Pembayaran</h1>
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

                <h2 class="mb-4 text-md"><a href="index.php?page=3">Pembayaran Grooming</a></h2>

                <form action="controller/uploadGrooming.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Upload Bukti (.jpg, .png, .jpeg)</label>
                    <input type="file" class="form-control" name="bukti">
                    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                  </div>

                  <?php if (!isset($_SESSION['pelanggan'])): ?>
                    <a class="btn btn-info float-right" href="../login.php">Bayar</a>
                  <?php else: ?>
                    <button class="btn btn-info float-right" name="button">Bayar</button>
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
            <h5 class="mb-4">Nomor Rekening</h5>

            <ul class="list-unstyled">
              <li class="d-flex justify-content-between align-items-center">
                <a href="#">BANK MANDIRI</a>
                <span>092783790 (Rifqi Hardiyanto Nugroho)</span>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
