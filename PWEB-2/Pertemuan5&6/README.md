<h2>JobSheet 3</h2>

<h3>Penerapan masing-masing konsep OOP</h3>

<h3>1. Inheritance</h3>

```php
<?php
// Membuat Parent class Person (Inheritance)
class Person {
    protected $name;

    //Membuat metode Construct
    public function __construct($name) {
        $this->name = $name;
    }

    // Membuat metode getRole yang akan di override oleh dosen dan mahasiswa(Polymorphism)
    public function getRole() {
        return "Person";
    }

    // Membuat metode 
    public function getName() {
        return $this->name;
    }
}

// Kelas Dosen mewarisi dari Person
class Dosen extends Person {

    // Mmebuat atribut nidn private (Encapsulation)
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Getter dan Setter untuk NIDN
    public function getNidn() {
        return $this->nidn;
    }

    public function setNip($nidn) {
        $this->nidn = $nidn;
    }

    // Membuat Override getRole untuk Dosen (Polymorphism)
    public function getRole() {
        return "Dosen";
    }
}

// Membuat class Mahasiswa mewarisi dari Person
class Mahasiswa extends Person {
    // Membuat nim sebagai atribut private (Encapsulation)
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Getter dan Setter untuk NIM
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    //  Override getRole untuk Mahasiswa (Polymorphism)
    public function getRole() {
        return "Mahasiswa";
    }
}

// Membuat class abstrak Jurnal (Abstraction)
abstract class Jurnal {
    protected $title;

    public function __construct($title) {
        $this->title = $title;
    }

    // Metode abstrak untuk pengajuan jurnal
    abstract public function submit();
}

// Kelas JurnalDosen mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    private $nidn;

    public function __construct($title, $nidn) {
        parent::__construct($title);
        $this->nidn = $nidn;
    }

    public function submit() {
        return "Judul Jurnal :'{$this->title}' <br>Diajukan oleh NIDN: {$this->nidn}";
    }
}

// Kelas JurnalMahasiswa mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function __construct($title, $nim) {
        parent::__construct($title);
        $this->nim = $nim;
    }

    public function submit() {
        return " Judul Jurnal : '{$this->title}' <br> Diajukan oleh NIM: {$this->nim}";
    }
}

// Contoh penggunaan 
$dosen = new Dosen("Ahmad Suryadi, S.Kom, M.Kom", "1989127612628");

echo "<b>Dosen</b><br>
        Name: " . $dosen->getName() . "<br> 
        Penulis: " . $dosen->getRole() . "<br> 
        NIDN: " . $dosen->getNidn(). "<br>";
$jurnalDosen = new JurnalDosen("Research on AI", $dosen->getNidn());
echo $jurnalDosen->submit();
echo "<br><hr>";


$mahasiswa = new Mahasiswa("Meilita Ayu Nur Khasanah", "230102038");
echo "<b>Mahasiswa</b><br>
        Name: " . $mahasiswa->getName() . "<br>
        Penulis: " . $mahasiswa->getRole() . "<br>
        NIM: " . $mahasiswa->getNim(). "<br>";

// Pengajuan jurnal Mahasiswa
$jurnalMahasiswa = new JurnalMahasiswa("Final Project on Web Development", $mahasiswa->getNim());


echo $jurnalMahasiswa->submit();
?>

```

