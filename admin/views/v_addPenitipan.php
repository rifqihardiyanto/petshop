<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Penitipan</h4>

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
          <form class="forms-sample" action="controller/penitipan/addPenitipan.php" method="post">
            <div class="form-group">
              <label for="exampleInputName1">Jenis Penitipan</label>
              <input type="text" name="jenis" class="form-control" placeholder="Jenis Penitipan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Harga Penitipan</label>
              <input type="number" name="harga" class="form-control" placeholder="Harga Penitipan (Ex : 35000)">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Tambahan Penitipan</label>
              <select class="form-control" name="type">
                <option value="1">Makan</option>
                <option value="0">Tidak Makan</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        <?php else: ?>
          <?php $data = $connect->query("SELECT * FROM tb_penitipan WHERE id_penitipan=".$_GET['edit'])->fetch_object(); ?>

          <form class="forms-sample" action="controller/penitipan/editPenitipan.php" method="post">
            <div class="form-group">
              <label for="exampleInputName1">Jenis Grooming</label>
              <input type="text" name="jenis" class="form-control" value="<?= $data->jenis_penitipan; ?>" placeholder="Jenis Penitipan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Harga Grooming</label>
              <input type="number" name="harga" class="form-control" value="<?= $data->harga_penitipan; ?>" placeholder="Harga Penitipan (Ex : 35000)">
            </div>
            <input type="hidden" name="id" value="<?= $_GET['edit']; ?>">
            <div class="form-group">
              <label for="exampleInputPassword4">Tambahan Penitipan</label>
              <select class="form-control" name="type">
                <option value="1" <?php if($data->status_penitipan == '1'){ echo "selected"; } ?>>Makan</option>
                <option value="0" <?php if($data->status_penitipan == '0'){ echo "selected"; } ?>>Tidak Makan</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>
