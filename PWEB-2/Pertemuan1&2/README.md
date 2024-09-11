<h2>Jobsheet 1 </h2>

<h3>Kelas dan Objek dalam PHP</h3>
<h4>Kelas (Class)</h4>

```php
Class Mahasiswa {
```
- Template/ blueprint untuk membuat instance dari sebuah object
- Class mendefinisikan object
- Menyimpan data dan perilaku yang disebut dengan property dan method

<h4>Object</h4>

```php
$buku1 = new Buku;
```

- Instance yang didefinisikan oleh class
- Banyak object dapat dibuat menggunakan satu class
- Dibuat dengan menggunakan keyword new

<h3>Property dan Method</h3>

<h4>Property</h4>

```php
Class Mahasiswa {
        public $nama;
        public $nim;
        public $jurusan;
}
```

- Memrepresentasikan data/ keadaan dari sebuah object
- Variabel yang ada di dalam object (member variable)
- Jenis - jenis Property :
  - public = atribut yang dapat diakses dari mana saja, baik dalam dari dalam kelas, dari child class (kelas turunan), maupun dari luar kelas.
  - private = atribut yang hanya dapat diakses dari dalam class itu sendiri.
  - protected = atribut yang dapat diakses dari dalam class itu sendiri dan dari dalam child class.

<h4>Method</h4>

```php
public function __construct() {
        }
```
- Merepresentasikan perilaku dari sebuah object
- Function yang ada di dalam object

<h4>Constructor Method</h4>

```php
public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
```

Sebuah method spesial atau khusu yang ada dalam sebuah kelas, method yang otomatis dijalankan ketika sebuah kelas instansiasi atau dibuat objectnya.

<h4>Instansiasi</h4>

```php
    $mahasiswa = new Mahasiswa ("Meilita Ayu Nur Khasanah", "230102038", "Komputer dan Bisnis");

```

- instansiasi adalah proses menciptakan sebuah instance (objek) dari suatu class. Dengan kata lain, ketika sebuah class dibuat, class tersebut hanyalah sebuah blueprint atau template yang mendefinisikan struktur dan perilaku dari objek-objek yang akan dibuat berdasarkan class tersebut. Untuk menggunakan class tersebut, kita harus membuat instance dari class tersebut, yang sering disebut juga sebagai instansi objek.
<h4>Getter dan Setter</h4>

```php
public function getNama(){
            return "Nama : $this->nama";
        }

        public function setNama($nama) {
            $this->nama = $nama;
        }
  ```
- Getter dan setter adalah metode dalam pemrograman berorientasi objek yang digunakan untuk mengakses dan memodifikasi nilai atribut (properties) dari suatu objek, terutama ketika atribut tersebut memiliki akses yang private atau protected.
- Bagian penting dari encapsulation, yang membantu menjaga keamanan dan integritas data dalam objek.

<h4>Menampilkan data</h4>

```php
     echo $mahasiswa->tampilkanData();
```

contoh menampilkan data menggunakan metode yg bernama tampilkanData

<h3>1. Membuat Class dan Object</h3>

