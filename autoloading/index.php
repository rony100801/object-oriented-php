<?php

require 'app/init.php';

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 120000, 50);
// $infoProduk1 = new CetakInfoProduk();
$cetakInfoProduk = new CetakInfoProduk();
$cetakInfoProduk->tambahProduk($produk1);
$cetakInfoProduk->tambahProduk($produk2);
echo $cetakInfoProduk->cetak();
