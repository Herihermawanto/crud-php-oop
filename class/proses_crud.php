<?php 
include 'connection.php';

class proses_crud extends connection {

    public function getData($query) {
        $hasil = $this->koneksi->query($query);

        if($hasil == false) {
            return false;
        }

        $baris = array();

        while ($row = $hasil->fetch_assoc()){
            $baris[] = $row;
        }
        return $baris;
    }
    
    function execute($query) {
        $hasil = $this->koneksi->query($query);
        
        if($hasil == false) {
            echo "Query gagal di jalankan";
            return false;
        } else {
            echo "Query berhasil di jalankan";
            return true;
        }
    }
    
    function delete($id, $table){
        $query = "DELETE FROM $table WHERE id = $id";

        $hasil = $this->koneksi->query($query);
        
        if($hasil == false) {
            echo "Query gagal di jalankan";
            return false;
        } else {
            echo "Query berhasil di jalankan";
            return true;
        }
    }
}
?>