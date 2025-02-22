<?php 
include 'class/proses_crud.php';
// inisialisasi class
$a = new proses_crud();
// ambil data berdasarkan id
$id = $_GET['id'];
// hapus data berdasarkan id dan table data diri
$hasil = $a->delete($id, 'tbl_datadiri');
// var_dump($hasil);die();
if ($hasil){
    echo "<script>alert('Data Berhasil dihapus');window.location='index.php';</script>";
}

?>