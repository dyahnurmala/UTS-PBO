#########################################################################################
Dasar Teori GUI (Graphical User Interface) adalah suatu model antarmuka komputer yang 
menggunakan objek-objek grafis sebagai media interaksi dengan user.konsep antarmuka 
berbasis grafis yang dikembangkan untuk menggantikan antarmuka berbasis teks. 
#########################################################################################

<?php   

interface MyInterfaceName{
    public function metodeA();
    public function metodeB();
} 

class MyClassName implements MyInterfaceName{
    public function metodeA(){
        echo "MetodeA Called" . "\n";
    } 
    public function metodeB(){
        echo "MetodeB Called". "\n";
    }
} 

$obj = new MyClassName;
$obj->metodeA();
$obj->metodeB();
?>