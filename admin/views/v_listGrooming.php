<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Grooming Data</h4>

        <?php if (isset($_GET['alert'])): ?>
          <?php if ($_GET['alert']==1): ?>
            <div class="alert alert-success" role="alert">
              Berhasil Menghapus Data
            </div>
          <?php else: ?>
            <div class="alert alert-danger" role="alert">
              Gagal Menghapus Data!
            </div>
          <?php endif; ?>
        <?php endif; ?>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis Grooming</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $no = 0;
              $data = $connect->query('SELECT * FROM tb_grooming');
              while ($value = $data->fetch_object()) { ?>
                <tr>
                  <td><?= $no+=1; ?></td>
                  <td><?= $value->jenis_grooming; ?></td>
                  <td>Rp. <?= number_format($value->harga_grooming); ?>;-</td>
                  <td><?= $value->keterangan; ?></td>
                  <td>
                    <a href="index.php?page=1&edit=<?= $value->id_grooming; ?>" class="btn btn-info btn-sm">Edit</a>
                    <a href="controller/grooming/deleteGrooming.php?id=<?= $value->id_grooming; ?>" class="btn btn-danger btn-sm">Delete</a>
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
