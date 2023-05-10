<?php
class Sekolah {
    public $nama = "Wikrama";
    private $alamat = "Jl. Raya Tajur";
    protected $jumlahSiswa = 1794;
    protected $jumlahGuru = 150;
    protected $jumlahKelas = 18;

    public function getnama(){
        return $this->nama;
    }

    public function getalamat(){
        return $this->alamat;
    }
    public function getjumlahSiswa(){
        return $this->jumlahSiswa;
    }
    public function getjumlahGuru(){
        return $this->jumlahGuru;
    }
    public function getjumlahKelas(){
        return $this->jumlahKelas;
    }
}
class Kelas extends Sekolah {

    public function getnama(){
        return $this->nama;
    }

    public function getalamat(){
        return $this->alamat;
    }
    public function getjumlahSiswa(){
        return $this->jumlahSiswa;
    }
    public function getjumlahGuru(){
        return $this->jumlahGuru;
    }
    public function getjumlahKelas(){
        return $this->jumlahKelas;
    }
}
$s1 = new Kelas();
echo $s1->getnama(); 
echo $s1->getalamat(); 
echo $s1->getjumlahSiswa(); 
echo $s1->getjumlahGuru(); 
echo $s1->getjumlahKelas(); 

?>