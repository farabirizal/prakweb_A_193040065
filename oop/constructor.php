<?php

class Produk {
public $judul = "judul",
       $penulis = "penulis",
       $penerbit = "penerbit",
       $harga = 0;

       public function __construct($judul, $penulis, $penerbit, $harga){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;

       }

       public function getLabel() {
        return "$this->penulis, $this->penerbit";
       }
}




$produk3 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump","30000");


$produk4 = new Produk("Uncharted","Masashi Kishimoto","Shonen Jump","30000");

$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "250000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();