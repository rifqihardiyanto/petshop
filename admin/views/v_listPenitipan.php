<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Penitipan Data</h4>

        <?php if (isset($_GET['alert'])): ?>
          <?php if ($_GET['alert']==1): ?>
            <div class="alert alert-success" role="alert">
              Berhasil Mengubah Data!
            </div>
          <?php else: ?>
            <div class="alert alert-danger" role="alert">
              Gagal Mengubah Data!
            </div>
          <?php endif; ?>
        <?php endif; ?>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis Penitipan</th>
                <th>Harga</th>
                <th>Tambahan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $no = 0;
              $data = $connect->query('SELECT * FROM tb_penitipan');
              while ($value = $data->fetch_object()) { ?>
                <tr>
                  <td><?= $no+=1; ?></td>
                  <td><?= $value->jenis_penitipan; ?></td>
                  <td>Rp. <?= number_format($value->harga_penitipan); ?>;-</td>
                  <td>
                    <?php if ($value->status_penitipan=='0'): ?>
                      Tidak ada Makan
                    <?php else: ?>
                      Tambah Makan
                    <?php endif; ?>
                  </td>
                  <td>
                    <a href="index.php?page=3&edit=<?= $value->id_penitipan; ?>" class="btn btn-info btn-sm">Edit</a>
                    <a href="controller/penitipan/deletePenitipan.php?id=<?= $value->id_penitipan; ?>" class="btn btn-danger btn-sm">Delete</a>
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
