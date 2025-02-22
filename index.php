<?php 
// ambil class proses_crud
include 'class/proses_crud.php';
// inisialisasi class proses_crud 
$a = new proses_crud();
// ambil data dari database
$query = "SELECT * FROM tbl_datadiri order by id DESC";
$results = $a->getData($query);
// var_dump($hasil);die();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <title>CRUD PHP</title>
  </head>
  <body>
    <div class="container">
        
      <a href="tambah.php" class="btn btn-success mt-2 mb-2"><i class="fa-solid fa-plus"></i>Tambah Data</a>
      <a href="export.php" class="btn btn-warning mt-2 mb-2 float-right"><i class="fa-solid fa-file-export"></i>Export Data</a>
      <!-- <a href="export.php" target="_blank" class="btn btn-success float-right"><i class="fa fa-file-excel-o"></i> &nbsp Excel</a>   -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($results as $row){
                    echo "<tr>";
                    echo "<td>". $no . "</td>";
                    echo "<td>". $row['nama']."</td>";
                    echo "<td>". $row['ttl']."</td>";
                    echo "<td>". $row['alamat']."</td>";
                    echo "<td>". $row['jk']."</td>";
                    echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"hapus.php?id=$row[id]\" onClick=\"return confirm('Yakin ingin menghapus ?')\">Hapus</a></td>";
                ?>
                <?php 
                $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>