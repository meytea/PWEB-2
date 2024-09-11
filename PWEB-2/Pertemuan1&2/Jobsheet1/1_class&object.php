<?php
    //Definisi Class Mahasiswa
    Class Mahasiswa {

        //Atribut atau Properties
        public $nama;
        public $nim;
        public $jurusan;

        //Metode  atau Function untuk menampilkan data
        public function tampilkanData() {
            return "Nama Mahasiswa : $this->nama <br>
            NIM : $this->nim <br>
            Jurusan : $this->jurusan";
        }
    }

    //Instansiasi  Objek dari class mahasiswa
    $mahasiswa = new Mahasiswa ();
    $mahasiswa->nama ="Meilita Ayu Nur Khasanah";
    $mahasiswa->nim ="230102038";
    $mahasiswa->jurusan ="Komputer dan Bisnis";


    //Menampilkan data mahasiswa menggunakan metode tampilkanData()
    echo $mahasiswa->tampilkanData();
?>
