#########################################################################################
Polymorphism secara bahasa, memiliki makna “banyak bentuk” atau “bermacam-macam”. 
Dalam beberapa textbook, Polymorphism adalah konsep dimana suatu interface tunggal 
digunakan pada entity yang berbeda-beda, atau penggunaan suatu symbol tunggal untuk 
mewakili beberapa jenis tipe entity.
#########################################################################################

<?php
class base11
{
    function add1($a1,$b1){
    $res1=$a1*$b1;
    echo "Multiplication = ".$res1;
    }
}
    class child1 extends base11
{
    function add1($a1,$b1){
    $res1=$a1+$b1;
    echo "Sum  = ".$res1;
    }
}
    $obj= new child1();
    $obj->add1(1000,500);
?>