<?php
$getEnkripsi = $connect->query("SELECT * FROM tb_dt_penitipan");
$enkripsi = $getEnkripsi->fetch_object();

?>
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Penitipan Data</h4>

        <?php if (isset($_GET['alert'])): ?>
          <?php if ($_GET['alert']==1): ?>
            <div class="alert alert-success" role="alert">
              Berhasil Mengubah Data
            </div>
          <?php elseif ($_GET['alert']==3): ?>
            <div class="alert alert-danger" role="alert">
              Key/Password tidak sama!
            </div>
          <?php else: ?>
            <div class="alert alert-danger" role="alert">
              Gagal Mengubah Data!
            </div>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($enkripsi->enkripsi == '0' || $enkripsi == null): ?>
          <form action="controller/penitipan/enkripsi.php" method="post">
          <?php else: ?>
            <form action="controller/penitipan/dekripsi.php" method="post">
            <?php endif; ?>
            <div class="row">
              <div class="col-9">
                <input type="password" size="16" name="password" class="form-control" placeholder="Password Enkripsi" required>
              </div>
              <input type="hidden" name="key_size" value="128">
              <div class="col-3">
                <?php if ($enkripsi->enkripsi == '0' || $enkripsi == null): ?>
                  <button type="submit" class="btn btn-info text-white">Enkripsi</button>
                <?php else: ?>
                  <button type="submit" class="btn btn-primary">Dekripsi</button>
                <?php endif; ?>
              </div>
            </div>
          </form>


          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Pemesan</th>
                  <th scope="col">Waktu Penitipan</th>
                  <th scope="col">Waktu Ambil</th>
                  <th scope="col">Total Bayar</th>
                  <th scope="col">Status Bayar</th>
                  <th scope="col">Bukti Bayar</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $no = 0;
                $setPenitipan = $connect->query("SELECT * FROM tb_dt_penitipan WHERE status_diambil='1' ORDER BY status_diambil DESC");
                while ($pen = $setPenitipan->fetch_object()) { ?>
                  <?php if ($pen->enkripsi == '0'): ?>
                    <tr>
                      <th scope="row"><?= $no+=1; ?></th>
                      <td><?= $pen->nama_penitip; ?></td>
                      <td><?= date('d-m-Y', strtotime($pen->waktu_penitipan)); ?></td>
                      <td><?= date('d-m-Y', strtotime($pen->waktu_keluar)); ?></td>
                      <td>Rp.<?= number_format($pen->total_bayar); ?>;-</td>
                      <td>
                        <?php if ($pen->status_pembayaran == '0'): ?>
                          <span class="badge badge-info">Transfer</span>
                        <?php else: ?>
                          <span class="badge badge-success">CASH</span>
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php if ($pen->status_pembayaran == '0' && $pen->bukti_bayar != null): ?>
                          <a href="../bukti/<?= $pen->bukti_bayar; ?>" target="_blank"><span class="badge badge-info">Lihat Bukti</span></a>
                        <?php elseif ($pen->status_pembayaran == '1'): ?>
                          <span class="badge badge-success">CASH</span>
                        <?php else: ?>
                          <span class="badge badge-info">Transfer</span>
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php if ($pen->status_diambil == '0'): ?>
                          <span class="badge badge-primary">Menunggu</span>
                        <?php else: ?>
                          <span class="badge badge-success">Selesai</span>
                        <?php endif; ?>
                      </td>

                      <td>
                        <?php if ($pen->status_pembayaran == '0') { ?>
                          <?php if ($pen->status_diambil == '1'): ?>
                            <span class="badge badge-success">Selesai</span>
                          <?php else: ?>
                            <a href="controller/penitipan/updateAmbil.php?id=<?= $pen->id_dt_penitipan; ?>" class="btn btn-info btn-sm">Diambil</a>
                          <?php endif; ?>
                        <?php } else { ?>
                          <?php if ($pen->status_diambil == '1'): ?>
                            <span class="badge badge-success">Selesai</span>
                          <?php else: ?>
                            <a href="controller/penitipan/updateAmbil.php?id=<?= $pen->id_dt_penitipan; ?>" class="btn btn-info btn-sm">Diambil</a>
                            <a href="controller/penitipan/updateLunas.php?id=<?= $pen->id_dt_penitipan; ?>" class="btn btn-success btn-sm">Lunas</a>
                          <?php endif; ?>
                        <?php } ?>
                      </td>
                    </tr>
                  <?php else: ?>
                    <tr>
                      <th scope="row"><?= $no+=1; ?></th>
                      <td><?= AesCtr::encrypt($pen->nama_penitip, $pen->aes_key, 128); ?></td>
                      <td><?= AesCtr::encrypt($pen->waktu_penitipan, $pen->aes_key, 128); ?></td>
                      <td><?= AesCtr::encrypt($pen->waktu_keluar, $pen->aes_key, 128); ?></td>
                      <td><?= AesCtr::encrypt($pen->total_bayar, $pen->aes_key, 128); ?></td>
                      <td>
                        <span class="badge badge-success">Terenkripsi</span>
                      </td>
                      <td>
                        <span class="badge badge-success">Terenkripsi</span>
                      </td>
                      <td>
                        <span class="badge badge-success">Terenkripsi</span>
                      </td>
                      <td>
                        <span class="badge badge-success">Terenkripsi</span>
                      </td>
                    </tr>
                  <?php endif; ?>
                <?php } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