Output : ![1](https://github.com/user-attachments/assets/3e8e1c51-b3cc-412a-9485-086734fc5491)


<h3>2. Polymorphism</h3>

```php
<?php
    // Membuat class person sebagai parent class
    class Person {
        public $name;

        // Metode untuk mendapatkan nama
        public function getName() {
            return $this->name;
        }
    }

    // Class Teacher mewarisi dari Person dan memiliki atribut tambahan teacherID
    class Teacher extends Person {
        public $teacherID;

        // Metode untuk mendapatkan teacherID
        public function getTeacherID() {
            return $this->teacherID;
        }
    }

    // Class Student mewarisi dari Person dan memiliki atribut tambahan studentID
    class Student extends Person {
        public $studentID;

        // Metode untuk mendapatkan studentID
        public function getStudentID(){
            return $this->studentID;
        }
    }

    // Membuat objek Teacher dan menetapkan nilai name dan teacherID secara manual
    $teacher = new Teacher();

    $teacher->name = "Agus Purnomo"; // Menetapkan nilai name
    $teacher->teacherID = 199213127128; // Menetapkan nilai teacherID

    // Menampilkan nilai name dan teacherID dari objek Teacher
    echo "Name : " . $teacher->getName();
    echo "<br>";
    echo "Teacher ID : " . $teacher->getTeacherID();
    echo "<br><hr>";

    $student = new Student();
    // Membuat objek Student dan menetapkan nilai name dan studentID secara manual
    $student->name = "Meilita Ayu Nur Khasanah"; // Menetapkan nilai name
    $student->studentID = 230102038; // Menetapkan nilai studentID

    // Menampilkan nilai name dan studentID dari objek Student
    echo "Name : " . $student->getName();
    echo "<br>";
    echo "Student ID : " . $student->getStudentID();
?>

```

Output: ![2](https://github.com/user-attachments/assets/67a30d9e-183a-4724-91e9-ca09d65bc8c6)


<h3>3. encapsulation</h3>

```php
<?php
    // Class Person dengan atribut private $name
    class Person {
        private $name;

        // Metode untuk mendapatkan nama
        public function getName() {
            return $this->name;
        }

        // Metode untuk mengatur nama
        public function setName($name) {
            $this->name = $name;
        }
    }

    // Class Student mewarisi dari Person, dengan atribut tambahan $studentID
    class Student extends Person {
        private $studentID;

        // Metode untuk mengatur studentID
        public function setStudentID($studentID) {
            $this->studentID = $studentID;
        }
        
        // Metode untuk mendapatkan studentID
        public function getStudentID(){
            return $this->studentID;
        }

        // Metode untuk mendapatkan nama dari parent class
        public function getName() {
            return parent::getName();
        }
    }

    // Membuat objek Student dan menetapkan nilai secara manual
    $student = new Student();
    $student->setName("Meilita Ayu Nur Khasanah"); // Menetapkan nilai name
    $student->setStudentID(230102038); // Menetapkan nilai studentID

    // Menampilkan data sebelum diubah
    echo "<b>Sebelum Di Ubah</b><br>";
    echo "Name : " . $student->getName();
    echo "<br>";
    echo "Student ID : " . $student->getStudentID();
    echo "<br><hr>";

    // Mengubah nilai name dan studentID
    $student->setName("Agus Purnomo");
    $student->setStudentID(199211238248);

    // Menampilkan data setelah diubah
    echo "<b>Setelah Di Ubah</b><br>";
    echo "Name : " . $student->getName();
    echo "<br>";
    echo "Student ID : " . $student->getStudentID(); 
?>

```

Output : ![3](https://github.com/user-attachments/assets/464ed721-5610-409a-a6e8-ba0bf2a3d75d)


<h3>4. Abstraction</h3>

```php
<?php
//Membuat class abstract (sebagai parent class)
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

// Membuat child class OnlineCourse 
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

//Mmebuat child class 
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

// Contoh penggunaan
$onlineCourse = new OnlineCourse("Junior Web Developer", "Wendi", "Zoom", 8);
$offlineCourse = new OfflineCourse("Junior Network Administration", "Wawan Setiawan", "Auditorium PNC", "20/10/2024");

echo $onlineCourse->getCourseDetails();
echo "<br><hr>";
echo $offlineCourse->getCourseDetails();
?>

```

Output : ![4](https://github.com/user-attachments/assets/94fea37e-191d-4498-b70e-91173e6a60f7)
