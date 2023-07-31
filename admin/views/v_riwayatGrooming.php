<?php
$enkrip = $connect->query("SELECT * FROM tb_dt_grooming");
$enkripsi = $enkrip->fetch_object();
ini_set('display_errors', 1);
?>
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Grooming Data</h4>

        <?php if (isset($_GET['alert'])): ?>
          <?php if ($_GET['alert']==1): ?>
            <div class="alert alert-success" role="alert">
              Berhasil Mengubah Data
            </div>
          <?php elseif($_GET['alert']==3): ?>
            <div class="alert alert-danger" role="alert">
              Key/Password Salah!
            </div>
          <?php else: ?>
            <div class="alert alert-danger" role="alert">
              Gagal Mengubah Data!
            </div>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($enkripsi->enkripsi == '0' || $enkripsi == null): ?>
          <form action="controller/grooming/enkripsi.php" method="post">
          <?php else: ?>
            <form action="controller/grooming/dekripsi.php" method="post">
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
                  <th scope="col">Tanggal Masuk</th>
                  <th scope="col">Total Bayar</th>
                  <th scope="col">Status Bayar</th>
                  <th scope="col">Bukti Bayar</th>
                  <th scope="col">Status</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $setGrooming = $connect->query("SELECT * FROM tb_dt_grooming WHERE status_diambil='0' ORDER BY status_diambil DESC");

                while ($gro = $setGrooming->fetch_object()) { ?>
                  <?php if ($gro->enkripsi == '0'): ?>
                    <tr>
                      <th scope="row"><?= $no+=1; ?></th>
                      <td><?= $gro->nama_pemesan; ?></td>
                      <td><?= date('d-m-Y', strtotime($gro->tanggal_masuk)); ?></td>
                      <td>Rp.<?= number_format($gro->total_bayar); ?>;-</td>
                      <td>
                        <?php if ($gro->jenis_bayar == '0'): ?>
                          <span class="badge badge-info">Transfer</span>
                        <?php else: ?>
                          <span class="badge badge-success">CASH</span>
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php if ($gro->jenis_bayar == '0' && $gro->bukti_bayar != null): ?>
                          <a href="../bukti/<?= $gro->bukti_bayar; ?>" target="_blank"><span class="badge badge-info">Lihat Bukti</span></a>
                        <?php elseif ($gro->jenis_bayar == '1'): ?>
                          <span class="badge badge-success">CASH</span>
                        <?php else: ?>
                          <span class="badge badge-info">Transfer</span>
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php if ($gro->status_diambil == '0'): ?>
                          <span class="badge badge-primary">Menunggu</span>
                        <?php else: ?>
                          <span class="badge badge-success">Selesai</span>
                        <?php endif; ?>
                      </td>

                      <td>
                        <?= $gro->alamat_ambil; ?>
                      </td>

                      <td>
                        <?php if ($gro->jenis_bayar == '0') { ?>
                          <?php if ($gro->status_diambil == '1'): ?>
                            <span class="badge badge-success">Selesai</span>
                          <?php else: ?>
                            <a href="controller/grooming/updateAmbil.php?id=<?= $gro->id_dt_grooming; ?>" class="btn btn-info btn-sm">Diambil</a>
                          <?php endif; ?>
                        <?php } else { ?>
                          <?php if ($gro->status_diambil == '1'): ?>
                            <span class="badge badge-success">Selesai</span>
                          <?php else: ?>
                            <a href="controller/grooming/updateAmbil.php?id=<?= $gro->id_dt_grooming; ?>" class="btn btn-info btn-sm">Diambil</a>
                            <?php if ($gro->status_bayar == '0'): ?>
                              <a href="controller/grooming/updateLunas.php?id=<?= $gro->id_dt_grooming; ?>" class="btn btn-success btn-sm">Lunas</a>
                            <?php endif; ?>
                          <?php endif; ?>
                        <?php } ?>
                      </td>
                    </tr>
                  <?php else: ?>
                    <tr>
                      <th scope="row"><?= $no+=1; ?></th>
                      <td><?= AesCtr::encrypt($gro->nama_pemesan, $gro->aes_key, 128); ?></td>
                      <td><?= AesCtr::encrypt($gro->tanggal_masuk, $gro->aes_key, 128); ?></td>
                      <td><?= AesCtr::encrypt($gro->total_bayar, $gro->aes_key, 128); ?></td>
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
                        <?= AesCtr::encrypt($gro->alamat_ambil, $gro->aes_key, 128); ?>
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
