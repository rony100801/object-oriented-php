<?php

// Jualan Produk
// Komik dan Game
class Produk
{

  // PROPERTY
  public $judul, $penulis, $penerbit, $harga;

  // CONSTRUCTOR
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // METHOD
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk3 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 120000);

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
