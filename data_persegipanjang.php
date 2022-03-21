<?php
include_once "class_persegipanjang.php";
$persegipanjang1 = new Persegipanjang(8, 5);
$persegipanjang2 = new Persegipanjang(10, 5);

echo "<br/> Persegi Panjang 1 (Panjang = 8, Lebar = 5)";
echo "<br/> Persegi Panjang 2 (Panjang = 10, Lebar = 5) ";

echo "<br/> Luas Persegi Panjang 1 : " .$persegipanjang1->getLuas();
echo "<br/> Luas Persegi Panjang 2 : " .$persegipanjang2->getLuas();

echo "<br/> Keliling Persegi Panjang 1 : " .$persegipanjang1->getKeliling();
echo "<br/> Keliling Persegi Panjang 2 : " .$persegipanjang2->getKeliling();
?>