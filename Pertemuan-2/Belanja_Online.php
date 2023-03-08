<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belanja Online</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
  <div class="m-4">
  <div class="col-4 float-right">
      <ul class="list-group;">
        <li class="list-group-item bg-primary">Daftar Harga</li>
        <li class="list-group-item">TV : 4.200.000</li>
        <li class="list-group-item">Kulkas : 3.100.000</li>
        <li class="list-group-item">Mesin cuci : 3.800.000</li>
        <li class="list-group-item bg-primary">Harga Dapat Berubah Setiap Saat</li>
      </ul>
    </div>
    <form method="POST" action="">
      <h2>Belanja Online</h2>
      <hr>
      <div class="form-group row">
        <label for="customer" class="col-4 col-form-label">Customer</label>
        <div class="col-8">
          <input id="customer" name="nama" placeholder="Nama Customer" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Pilih Produk</label>
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
            <label for="produk_0" class="custom-control-label">Tv</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="mesin cuci">
            <label for="produk_1" class="custom-control-label">Kulkas</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="kulkas">
            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
          <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>

<?php
 $price = [
  'TV' => 4200000,
  'mesin cuci' => 3100000,
  'kulkas' => 3800000,
];
if(isset($_POST['submit'])){
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

echo "Nama Customer: $nama <br>";
echo "Produk: $produk <br>";
echo "Jumlah Pembelian: $jumlah <br>";
echo "Harga:" . $price [$produk] * $jumlah;
}
?>