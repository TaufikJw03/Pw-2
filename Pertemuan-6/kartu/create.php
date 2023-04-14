<?php
require_once '../dbkoneksi.php';
?>

<?php
// cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
$_id = isset($_GET['id']) ? $_GET['id'] : null;
if (!empty($_id)) {
  // ambil data vendor berdasarkan id
  $sql = "SELECT * FROM kartu WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_id]);
  $row = $st->fetch();
} else {
  // jika tidak ada parameter id pada URL, maka dianggap input data baru
  // inisialisasi variabel $row sebagai array kosong
  $row = [];
}
?>

<form method="POST" action="proses.php">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="kode" name="kode" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Kartu</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="diskon" class="col-4 col-form-label">Diskon</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="diskon" name="diskon" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="iuran" class="col-4 col-form-label">Iuran</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="iuran" name="iuran" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <?php
            $button = (empty($_id)) ? "Simpan" : "Update";
            ?>
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
            <input type="hidden" name="id" value="<?= $_id ?>" />
        </div>
    </div>
</form>