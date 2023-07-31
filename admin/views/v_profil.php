<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ubah Profil</h4>

        <?php if (isset($_GET['alert'])): ?>
          <?php if ($_GET['alert']==1): ?>
            <div class="alert alert-success" role="alert">
              Berhasil Mengubah Data
            </div>
          <?php else: ?>
            <div class="alert alert-danger" role="alert">
              Gagal Mengubah Data!
            </div>
          <?php endif; ?>
        <?php endif; ?>

        <form class="forms-sample" action="controller/editProfil.php" method="post">
          <div class="form-group">
            <label for="exampleInputName1">Nama Anda</label>
            <input type="text" name="nama" class="form-control" value="<?= $account->nama_admin; ?>" placeholder="Nama Anda" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Username</label>
            <input type="text" name="username" class="form-control" value="<?= $account->username; ?>" placeholder="Username" required>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" name="pass" class="form-control" value="<?= $account->password; ?>" placeholder="Password" required>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>

      </div>
    </div>
  </div>
</div>
