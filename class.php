<?php 
    class Mobil {
    public $merk;

    public function jalan($merk) {
        echo "Merk mobil : $merk" . PHP_EOL;
        echo "Mobil berjalan". PHP_EOL;
    }

}

$mobil1 = new Mobil();
$mobil1->merk = "Toyota";
$mobil1->jalan($mobil1->merk);

$mobil2 = new Mobil();
$mobil2->merk = "Avanza";
$mobil2->jalan($mobil2->merk);
?>