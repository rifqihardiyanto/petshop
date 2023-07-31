<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Grooming</h4>

        <?php if (isset($_GET['alert'])): ?>
          <?php if ($_GET['alert']==1): ?>
            <div class="alert alert-success" role="alert">
              Berhasil Menambahkan Data
            </div>
          <?php else: ?>
            <div class="alert alert-danger" role="alert">
              Gagal Menambahkan Data!
            </div>
          <?php endif; ?>
        <?php endif; ?>

        <?php if (!isset($_GET['edit'])): ?>
          <form class="forms-sample" action="controller/grooming/addGrooming.php" method="post">
            <div class="form-group">
              <label for="exampleInputName1">Jenis Grooming</label>
              <input type="text" name="jenis" class="form-control" placeholder="Jenis Grooming">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Harga Grooming</label>
              <input type="number" name="harga" class="form-control" placeholder="Harga Grooming (Ex : 35000)">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Keterangan</label>
              <textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="8" cols="80"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        <?php else: ?>
          <?php $data = $connect->query("SELECT * FROM tb_grooming WHERE id_grooming=".$_GET['edit'])->fetch_object(); ?>

          <form class="forms-sample" action="controller/grooming/editGrooming.php" method="post">
            <div class="form-group">
              <label for="exampleInputName1">Jenis Grooming</label>
              <input type="text" name="jenis" class="form-control" value="<?= $data->jenis_grooming; ?>" placeholder="Jenis Grooming">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Harga Grooming</label>
              <input type="number" name="harga" class="form-control" value="<?= $data->harga_grooming; ?>" placeholder="Harga Grooming (Ex : 35000)">
            </div>
            <input type="hidden" name="id" value="<?= $_GET['edit']; ?>">
            <div class="form-group">
              <label for="exampleInputPassword4">Keterangan</label>
              <textarea name="keterangan" class="form-control" value="<?= $data->keterangan; ?>" placeholder="Keterangan" rows="8" cols="80"><?= $data->keterangan; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>
