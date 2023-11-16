#########################################################################################
Encapsulation adalah salah satu prinsip dasar dalam Pemograman Berorientasi Objek (PBO) 
yang bertujuan untuk membungkus data dalam satu unit. 
Tujuan utama encapsulation adalah untuk menyembunyikan detail internal implementasi objek 
dari dunia luar dan menyediakan interface yang dapat berinteraksi dengan objek tersebut. 
Enkapsulasi dapat dilakukan dengan mendeklarasikan semua variabel di suatu unit (kelas) 
sebagai privat dan menulis metode publik di dalam kelas tersebut untuk 
mengatur dan mendapatkan nilai variabel.
#########################################################################################

<?php
 
//class manusia
class manusia{
    //prop
    public $nama;
    public $warna;
    
    //method manusia
    function tampilkan_nama(){
        return "Nama saya dyahnurmala <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();