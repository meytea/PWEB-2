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


