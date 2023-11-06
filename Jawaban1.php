############################################################################
#Inheritance atau pewarisan adalah suatu cara untuk membuat sebuah kelas yang baru 
dengan menggunakan kelas lain yang sebelumnya sudah dibuat. Pada hubungan inheritance, 
sebuah class turunan mewarisi kelas leluhur (parent class). 
mewarisi, maka semua atribut dan method class dari induk akan dibawa 
(kecuali  yang bersifat private), secara intrinsik menjadi bagian dari class anak
############################################################################

<?php  
class Fruit {  
  public $name;  
  public $color;  
  public function __construct($name, $color) {  
    $this->name = $name;  
    $this->color = $color;  
  }  
  protected function intro() {  
    echo "Adalah Buah <b>{$this->name}</b> dan warnanya <b>{$this->color}</b><br>";  
  }  
  public function public_intro() {  
    echo $this->intro();  
  }  
}  
  
class Mangga extends Fruit {  
  public function message() {  
    echo "Ini Buah atau jenis Ubi ? ";  
  }  
}  
  
$bengkuang = new Fruit("Bengkuang","Putih");  
$bengkuang->public_intro();  
  
$mangga = new Mangga ("Mangga", "orange");  
$mangga->message();
// $mangga->intro();  
?>