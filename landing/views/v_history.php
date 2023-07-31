<?php ini_set('display_errors', 1);  ?>
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Petshop Palagan</span>
          <h1 class="text-capitalize mb-5 text-lg">Riwayat Pemesanan Anda</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="single-blog-item">
              <div class="blog-item-content">

                <?php if (isset($_GET['alert'])): ?>
                  <div class="alert alert-danger" role="alert">
                    Gagal melakukan pembayaran!
                  </div>
                <?php endif; ?>

                <h2 class="mb-4 text-md"><a href="index.php?page=1">Penitipan Hewan</a></h2>
                <table class="table table-striped">
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
                    $setPenitipan = $connect->query("SELECT * FROM tb_dt_penitipan WHERE id_user=".$_SESSION['pelanggan']);

                    while ($pen = $setPenitipan->fetch_object()) { ?>
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
                            <a href="../bukti/<?= $pen->bukti_bayar; ?>" target="_blank"><span class="badge badge-success">Lihat Bukti</span></a>
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
                          <?php if ($pen->status_pembayaran == '0' && $pen->bukti_bayar == null): ?>
                            <a href="index.php?page=4&id=<?= $pen->id_dt_penitipan; ?>" class="btn-info btn-sm">Upload Bukti Bayar</a>
                          <?php elseif($pen->status_pembayaran == '0' && $pen->bukti_bayar != null): ?>
                            <span class="badge badge-success">TERBAYAR</span>
                          <?php elseif($pen->status_pembayaran == '1' && $pen->status_bayar == '1'): ?>
                            <span class="badge badge-success">TERBAYAR</span>
                          <?php else: ?>
                            <span class="badge badge-info">Belum Lunas</span>
                          <?php endif; ?>
                        </td>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>

                <h2 class="mb-4 mt-5 text-md"><a href="index.php?page=2">Grooming Hewan</a></h2>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Pemesan</th>
                      <th scope="col">Tanggal Masuk</th>
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
                    $setGrooming = $connect->query("SELECT * FROM tb_dt_grooming WHERE id_user=".$_SESSION['pelanggan']);

                    while ($gro = $setGrooming->fetch_object()) { ?>
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
                            <a href="../bukti/<?= $gro->bukti_bayar; ?>" target="_blank"><span class="badge badge-success">Lihat Bukti</span></a>
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
                          <?php if ($gro->jenis_bayar == '0' && $gro->bukti_bayar == null): ?>
                            <a href="index.php?page=5&id=<?= $gro->id_dt_grooming; ?>" class="btn-info btn-sm">Upload Bukti Bayar</a>
                          <?php elseif($gro->jenis_bayar == '0' && $gro->bukti_bayar != null): ?>
                            <span class="badge badge-success">TERBAYAR</span>
                          <?php elseif($gro->jenis_bayar == '1' && $gro->status_bayar == '1'): ?>
                            <span class="badge badge-success">TERBAYAR</span>
                          <?php else: ?>
                            <span class="badge badge-info">Belum Lunas</span>
                          <?php endif; ?>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
