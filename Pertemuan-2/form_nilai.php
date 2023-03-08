<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai Siswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
  <div class="m-3">
    <h2>Form Nilai Siswa</h2>
    <hr>
    <form method="GET" action="proses_nilai.php">
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama lengkap</label>
        <div class="col-8">
          <input id="nama" name="nama" placeholder="Masukkan nama" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata kuliah</label>
        <div class="col-8">
          <select id="matkul" name="matkul" class="custom-select" required="required">
            <option value="Web">Pemrograman Web</option>
            <option value="Basdat">Basis Data</option>
            <option value="Jarkom">Jaringan Komputer</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
        <div class="col-8">
          <input id="uts" name="uts" placeholder="Masukkan nilai UTS" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
        <div class="col-8">
          <input id="uas" name="uas" placeholder="Masukkan nilai UAS" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="praktikum" class="col-4 col-form-label">Nilai Praktikum</label>
        <div class="col-8">
          <input id="praktikum" name="praktikum" placeholder="Masukkan nilai praktikum" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>