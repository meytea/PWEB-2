<h2>JobSheet 3</h2>

<h3>Penerapan masing-masing konsep OOP</h3>

<h3>1. Inheritance</h3>
<h5>
    Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan
metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan
menciptakan hubungan hierarkis antara kelas.
</h5>
<ol>
<li>mendefinisikan kelas dasar yang akan menjadi kelas induk. .</li>

```php
<?php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
 }
 ?>

```

<li> Membuat kelas turunan yang mewarisi dari kelas dasar.</li>

```php
 class Student extends Person {
        public $studentID;

        public function __construct($name, $studentID) {
            parent::__construct($name);
            $this->studentID = $studentID;
        }
        
        public function getStudentID(){
        return $this->studentID;
        }
    }
```

- Instansiasi: new Student("Meilita Ayu Nur Khasanah", 230102038) membuat objek Student dengan nama dan ID siswa.
</ol>


Output : ![1](https://github.com/user-attachments/assets/3e8e1c51-b3cc-412a-9485-086734fc5491)


<h3>2. Polymorphism</h3>
<h5>Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek
dapat diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.
Contoh coding:</h5>

<ol>
    <li>Medefinisikan Kelas Dasar Person</li>
    
    ```php
     class Person {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
    }

    ```
    
<li>Memuat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut teacherID.</li>
<li>Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda</li>


```php
class Student extends Person {
        public $studentID;

        public function __construct($name, $studentID) {
            parent::__construct($name);
            $this->studentID = $studentID;
        }
        
        public function getStudentID(){
            return $this->studentID;
        }

    }

    class Teacher extends Person {
        public $teacherID;

        public function __construct($name, $teacherID) {
            parent::__construct($name);
            $this->teacherID = $teacherID;
        }

        public function getName() {
            return $this->name;
        }

        public function getTeacherID() {
            return $this->teacherID;
        }
    }

```
</ol>

Output: ![2](https://github.com/user-attachments/assets/67a30d9e-183a-4724-91e9-ca09d65bc8c6)



<h3>3. encapsulation</h3>
<h5>Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal tetap aman dari perubahan tak terduga.</h5>

<ol>
<li>Mendefinisikan kelas Person </li>

```php
    class Person {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }
       
        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }
    }
```
    
<li>Mendefinisikan kelas Student</li>

```php
class Student extends Person {
        private $studentID;

        public function __construct($name, $studentID) {
            parent::__construct($name);
            $this->studentID = $studentID;
        }

        public function setStudentID($studentID) {
            $this->studentID = $studentID;
        }
        
        public function getStudentID(){
            return $this->studentID;
        }

        public function getName() {
            return parent::getName();
        }

    }

```

<li>Instansiasi dan Penggunaan Kelas</li>

```php
 $student = new Student ("Meilita Ayu Nur Khasanah", 230102038);
    echo "<b>Sebelum Di Ubah</b><br>";
    echo "Name : " . $student->getName();
    echo "<br>";
    echo "Student ID : " . $student->getStudentID();
    echo "<br><hr>";
    
    $student->setName("Agus Purnomo");
    $student->setStudentID(199211238248);

    echo "<b>Setelah Di Ubah</b><br>";
    echo "Name : " . $student->getName();
    echo "<br>";
    echo "Student ID : " . $student->getStudentID(); 
```

-  Properti name dan studentID tidak dapat diakses langsung dari luar kelas. Anda hanya dapat mengaksesnya melalui metode getter (getName(), getStudentID()) dan setter (setName(), setStudentID()).
- Metode setter dan getter memberikan kontrol penuh atas bagaimana data diakses dan diubah. Ini mencegah akses tidak sah dan memastikan bahwa data tetap valid.
- Kelas Student mewarisi dari Person dan meng-override metode getName() untuk menggunakan implementasi dari kelas dasar. Ini menunjukkan bagaimana enkapsulasi bekerja dalam konteks pewarisan.
</ol>

Output: ![3](https://github.com/user-attachments/assets/58894e1d-a596-4224-9fcf-ee9a73479559)


<h3>4. Abstraction</h3>
<h5>Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.
</h5>

<ol>
<li>Membuat Kelas Abstract Course dengan Metode getCourseDetails()</li>
    
```php
    abstract class Course {
    protected $courseName;
    protected $instructor;

    //Metode construct
    public function __construct($courseName, $instructor) {
        $this->courseName = $courseName;
        $this->instructor = $instructor;
    }

    //Membuat fungsi atau metode abstract
    abstract public function getCourseDetails();
    }
```

<li>Membuat child class OnlineCourse dan offline Course</li>

```php
class OnlineCourse extends Course {
    private $platform;
    private $duration; 

   //Membuat metode construct
    public function __construct($courseName, $instructor, $platform, $duration) {
        parent::__construct($courseName, $instructor);
        $this->platform = $platform;
        $this->duration = $duration;
    }

    public function getCourseDetails() {
        return " <b>Online Course </b><br>
                Course Name: {$this->courseName}<br>
                Instructor: {$this->instructor}<br>
                Platform: {$this->platform}<br> 
                Duration: {$this->duration} weeks ";
    }
}

class OfflineCourse extends Course {
    private $location;
    private $schedule; 

    //Membuat metoded constryct
    public function __construct($courseName, $instructor, $location, $schedule) {
        parent::__construct($courseName, $instructor);
        $this->location = $location;
        $this->schedule = $schedule;
    }

    public function getCourseDetails() {
        return "<b> Offline Course </b><br>
                Course Name: {$this->courseName}<br> 
                Instructor: {$this->instructor} <br> 
                Location: {$this->location}<br> 
                Schedule: {$this->schedule} (Offline)";
    }
}

```

- Kelas Course adalah kelas abstrak yang mendefinisikan struktur dasar dan menetapkan kontrak bahwa setiap kelas turunan harus mengimplementasikan metode getCourseDetails(). Ini menyembunyikan detail implementasi dari pengguna kelas.
- Metode getCourseDetails() adalah metode abstrak yang tidak memiliki implementasi di kelas Course tetapi harus diimplementasikan oleh setiap kelas turunan. Ini menyediakan fleksibilitas untuk kelas turunan dalam menentukan bagaimana detail kursus disajikan.
- Implementasi Konkrit: Kelas OnlineCourse dan OfflineCourse memberikan implementasi spesifik untuk metode getCourseDetails(), masing-masing sesuai dengan jenis kursus mereka. Ini adalah penerapan konkret dari metode abstrak.
</ol>


Output : ![4](https://github.com/user-attachments/assets/94fea37e-191d-4498-b70e-91173e6a60f7)
