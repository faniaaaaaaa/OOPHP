<?php
class Sekolah{
    public    $nama = "Wikrama",
              $alamat = "Jl. Raya Tajur";
    public    $jumlahSiswa = 33,
              $jumlahGuru = 150;
    public    $jumlahKelas = 18;

    public function setnama($nama){
        $this->nama=$nama;
    }
    public function setalamat($alamat){
        $this->alamat=$alamat;
    }
    public function setjumlahSiswa($jumlahSiswa){
        $this->jumlahSiswa=$jumlahSiswa;
    }
    public function setjumlahGuru($jumlahGuru){
        $this->jumlahGuru=$jumlahGuru;
    }
    public function setjumlahKelas($jumlahKelas){
        $this->jumlahKelas=$jumlahKelas;
    }
    public function getCetak(){
        echo "Nama : ". $this->nama;
        echo "<br>";
        echo "Alamat : ".$this->alamat;
        echo "<br>";
        echo "Jumlah siswa : ".$this->jumlahSiswa;
        echo "<br>";
        echo "Jumlah guru : ".$this->jumlahGuru;
        echo "<br>";
        echo "Jumlah kelas : ".$this->jumlahKelas;
        echo "<br>";
    }
}
$people1 = new Sekolah();
$people1->getCetak();

?>