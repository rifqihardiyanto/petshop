<div class="row">
  <div class="col-sm-6">
    <h3 class="mb-0 font-weight-bold">Welcome back, <?= $account->nama_admin; ?></h3>
    <p><?= date('d F Y'); ?></p>
  </div>
  <div class="col-sm-6">
    <div class="d-flex align-items-center justify-content-md-end">
      <div class="pr-1 mb-3 mr-2 mb-xl-0">
        <a href="index.php?page=6" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-book mr-2"></i>Grooming</a>
      </div>
      <div class="pr-1 mb-3 mr-2 mb-xl-0">
        <a href="index.php?page=5" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-book mr-2"></i>Penitipan</a>
      </div>
    </div>
  </div>
</div>

<div class="row  mt-3">
  <div class="col-xl-3 d-flex grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
          <h4 class="card-title mb-3">Grooming</h4>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between mb-md-0 mt-3">
                  <?php $groming = $connect->query("SELECT * FROM tb_dt_grooming WHERE status_diambil='0'"); ?>
                  <h2><?= mysqli_num_rows($groming); ?></h2>
                </div>
                <h2>Orang melakukan booking Grooming</h2>
                <a href="index.php?page=6" class="btn btn-info btn-sm">Lihat Grooming ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 d-flex grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
          <h4 class="card-title mb-3">Penitipan</h4>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between mb-md-0 mt-3">
                  <?php $penitipan = $connect->query("SELECT * FROM tb_dt_penitipan WHERE status_diambil='0'"); ?>
                  <h2><?= mysqli_num_rows($penitipan); ?></h2>
                </div>
                <h2>Orang melakukan booking penitipan</h2>
                <a href="index.php?page=5" class="btn btn-info btn-sm">Lihat Penitipan ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 d-flex grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
          <h4 class="card-title mb-3">Laporan Grooming</h4>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between mb-md-0 mt-3">
                  <?php $groming_ambil = $connect->query("SELECT * FROM tb_dt_grooming WHERE status_diambil='1'"); ?>
                  <h2><?= mysqli_num_rows($groming_ambil); ?></h2>
                </div>
                <h2>Grooming telah selesai dan hewan sudah diambil.</h2>
                <a href="index.php?page=8" class="btn btn-info btn-sm">Lihat Laporan ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 d-flex grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between">
          <h4 class="card-title mb-3">Laporan Penitipan</h4>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between mb-md-0 mt-3">
                  <?php $penitipan_ambil = $connect->query("SELECT * FROM tb_dt_penitipan WHERE status_diambil='1'"); ?>
                  <h2><?= mysqli_num_rows($penitipan_ambil); ?></h2>
                </div>
                <h2>Penitipan telah selesai dan hewan sudah diambil.</h2>
                <a href="index.php?page=7" class="btn btn-info btn-sm">Lihat Laporan ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