```php
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
```
Output : ![1](https://github.com/user-attachments/assets/2a719fb1-78c1-404b-acfc-f820cf37639c)

<h3>2. Encapsulation</h3>

```php
<?php

    //Definisi Class Mahasiswa dengan encapsulatiin
    class Mahasiswa {

        //Atribut atau Properties private (tidak bisa di akses langsung dari luar class)
        private $nama;
        private $nim;
        private $jurusan;

        //Metode atau Function
        //Getter dan Setter untuk atribut nama
        public function getNama(){
            return "Nama : $this->nama";
        }

        public function setNama($nama) {
            $this->nama = $nama;
        }

        //Getter dan Setter untuk atribut nim
        public function getNim(){
            return "NIM : $this->nim";
        }
 
        public function setNim($nim) {
            $this->nim = $nim;
        }

        //Getter dan Setter untuk atribut jurusan
        public function getJurusan(){
            return "Jurusan : $this->jurusan";
        }

        public function setJurusan($jurusan) {
            $this->jurusan = $jurusan;
        }
    }

    //Instansiasi Objek dari class Mahasiswa menggunakan setter
    $mahasiswa = new Mahasiswa(); 
    $mahasiswa->setNama("Meilita Ayu Nur Khasanah");
    $mahasiswa->setNim ("230102038");
    $mahasiswa->setJurusan ("Komputer dan Bisnis");

    //Mengakses metode getter
    echo $mahasiswa->getNama();
    echo "<br>";
    echo $mahasiswa->getNim();
    echo "<br>";
    echo $mahasiswa->getJurusan();
    echo "<br>";
    echo "<br>";

    //Mengakses dan mengubah data menggunakan setter
    $mahasiswa->setNama ("Meilita Ayu Nur Khasanah");
    $mahasiswa->setNim ("230102038");
    $mahasiswa->setJurusan ("Teknik Informatika");
    echo "<b>Data Setelah Di Ubah</b><br>";

    //Mengakses metode getter
    echo $mahasiswa->getNama();
    echo "<br>";
    echo $mahasiswa->getNim();
    echo "<br>";
    echo $mahasiswa->getJurusan();
?>
```
Output: ![2](https://github.com/user-attachments/assets/0426e36a-adf3-4fa8-88ee-aa8b2b65c8db)

<h3>3. Inheritance</h3>

```php
<?php
// Definisi class Pengguna (parent class)
class Pengguna {
    // Atribut public (dapat diakses di mana saja)
    public $nama;

    // Metode untuk mendapatkan nama pengguna (getter)
    public function getNama() {
        return $this->nama;
    }
}

// Definisi class Dosen yang mewarisi/mengakses class Pengguna
class Dosen extends Pengguna {
    // Atribut public tambahan untuk class Dosen
    public $mataKuliah;

    // Metode untuk menampilkan data dosen 
    public function tampilDataDosen() {
        echo "Nama Dosen    : " . $this->getNama() . "<br>";
        echo "Mata Kuliah   : " . $this->mataKuliah . "<br>";  // Mengakses atribut langsung
    }
}

// Instansiasi objek dari class Dosen
$dosen = new Dosen();

// Mengakses atribut public langsung dari luar kelas
$dosen->nama = "Agus Widodo";       // Akses langsung ke atribut public
$dosen->mataKuliah = "Matematika";   // Akses langsung ke atribut public

// Menampilkan data dosen
$dosen->tampilDataDosen();
?>
```

Output : ![3](https://github.com/user-attachments/assets/f96a9c1f-5d58-4b27-86ec-c1aee3dd4976)

<h3>4. Polymorphism</h3>

```php
<?php
    // Definisi class Pengguna (parent class)
    class Pengguna {
        // Atribut public (dapat diakses langsung dari luar kelas)
        public $nama;

        // Metode akses fitur (akan di-overridden di subclass)
        public function aksesFitur(){
            return "Akses Fitur ";
        }
    }

    // Definisi class Dosen yang mewarisi class Pengguna
    class Dosen extends Pengguna {
        // Tidak ada atribut tambahan

        // Override metode aksesFitur untuk Dosen
        public function aksesFitur() {
            echo "Nama Dosen: " . $this->nama . "<br>";
            echo "Fitur Dosen: Mengelola perkuliahan, Mengupload materi, dan menilai <br>";
        }
    }

    // Definisi class Mahasiswa yang mewarisi class Pengguna
    class Mahasiswa extends Pengguna {
        // Tidak ada atribut tambahan

        // Override metode aksesFitur untuk Mahasiswa
        public function aksesFitur() {
            echo "Nama Mahasiswa: " . $this->nama . "<br>";
            echo "Fitur Mahasiswa: Mengikuti kelas, mengerjakan tugas, dan melihat nilai<br>";
        }
    }

    // Instansiasi objek dari class Dosen dan Mahasiswa tanpa constructor
    $dosen = new Dosen();
    $dosen->nama = "Agus Purnono";          // Mengatur nilai atribut public dari parent class
    $dosen->aksesFitur();

    echo "<hr><br>";

    $mahasiswa = new Mahasiswa();
    $mahasiswa->nama = "Meilita Ayu Nur K"; // Mengatur nilai atribut public dari parent class
    $mahasiswa->aksesFitur();
?>
```

Output : ![4](https://github.com/user-attachments/assets/269daa6e-9d70-4299-9506-c91019397b47)

<h3>5.Abstraction </h3>

```php
<?php
    // Definisi class abstrak Pengguna sebagai parent class
    abstract class Pengguna {
        protected $nama;  // Atribut atau property


        // Constructor untuk menginisialisasi nama
        public function __construct($nama) {
            $this->nama = $nama;
        }

        // Metode abstrak aksesFitur (harus diimplementasikan di child class)
        abstract protected function aksesFitur();
        
    }

    // Definisi class Mahasiswa yang mengimplementasikan class Pengguna
    class Mahasiswa extends Pengguna {

        private $jurusan;     //Atribut tambahan untuk class Mahasiswa

        //function Constructor
        public function __construct($nama, $jurusan) {
            parent::__construct($nama); //Memanggil nama yang ada di parent class
            $this->jurusan = $jurusan;
        }
        //Implementasi metode aksesFitur untuk Mahasiswa
        public function aksesFitur() {
            echo "Nama : " . $this->nama . "<br>";
            echo "Jurusan : " . $this->jurusan . "<br>";
            echo "Fitur Mahasiswa: Mengikuti kelas, mengerjakan tugas, dan melihat nilai<br>";
        }
    } 

    // Definisi class Mahasiswa yang mengimplementasikan class Pengguna
    class Dosen extends Pengguna {

        private $mataKuliah; //Atribut tambahan untuk class Dosen

        //function Constructor
        public function __construct($nama, $mataKuliah) {
            parent::__construct($nama);
            $this->mataKuliah = $mataKuliah;
        }

         //Implementasi metode aksesFitur untuk Mahasiswa
         public function aksesFitur() {
            echo "Nama : " . $this->nama . "<br>";
            echo "Mata Kuliah : " . $this->mataKuliah . "<br>";
            echo "Fitur Dosen: Mengelola perkuliahan, Mengupload materi, dan menilai <br>";

        }     
    }

    // Instansiasi objek dari class Mahasiswa dan Dosen
    $mahasiswa = new Mahasiswa( "Meilita Ayu Nur Khasanah", "JKB");

    // Memanggil metode aksesFitur untuk masing-masing objek
    echo " Mahasiswa.<br>";
    $mahasiswa->aksesFitur();

    echo "<hr>";

    $dosen = new Dosen("Agus Purnomo", "Pemrograman Web");
    echo "Dosen.<br>";
    $dosen->aksesFitur();
?>
```
Output : ![5](https://github.com/user-attachments/assets/495a889f-d4a2-456e-9189-f3f55a22a1f0)
