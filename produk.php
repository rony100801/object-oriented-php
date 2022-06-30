<?php

// Jualan Produk
// Komik dan Game
class Produk
{

  // PROPERTY
  public $judul = "Judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0;

  // METHOD
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 120000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
