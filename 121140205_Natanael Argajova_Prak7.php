<?php

class Subject {
  public $nama, $nim, $alamat, $email;
  
  public function __construct($nama, $nim, $alamat, $email) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->alamat = $alamat;
    $this->email = $email;
  }

  public function tampil() {
    echo "Nama: " . $this->nama . "\n"; 
    echo "NIM: " . $this->nim . "\n";
    echo "Alamat: " . $this->alamat . "\n";
    echo "Email: " . $this->email . "\n";
    echo "\n";
  }
}

$Subject1 = new Subject("Natanael Argajova", "121140205", "Korpri", "natanael.121140205@student.itera.ac.id");
$Subject1->tampil();
$Subject2 = new Subject("Toni Kurni", "125140101", "Kemiling" , "toni.125140101@student.itera.ac.id");
$Subject2->tampil();

//Natanael Argajova 121140205 RB
?>

