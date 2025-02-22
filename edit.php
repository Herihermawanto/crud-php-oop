<?php

include 'class/proses_crud.php';

// inisialisasi class proses_crud 
$a = new proses_crud();

// ambil data berdasarkan id
$id = $_GET['id'];

//ambil data dari database
$result = $a->getData("SELECT * FROM tbl_datadiri WHERE id = $id");

foreach ($result as $row){
    $nama   = $row['nama'];
    $alamat = $row['alamat'];
    $ttl    = $row['ttl'];
    $jk     = $row['jk'];
}

?>
<!doctype html>
<html lang="en">
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>EDIT DATA PHP</title>
  </head>
  <body>
    <div class="container">
        <form method="post" action="proses-edit.php">
            <div class="form-group">
                <input type="text" name="id" class="form-control" value="<?php echo $_GET['id'];?>" required>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="ttl" class="form-control" placeholder="Masukan tanggal lahir" value="<?php echo $ttl; ?>" required>
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo $alamat; ?>" required>
            </div>
            <label for="jk">Jenis Kelamin</label>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jk" id="pria" value="Pria" <?php echo ($jk == 'Pria') ? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="pria">Pria</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jk" id="wanita" value="Wanita" <?php echo ($jk == 'Wanita') ? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="wanita">Wanita</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>