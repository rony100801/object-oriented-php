<?php

// Jualan Produk
// Komik dan Game

use Produk as GlobalProduk;

class Produk
{

  // PROPERTY
  public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain;

  // CONSTRUCTOR
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  // METHOD
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

class Komik extends Produk
{
  // public $jmlHalaman;
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";

    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    return $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
  }
}

$produk3 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0);
$produk4 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 120000, 0, 50);
// $infoProduk3 = new CetakInfoProduk();

echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
